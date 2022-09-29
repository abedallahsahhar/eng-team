<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class DBOci{
		private $ip   = '127.0.0.1';
		private $user = 'abed' ;
		private $pass = '123' ;
		private $instance = 'orcl' ;
		private $encode =  'AL32UTF8';
		private $conn = '';
		private $output = array();
		private $lob = array();
		private $cur_ref = array('cur','cr','cursor','refcursor','SQLT_RSET');
		
//                function __construct(){
//			$this->conn = oci_pconnect( $this->user , $this->pass ,"$this->ip/$this->instance" , $this->encode ) ;//or die ('حدث مشكلة أثناء عملية الإتصال - تأكد من صحة البيانات');
//		}
		
		//function __construct($user='system'  , $pass ='admin'){
		function __construct($user='temp'  , $pass ='temp0'){
		//	$connect=$this->db_connect($user, $pass);
                         
                                
		}
                
        function db_connect($username, $password) {
                    if ($username && $password){
                  $conn_r= $this->conn = oci_connect( $username , $password ,"$this->ip/$this->instance" , $this->encode );
                      
               return $conn_r;
                    }
                }

		function excuteProcedures($package,$procedure,$params){
			$sql = "begin $package.$procedure(";
			foreach ($params as $param)
			{
				$sql .= $param['name'] . ",";
			}
			$sql = trim($sql, ",") . "); end;";
			$stmt = OCIParse($this->conn,$sql);
			$refcur = $this->bind_params($stmt,$params);
			oci_execute($stmt, OCI_DEFAULT);
			if(count($refcur) > 0){
				$this->excuteCursor($params,$refcur);
			}
			
			if(count($this->lob) > 0){
				$this->excuteBLOB($params,$this->lob);
			}
			oci_commit($this->conn);
			return $this->output;
		}

		function bind_params($stmt,$params)
		{
			$i=0; $outCount = 0; $this->output = array(); $refcur = []; $lob_counter = 0;
			foreach ($params as $param)
			{
				if(!in_array($param['type'],$this->cur_ref) && $param['type'] != 'wblob' && $param['type'] != 'rblob'){
					if(!is_array($param['value'])){
						$this->output[$param['value']] = $param['value'];
						OCIBindByName($stmt, $param['name'],$this->output[$param['value']],$param['length'],($param['type'] == '')?NULL:$param['type']);
					}
					else{
						$size = count($param['value'])==0?500:count($param['value']);
						$item_length = count($param['value'])==0?500:-1;
						oci_bind_array_by_name($stmt, $param['name'],$param['value'],$size,$item_length,($param['type'] == '')?NULL:$param['type']);				
					}
				}
				else if($param['type'] == 'wblob' || $param['type'] == 'rblob'){
					$this->lob[$lob_counter] = oci_new_descriptor($this->conn, OCI_D_LOB);
					oci_bind_by_name($stmt,$param['name'], $this->lob[$lob_counter], -1, OCI_B_BLOB);
					$lob_counter++;
				}
				else{
					$refcur[$i] = ocinewcursor ($this->conn);
					OCIBindByName($stmt, $param['name'], $refcur[$i], -1, OCI_B_CURSOR);
					$i++;
				}
			}
			
			return $refcur;
		}
		
		function excuteCursor($params,$refcur){
			$cursorCounter = 0;
			foreach ($params as $param)
			{
				if(in_array($param['type'],$this->cur_ref)){
					OCIExecute($refcur[$cursorCounter], OCI_DEFAULT);
					oci_fetch_all($refcur[$cursorCounter], $this->output[$param['value']], null, null, OCI_FETCHSTATEMENT_BY_ROW);
					$cursorCounter ++;
				}
			}
		}
		
		function excuteBLOB($params,$lob){
			$lobCounter = 0;
			foreach ($params as $param)
			{
				if($param['type']== 'wblob' || $param['type']== 'rblob'){
					if($param['type']== 'wblob' && $param['value'] != '')
						$this->lob[$lobCounter]->savefile($param['value']);
					else
						$this->output[$param['value']] = $this->lob[$lobCounter];
					$lobCounter ++;
				}
			}
		}
	}
	
?>
