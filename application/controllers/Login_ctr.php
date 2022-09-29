<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_ctr extends CI_Controller {

 function __construct()
    {

        parent::__construct();
		/* if (!$this->drug_md->__construct()){

          $this->session->sess_destroy();
         //redirect( 'http://192.168.88.17/login/');
          echo 'لا يوجد اتصال في قواعد البيانات';

         }*/
    }


   /* public function login_drug(){

        $this->load->view('login') ;
}
*/


/*--------------------------------Item-----------------------------------------------------------------------------*/		
function login(){
    $this->load->model('eng_md');

    $param = array(
       
        array('name' => ':p_cardid', 'value' => $this->input->post('P_CARDID'), 'type' => '', 'length' => -1),
        array('name' => ':P_PASSWORD', 'value' =>  $this->input->post('P_PASSWORD'), 'type' => '', 'length' => -1),
        array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
        array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500),
        array('name' => ':p_counter', 'value' =>'p_counter', 	 'type' => '', 'length' => 500),
        array('name' => ':p_active', 'value' =>'p_active', 			 'type' => '', 'length' => 500),
        array('name' => ':pout', 'value' => 'pout', 'type' => 'cur', 'length' => -1),



    );
    $x = $this->eng_md->login($param);
        //echo json_encode($x);


  //  if($x['pout']){
    if($x['p_counter']==1 && $x['p_active']==1){

        $newdata = array(
					'P_CARDID'  => $this->input->post('P_CARDID'),
                    'P_PASSWORD'  => $this->input->post('P_PASSWORD'),
//					'p_errcod'  => $x[''],
//				'PICTURE'  => $x['PICTURE']
		     	'CARDID'  => $x['pout'][0]['CARDID'],
                    'FULLNAME'  => $x['pout'][0]['FULLNAME'],
                    'JOBTITLE'  => $x['pout'][0]['JOBTITLE'],
                    'SECION'  => $x['pout'][0]['SECION'],
                    'SECIONNAME'  => $x['pout'][0]['SECIONNAME'],

                    'PICTURE'  => $x['pout'][0]['PICTURE']


);

      $this->session->set_userdata($newdata);
	}else{
		
		
		$this->session->sess_destroy();
	}
	 echo json_encode($x);


}
    function logout(){
    //    redirect( 'main_ctr/emp4/');

        $this->session->sess_destroy();
        redirect( 'main_login/login/');
    }


} 