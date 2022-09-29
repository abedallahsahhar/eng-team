<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class eng_ctr extends CI_Controller {

 function __construct()
    {

        parent::__construct();
		 if (!$this->eng_md->__construct()){

          $this->session->sess_destroy();
         //redirect( 'http://192.168.88.17/login/');
          echo 'لا يوجد اتصال في قواعد البيانات';

         }



    }
    function read_update(){

        $param = array(
            array('name' => ':P_CARDID', 'value' =>  $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':P_ID', 'value' => $this->input->post('P_ID'), 'type' => '', 'length' => -1),
            array('name' => ':P_TABLE_ID', 'value' => $this->input->post('P_TABLE_ID'), 'type' => '', 'length' => -1)


        );

        $x = $this->eng_md->read_update($param);
        echo json_encode($x);
    }

    /*--------------------------------get_data1-----------------------*/
    function get_data(){


        $param = array(
          //  array('name' => ':p_result_out', 'value' => 'items', 'type' => 'cur', 'length' => -1),
         //   array('name' => ':P_RESULT_OUT', 'value' => 'P_RESULT_OUT', 'type' => 'cur', 'length' => 150),
            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => 500),

          // array('name' => ':p_result_out', 'value' => 'items', 'type' => 'cur', 'length' => 500),
           array('name' => ':P_ERRCOD', 'value' => 'P_ERRCOD', 'type' => '', 'length' => 500),
          array('name' => ':P_ERRMSG', 'value' =>'P_ERRMSG', 'type' => '', 'length' => 500)

        );
        $x = $this->eng_md->get_data($param);
        $data = array();
        foreach ($x['items']  as $row) {
            array_push($data,
                array(

                    'CARDID'=> $row['CARDID'],
                    'FULLNAME'=> $row['FULLNAME'],
                    'SECION'=> $row['SECION'],

                    'STATUSJOB'=> $row['STATUSJOB'],
                    'JOBTITLENAME'=> $row['JOBTITLENAME'],

                    'STATUSJOBNAME'=> $row['STATUSJOBNAME'],
                    'PASSWORD'=> $row['PASSWORD'],
                    'ACTIVE_STATE'=> $row['ACTIVE_STATE'],
                    'ACTIVE_STATENAME'=> $row['ACTIVE_STATENAME'],

                    'SECIONNAME'=> $row['SECIONNAME'],

                    'STATUS'=> $row['STATUS'],

                   // 'CITYNAME'=> $row['CITYNAME'],
                   // 'TELNO'=> $row['TELNO'],
                    'IMAGE'=> $this->get_pictur1e($row['CARDID']),

                )
            );
        };
        $out['items']=$data;
        echo json_encode($out);
        //echo json_encode($x);
    }
    function get_pictur1e($id){
        $para = array(
            array('name' => ':p1',          'value' =>$id, 'type' => '', 'length' => -1),
            array('name' => ':pout',                'value' => 'pout', 'type' => 'rblob', 'length' => -1),
            array('name' => ':P_ERRCOD', 'value' => 'P_ERRCOD', 'type' => '', 'length' => 500),
            array('name' => ':P_ERRMSG', 'value' =>'P_ERRMSG', 'type' => '', 'length' => 500)
        );
        $x = $this->eng_md->get_picture($para);
        $clob = $x['pout'];
        if($clob){
            $photo_blob = $clob->read($clob->size());

            $photo_blob= base64_encode($photo_blob);
            $clob->free();
            return ($photo_blob) ;
        }

        // echo json_encode($x);

    }
    function insert_data(){
        $date_BIRTHDATE='';
        if($this->input->post('BIRTHDATE')){
            $date= new DateTime($_POST['BIRTHDATE']);
            $date_BIRTHDATE=$date->format('d-M-y');
        }
        $DATESTARTCONTRACT='';
        if($this->input->post('DATESTARTCONTRACT')){
            $date= new DateTime($_POST['DATESTARTCONTRACT']);
            $DATESTARTCONTRACT=$date->format('d-M-y');
        }
        $param = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_firstname', 'value' => $this->input->post('FIRSTNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_fathername', 'value' => $this->input->post('FATHERNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_grandfathername', 'value' => $this->input->post('GRANDFATHERNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_familyname', 'value' => $this->input->post('FAMILYNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_gender', 'value' => $this->input->post('GENDER'), 'type' => '', 'length' => -1),
            array('name' => ':p_birthdate', 'value' =>$date_BIRTHDATE, 'type' => '', 'length' => -1),
            array('name' => ':p_mobile', 'value' => $this->input->post('MOBILE'), 'type' => '', 'length' => -1),
            array('name' => ':p_email', 'value' => $this->input->post('EMAIL'), 'type' => '', 'length' => -1),
            array('name' => ':p_status', 'value' => $this->input->post('STATUS'), 'type' => '', 'length' => -1),
            array('name' => ':p_nationality', 'value' => $this->input->post('NATIONALITY'), 'type' => '', 'length' => -1),
            array('name' => ':p_idjob', 'value' => $this->input->post('IDJOB'), 'type' => '', 'length' => -1),
            array('name' => ':p_datestart', 'value' => $DATESTARTCONTRACT, 'type' => '', 'length' => -1),

            array('name' => ':p_ACTIVE_STATE', 'value' => $this->input->post('ACTIVE_STATE'), 'type' => '', 'length' => -1),

            array('name' => ':p_statusjob', 'value' => $this->input->post('STATUSJOB'), 'type' => '', 'length' => -1),
            array('name' => ':p_jobtitle', 'value' => $this->input->post('JOBTITLE'), 'type' => '', 'length' => -1),
            array('name' => ':p_dateend', 'value' => $this->input->post('DATEENDCONTRACT'), 'type' => '', 'length' => -1),
            array('name' => ':p_secion', 'value' => $this->input->post('SECION'), 'type' => '', 'length' => -1),
            array('name' => ':p_salary', 'value' => $this->input->post('SALARY'), 'type' => '', 'length' => -1),
            array('name' => ':p_specialization', 'value' => $this->input->post('SPECIALIZATION'), 'type' => '', 'length' => -1),
            array('name' => ':p_degree', 'value' => $this->input->post('DEGREE'), 'type' => '', 'length' => -1),
            array('name' => ':p_achievements', 'value' => $this->input->post('ACHIEVEMENTS'), 'type' => '', 'length' => -1),
            array('name' => ':p_TELEPHON', 'value' => $this->input->post('TELEPHON'), 'type' => '', 'length' => -1),
            array('name' => ':p_ADDRESS', 'value' => $this->input->post('ADDRESS'), 'type' => '', 'length' => -1),

            array('name' => ':p_password', 'value' => 'p_password', 'type' => '', 'length' => 500),

            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );

        $x = $this->eng_md->insert_data($param);
        echo json_encode($x);
    }
    function update_data(){
        $date_BIRTHDATE='';
        if($this->input->post('BIRTHDATE')){
            $date= new DateTime($_POST['BIRTHDATE']);
            $date_BIRTHDATE=$date->format('d-M-y');
        }
        $DATESTARTCONTRACT='';
        if($this->input->post('DATESTARTCONTRACT')){
            $date= new DateTime($_POST['DATESTARTCONTRACT']);
            $DATESTARTCONTRACT=$date->format('d-M-y');
        }
        $param = array(
          //  array('name' => ':p_id', 'value' => $this->input->post('p_id'), 'type' => '', 'length' => -1),
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_firstname', 'value' => $this->input->post('FIRSTNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_fathername', 'value' => $this->input->post('FATHERNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_grandfathername', 'value' => $this->input->post('GRANDFATHERNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_familyname', 'value' => $this->input->post('FAMILYNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_gender', 'value' => $this->input->post('GENDER'), 'type' => '', 'length' => -1),
            array('name' => ':p_birthdate', 'value' =>$date_BIRTHDATE, 'type' => '', 'length' => -1),
            array('name' => ':p_mobile', 'value' => $this->input->post('MOBILE'), 'type' => '', 'length' => -1),
            array('name' => ':p_email', 'value' => $this->input->post('EMAIL'), 'type' => '', 'length' => -1),
            array('name' => ':p_status', 'value' => $this->input->post('STATUS'), 'type' => '', 'length' => -1),
            array('name' => ':p_nationality', 'value' => $this->input->post('NATIONALITY'), 'type' => '', 'length' => -1),
            array('name' => ':p_idjob', 'value' => $this->input->post('IDJOB'), 'type' => '', 'length' => -1),
            array('name' => ':p_datestart', 'value' => $DATESTARTCONTRACT, 'type' => '', 'length' => -1),
            array('name' => ':p_ACTIVE_STATE', 'value' => $this->input->post('ACTIVE_STATE'), 'type' => '', 'length' => -1),


            array('name' => ':p_statusjob', 'value' => $this->input->post('STATUSJOB'), 'type' => '', 'length' => -1),
            array('name' => ':p_jobtitle', 'value' => $this->input->post('JOBTITLE'), 'type' => '', 'length' => -1),
            array('name' => ':p_dateend', 'value' => $this->input->post('DATEENDCONTRACT'), 'type' => '', 'length' => -1),
            array('name' => ':p_secion', 'value' => $this->input->post('SECION'), 'type' => '', 'length' => -1),
            array('name' => ':p_salary', 'value' => $this->input->post('SALARY'), 'type' => '', 'length' => -1),
            array('name' => ':p_specialization', 'value' => $this->input->post('SPECIALIZATION'), 'type' => '', 'length' => -1),
            array('name' => ':p_degree', 'value' => $this->input->post('DEGREE'), 'type' => '', 'length' => -1),
            array('name' => ':p_achievements', 'value' => $this->input->post('ACHIEVEMENTS'), 'type' => '', 'length' => -1),
            array('name' => ':p_TELEPHON', 'value' => $this->input->post('TELEPHON'), 'type' => '', 'length' => -1),
            array('name' => ':p_ADDRESS', 'value' => $this->input->post('ADDRESS'), 'type' => '', 'length' => -1),

            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );

        $x = $this->eng_md->update_data($param);
        echo json_encode($x);
    }
    function delete_data()
    {
        $param = array(
            array('name' => ':p_CARDID', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':P_ERRCOD', 'value' => 'P_ERRCOD', 'type' => '', 'length' => 500),
            array('name' => ':P_ERRMSG', 'value' =>'P_ERRMSG', 'type' => '', 'length' => 500)
        );

        $x = $this->eng_md->delete_data($param);
        echo json_encode($x);
    }
    function getdata_cardid(){

        $param = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => 500),
            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );
        $x = $this->eng_md->getdata_cardid($param);
        echo json_encode($x);
       // echo var_dump($x);
    }
    function get_data_section(){

        $param = array(
            array('name' => ':p_SECION', 'value' => $this->input->post('SECTION11'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => 500)


        );
        $x = $this->eng_md->get_data_section($param);
        echo json_encode($x);
        // echo var_dump($x);
    }

    /*--------------------------------pic-----------------------*/
    function get_picture(){
        $para = array(
            array('name' => ':p1',          'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':pout',                'value' => 'pout', 'type' => 'rblob', 'length' => -1),
            array('name' => ':P_ERRCOD', 'value' => 'P_ERRCOD', 'type' => '', 'length' => 500),
            array('name' => ':P_ERRMSG', 'value' =>'P_ERRMSG', 'type' => '', 'length' => 500)
        );
        $x = $this->eng_md->get_picture($para);
        $clob = $x['pout'];
        if($clob){
            $photo_blob = $clob->read($clob->size());

            $photo_blob= base64_encode($photo_blob);
            $clob->free();
            echo ($photo_blob) ;
        }

        // echo json_encode($x);

    }
    function insert_picture(){
        $file= $_FILES['profile_avatar']['tmp_name'];
        $para = array(
            array('name' => ':P_CARDID',          'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_picture',          'value' => $file, 'type' => 'wblob', 'length' => -1),
            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':P_ERRMSG', 'value' =>'P_ERRMSG', 'type' => '', 'length' => 500)

        );
        $x = $this->eng_md->insert_picture($para);
        echo json_encode($x);
    }
    function delete_picture(){

        $param = array(

            array('name' => ':P_CARDID', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':P_ERRMSG', 'value' =>'P_ERRMSG', 'type' => '', 'length' => 500)
        );
        $x = $this->eng_md->delete_picture($param);
        echo json_encode($x);
    }
    /*--------------------------------drop-----------------------*/
    function get_file(){

        $param = array(

            array('name' => ':p_id', 'value' => $this->input->post('p_id'), 'type' => '', 'length' => -1),
            array('name' => ':P_ROWSCOUNT_OUT', 'value' => 'ROWSCOUNT_OUT' , 'type' => '', 'length' => 50),
            array('name' => ':P_PAGE_NO', 'value' => $this->input->post('PAGE_NO'), 'type' => '', 'length' => -1),
            array('name' => ':p_IMAGE', 'value' => 'p_IMAGE', 'type' => 'cur', 'length' => 1500),
            array('name' => ':P_VEDIO', 'value' => 'P_VEDIO', 'type' => 'cur', 'length' => 1500),
            array('name' => ':p_DROPWORD', 'value' => 'p_DROPWORD', 'type' => 'cur', 'length' => 1500),

            array('name' => ':P_RESULT_OUT', 'value' => 'P_RESULT_OUT', 'type' => 'cur', 'length' => 150)

        );
        $x = $this->eng_md->get_file($param);
        echo json_encode($x);
    }
    function insert_file(){

        $picture=$_FILES['file']['tmp_name'];
        $param = array(

            array('name' => ':p_filesize', 'value' => $this->input->post('FILE_SIZE'), 'type' => '', 'length' =>100),
            array('name' => ':p_fileext', 'value' => $this->input->post('FILE_EXT'), 'type' => '', 'length' => 100),
            array('name' => ':p_filename', 'value' => $this->input->post('NAME_FILE'), 'type' => '', 'length' => 100),
            array('name' => ':p_picture', 'value' => $picture, 'type' => 'wblob', 'length' => -1),
            array('name' => ':p_DROPWORD', 'value' => $this->input->post('DROPWORD'), 'type' => '', 'length' => 100),

            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':P_ERRMSG', 'value' =>'P_ERRMSG', 'type' => '', 'length' => 500)
        );
        $x = $this->eng_md->insert_file($param);
        echo json_encode($x);
    }
    function delete_file(){

        $param = array(

            array('name' => ':p_id', 'value' => $this->input->post('p_id'), 'type' => '', 'length' => -1),
            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':P_ERRMSG', 'value' =>'P_ERRMSG', 'type' => '', 'length' => 500)
        );
        $x = $this->eng_md->delete_file($param);
        echo json_encode($x);
    }
    /*--------------------------------get_joptitle0-----------------------*/
    function get_joptitle0(){

        $param = array(
              array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => 500)
         //   array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
          //  array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );
        $x = $this->eng_md->get_joptitle0($param);
        echo json_encode($x);
    }

    /*--------------------------------insert_timeemp-----------------------*/
    function get_timeemp(){
        $para = array(
            array('name' => ':user_id', 'value' => $this->input->post('user_id'), 'type' => '', 'length' => -1),

            array('name' => ':p_result_out', 'value' => 'items', 'type' => 'cur', 'length' => -1));
        $x = $this->eng_md->get_timeemp($para);
        echo json_encode($x);
    }
    function get_timeemp1(){
        $para = array(

            array('name' => ':p_result_out', 'value' => 'items', 'type' => 'cur', 'length' => -1));
        $x = $this->eng_md->get_timeemp1($para);
        echo json_encode($x);
    }

    function insert_timeemp(){
        $DATE_DAY='';
        if($this->input->post('DATE_DAY')){
            $date= new DateTime($_POST['DATE_DAY']);
            $DATE_DAY=$date->format('d-M-y');
        }
   $param = array(
            array('name' => ':p_date_day', 'value' => $DATE_DAY, 'type' => '', 'length' => -1),
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
       array('name' => ':p_NAME', 'value' => $this->input->post('NAME'), 'type' => '', 'length' => -1),

       array('name' => ':p_time_com', 'value' => $this->input->post('TIME_COM'), 'type' => '', 'length' => -1),
            array('name' => ':p_time_go', 'value' => $this->input->post('TIME_GO'), 'type' => '', 'length' => -1),
            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
          array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );

        $x = $this->eng_md->insert_timeemp($param);
        echo json_encode($x);
    }
    function UPDATE_timeemp(){

        $param = array(
            array('name' => ':p_CARDID', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),

            array('name' => ':p_time_go', 'value' => $this->input->post('TIME_GO'), 'type' => '', 'length' => -1)


        );

        $x = $this->eng_md->UPDATE_timeemp($param);
        echo json_encode($x);
    }

    function DELETE_timeemp()
    {
        $param = array(
            array('name' => ':p_id', 'value' => $this->input->post('p_id'), 'type' => '', 'length' => -1),
            array('name' => ':P_ERRCOD', 'value' => 'P_ERRCOD', 'type' => '', 'length' => 500),
            array('name' => ':P_ERRMSG', 'value' =>'P_ERRMSG', 'type' => '', 'length' => 500)
        );

        $x = $this->eng_md->DELETE_timeemp($param);
        echo json_encode($x);
    }
    /*--------------------------------get_holyday-----------------------*/
    function get_holyday1(){
        $para = array(
            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1));
        $x = $this->eng_md->get_holyday1($para);
        echo json_encode($x);
    }


    function get_holyday(){
        $para = array(
            array('name' => ':user_id', 'value' => $this->input->post('user_id'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1));
        $x = $this->eng_md->get_holyday($para);
        echo json_encode($x);
    }

    function insert_holyday(){
        $DATE_HOLIDAY_S='';
        if($this->input->post('DATE_HOLIDAY_S')){
            $date= new DateTime($_POST['DATE_HOLIDAY_S']);
            $DATE_HOLIDAY_S=$date->format('d-M-y');
        }
        $DATE_HOLIDAY_E='';
        if($this->input->post('DATE_HOLIDAY_E')){
            $date= new DateTime($_POST['DATE_HOLIDAY_E']);
            $DATE_HOLIDAY_E=$date->format('d-M-y');
        }
        $param = array(
            array('name' => ':p_cardid', 'value' =>  $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_DATE_HOLIDAY_S', 'value' => $DATE_HOLIDAY_S, 'type' => '', 'length' => -1),
            array('name' => ':p_DATE_HOLIDAY_E', 'value' => $DATE_HOLIDAY_E, 'type' => '', 'length' => -1),
            array('name' => ':p_HOLIDAY_TYPE', 'value' => $this->input->post('HOLIDAY_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':p_STATUS_NO', 'value' => $this->input->post('STATUS_NO'), 'type' => '', 'length' => -1),

            array('name' => ':p_HOLIDAY_RESON', 'value' => $this->input->post('HOLIDAY_RESON'), 'type' => '', 'length' => -1),

            array('name' => ':p_section', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),
            array('name' => ':p_JOBTITLE', 'value' => $this->input->post('JOBTITLE'), 'type' => '', 'length' => -1),

            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
          array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );

        $x = $this->eng_md->insert_holyday($param);
        echo json_encode($x);
    }
    function DELETE_holyday()
    {
        $param = array(
            array('name' => ':p_id', 'value' => $this->input->post('p_id'), 'type' => '', 'length' => -1),
            array('name' => ':P_ERRCOD', 'value' => 'P_ERRCOD', 'type' => '', 'length' => 500),
            array('name' => ':P_ERRMSG', 'value' =>'P_ERRMSG', 'type' => '', 'length' => 500)
        );

        $x = $this->eng_md->DELETE_holyday($param);
        echo json_encode($x);
    }
    function UPDATE_holyday(){
        $DATE_HOLIDAY_S='';
        if($this->input->post('DATE_HOLIDAY_S')){
            $date= new DateTime($_POST['DATE_HOLIDAY_S']);
            $DATE_HOLIDAY_S=$date->format('d-M-y');
        }
        $DATE_HOLIDAY_E='';
        if($this->input->post('DATE_HOLIDAY_E')){
            $date= new DateTime($_POST['DATE_HOLIDAY_E']);
            $DATE_HOLIDAY_E=$date->format('d-M-y');
        }
        $param = array(
            array('name' => ':p_id', 'value' =>  $this->input->post('ID_HOLIDAY'), 'type' => '', 'length' => -1),
            array('name' => ':p_cardid', 'value' =>  $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_DATE_HOLIDAY_S', 'value' => $DATE_HOLIDAY_S, 'type' => '', 'length' => -1),
            array('name' => ':p_DATE_HOLIDAY_E', 'value' => $DATE_HOLIDAY_E, 'type' => '', 'length' => -1),
            array('name' => ':p_HOLIDAY_TYPE', 'value' => $this->input->post('HOLIDAY_TYPE'), 'type' => '', 'length' => -1),

            array('name' => ':p_HOLIDAY_RESON', 'value' => $this->input->post('HOLIDAY_RESON'), 'type' => '', 'length' => -1),


            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );

        $x = $this->eng_md->UPDATE_holyday($param);
        echo json_encode($x);
    }

    /*--------------------------------get_OUTTIME-----------------------*/
    function get_OUTTIME(){
        $para = array(
            array('name' => ':user_id', 'value' => $this->input->post('user_id'), 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1));
        $x = $this->eng_md->get_OUTTIME($para);
        echo json_encode($x);
    }
    function get_OUTTIME1(){
        $para = array(
            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1));
        $x = $this->eng_md->get_OUTTIME1($para);
        echo json_encode($x);
    }

    function insert_OUTTIME(){
        $DATE_OUT='';
        if($this->input->post('DATE_OUT')){
            $date= new DateTime($_POST['DATE_OUT']);
            $DATE_OUT=$date->format('d-M-y');
        }

        $param = array(
            array('name' => ':p_cardid', 'value' =>  $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_DATE_OUT', 'value' => $DATE_OUT, 'type' => '', 'length' => -1),
            array('name' => ':p_PERIOD_TIMES', 'value' => $this->input->post('PERIOD_TIMES'), 'type' => '', 'length' => -1),
            array('name' => ':p_PERIOD_TIMEE', 'value' => $this->input->post('PERIOD_TIMEE'), 'type' => '', 'length' => -1),
            array('name' => ':p_status_no', 'value' => $this->input->post('STATUS_NO'), 'type' => '', 'length' => -1),
            array('name' => ':p_REASON_OUT', 'value' => $this->input->post('REASON_OUT'), 'type' => '', 'length' => -1),
            array('name' => ':P_SECTION', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),
            array('name' => ':p_JOBTITLE', 'value' => $this->input->post('JOBTITLE'), 'type' => '', 'length' => -1),

            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );

        $x = $this->eng_md->insert_OUTTIME($param);
        echo json_encode($x);
    }
    function DELETE_OUTTIME()
    {
        $param = array(
            array('name' => ':p_id', 'value' => $this->input->post('p_id'), 'type' => '', 'length' => -1),
            array('name' => ':P_ERRCOD', 'value' => 'P_ERRCOD', 'type' => '', 'length' => 500),
            array('name' => ':P_ERRMSG', 'value' =>'P_ERRMSG', 'type' => '', 'length' => 500)
        );

        $x = $this->eng_md->DELETE_OUTTIME($param);
        echo json_encode($x);
    }

    function UPDATE_OUTTIME(){
        $DATE_OUT='';
        if($this->input->post('DATE_OUT')){
            $date= new DateTime($_POST['DATE_OUT']);
            $DATE_OUT=$date->format('d-M-y');
        }

        $param = array(
            array('name' => ':p_id', 'value' =>  $this->input->post('ID_OUTTIME'), 'type' => '', 'length' => -1),
            array('name' => ':p_cardid', 'value' =>  $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_DATE_OUT', 'value' => $DATE_OUT, 'type' => '', 'length' => -1),
            array('name' => ':p_PERIOD_TIMES', 'value' => $this->input->post('PERIOD_TIMES'), 'type' => '', 'length' => -1),
            array('name' => ':p_PERIOD_TIMEE', 'value' => $this->input->post('PERIOD_TIMEE'), 'type' => '', 'length' => -1),
            array('name' => ':p_REASON_OUT', 'value' => $this->input->post('REASON_OUT'), 'type' => '', 'length' => -1),
            array('name' => ':p_status_no', 'value' => $this->input->post('STATUS_NO'), 'type' => '', 'length' => -1),


            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );

        $x = $this->eng_md->UPDATE_OUTTIME($param);
        echo json_encode($x);
    }
    /*--------------------------------الاجازات-----------------------*/

    function get_REWARDS(){
        $para = array(
            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1));
        $x = $this->eng_md->get_REWARDS($para);
        echo json_encode($x);
    }
    function insert_REWARDS(){
        $DATE_REWARDS='';
        if($this->input->post('DATE_REWARDS')){
            $date= new DateTime($_POST['DATE_REWARDS']);
            $DATE_REWARDS=$date->format('d-M-y');
        }

        $param = array(
            array('name' => ':p_cardid', 'value' =>  $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_DATE_REWARDS', 'value' => $DATE_REWARDS, 'type' => '', 'length' => -1),
            array('name' => ':p_TYPPE_REWARDS', 'value' => $this->input->post('TYPPE_REWARDS'), 'type' => '', 'length' => -1),
            array('name' => ':p_REASON_REWARDS', 'value' => $this->input->post('REASON_REWARDS'), 'type' => '', 'length' => -1),



            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );

        $x = $this->eng_md->insert_REWARDS($param);
        echo json_encode($x);
    }
    function UPDATE_REWARDS(){
        $DATE_REWARDS='';
        if($this->input->post('DATE_REWARDS')){
            $date= new DateTime($_POST['DATE_REWARDS']);
            $DATE_REWARDS=$date->format('d-M-y');
        }

        $param = array(
            array('name' => ':p_id', 'value' =>  $this->input->post('ID_REWARDS'), 'type' => '', 'length' => -1),
            array('name' => ':p_cardid', 'value' =>  $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_DATE_REWARDS', 'value' => $DATE_REWARDS, 'type' => '', 'length' => -1),
            array('name' => ':p_TYPPE_REWARDS', 'value' => $this->input->post('TYPPE_REWARDS'), 'type' => '', 'length' => -1),
            array('name' => ':p_REASON_REWARDS', 'value' => $this->input->post('REASON_REWARDS'), 'type' => '', 'length' => -1),



            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );

        $x = $this->eng_md->UPDATE_REWARDS($param);
        echo json_encode($x);
    }
    function DELETE_REWARDS()
    {
        $param = array(
            array('name' => ':p_id', 'value' => $this->input->post('p_id'), 'type' => '', 'length' => -1),
            array('name' => ':P_ERRCOD', 'value' => 'P_ERRCOD', 'type' => '', 'length' => 500),
            array('name' => ':P_ERRMSG', 'value' =>'P_ERRMSG', 'type' => '', 'length' => 500)
        );

        $x = $this->eng_md->DELETE_REWARDS($param);
        echo json_encode($x);
    }
    /*--------------------------------البحث-----------------------*/

    function search_data(){
        $DATESTARTCONTRACT='';
        if($this->input->post('DATESTARTCONTRACT')){
            $date= new DateTime($_POST['DATESTARTCONTRACT']);
            $DATESTARTCONTRACT=$date->format('d-M-y');
        }
        $date_BIRTHDATE='';
        if($this->input->post('date_BIRTHDATE')){
            $date= new DateTime($_POST['date_BIRTHDATE']);
            $date_BIRTHDATE=$date->format('d-M-y');
        }
        $param = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_firstname', 'value' => $this->input->post('FIRSTNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_fathername', 'value' => $this->input->post('FATHERNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_grandfathername', 'value' => $this->input->post('GRANDFATHERNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_familyname', 'value' => $this->input->post('FAMILYNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_gender', 'value' => $this->input->post('GENDER'), 'type' => '', 'length' => -1),
            array('name' => ':p_birthdate', 'value' =>$date_BIRTHDATE, 'type' => '', 'length' => -1),
            array('name' => ':p_mobile', 'value' => $this->input->post('MOBILE'), 'type' => '', 'length' => -1),
            array('name' => ':p_email', 'value' => $this->input->post('EMAIL'), 'type' => '', 'length' => -1),
            array('name' => ':p_status', 'value' => $this->input->post('STATUS'), 'type' => '', 'length' => -1),
            array('name' => ':p_nationality', 'value' => $this->input->post('NATIONALITY'), 'type' => '', 'length' => -1),
            array('name' => ':p_idjob', 'value' => $this->input->post('IDJOB'), 'type' => '', 'length' => -1),
            array('name' => ':p_datestart', 'value' => $DATESTARTCONTRACT, 'type' => '', 'length' => -1),
            array('name' => ':p_statusjob', 'value' => $this->input->post('STATUSJOB'), 'type' => '', 'length' => -1),
            array('name' => ':p_jobtitle', 'value' => $this->input->post('JOBTITLE'), 'type' => '', 'length' => -1),
            array('name' => ':p_dateend', 'value' => $this->input->post('DATEENDCONTRACT'), 'type' => '', 'length' => -1),
            array('name' => ':p_secion', 'value' => $this->input->post('SECION'), 'type' => '', 'length' => -1),
            array('name' => ':p_salary', 'value' => $this->input->post('SALARY'), 'type' => '', 'length' => -1),
            array('name' => ':p_specialization', 'value' => $this->input->post('SPECIALIZATION'), 'type' => '', 'length' => -1),
            array('name' => ':p_degree', 'value' => $this->input->post('DEGREE'), 'type' => '', 'length' => -1),
            array('name' => ':p_achievements', 'value' => $this->input->post('ACHIEVEMENTS'), 'type' => '', 'length' => -1),
            array('name' => ':p_DATESTARTCONTRACT', 'value' => $DATESTARTCONTRACT, 'type' => '', 'length' => -1),
            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1)


        );

        $x = $this->eng_md->search_data($param);
        echo json_encode($x);
    }
    /*--------------------------------البحث-----------------------*/

    function search_HOLIDAY(){
        $DATE_HOLIDAY_S='';
        if($this->input->post('DATE_HOLIDAY_S')){
            $date= new DateTime($_POST['DATE_HOLIDAY_S']);
            $DATE_HOLIDAY_S=$date->format('d-M-y');
        }
        $DATE_HOLIDAY_E='';
        if($this->input->post('DATE_HOLIDAY_E')){
            $date= new DateTime($_POST['DATE_HOLIDAY_E']);
            $DATE_HOLIDAY_E=$date->format('d-M-y');
        }

        $param = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_firstname', 'value' => $this->input->post('FIRSTNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_fathername', 'value' => $this->input->post('FATHERNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_grandfathername', 'value' => $this->input->post('GRANDFATHERNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_familyname', 'value' => $this->input->post('FAMILYNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_DATE_HOLIDAY_S', 'value' => $DATE_HOLIDAY_S, 'type' => '', 'length' => -1),
            array('name' => ':p_DATE_HOLIDAY_E', 'value' => $DATE_HOLIDAY_E, 'type' => '', 'length' => -1),
            array('name' => ':p_HOLIDAY_TYPE', 'value' => $this->input->post('HOLIDAY_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':p_JOBTITLE', 'value' => $this->input->post('JOBTITLE'), 'type' => '', 'length' => -1),
            array('name' => ':p_STATUS_NO', 'value' => $this->input->post('STATUS_NO'), 'type' => '', 'length' => -1),
            array('name' => ':p_SECTION', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),

            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1)


        );

        $x = $this->eng_md->search_HOLIDAY($param);
        echo json_encode($x);
    }
    /*--------------------------------المهام-----------------------*/
    function search_TIMEEMP(){
        $DATE_DAY='';
        if($this->input->post('DATE_DAY')){
            $date= new DateTime($_POST['DATE_DAY']);
            $DATE_DAY=$date->format('d-M-y');
        }


        $param = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_firstname', 'value' => $this->input->post('FIRSTNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_fathername', 'value' => $this->input->post('FATHERNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_grandfathername', 'value' => $this->input->post('GRANDFATHERNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_familyname', 'value' => $this->input->post('FAMILYNAME'), 'type' => '', 'length' => -1),

            array('name' => ':p_JOBTITLE', 'value' => $this->input->post('JOBTITLE'), 'type' => '', 'length' => -1),

            array('name' => ':p_DATE_DAY', 'value' => $DATE_DAY, 'type' => '', 'length' => -1),
            array('name' => ':p_SECTION', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),

            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1)


        );

        $x = $this->eng_md->search_TIMEEMP($param);
        echo json_encode($x);
    }

    function search_OUTTIME(){
        $DATE_OUT='';
        if($this->input->post('DATE_OUT')){
            $date= new DateTime($_POST['DATE_OUT']);
            $DATE_OUT=$date->format('d-M-y');
        }


        $param = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_firstname', 'value' => $this->input->post('FIRSTNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_fathername', 'value' => $this->input->post('FATHERNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_grandfathername', 'value' => $this->input->post('GRANDFATHERNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_familyname', 'value' => $this->input->post('FAMILYNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_DATE_OUT', 'value' => $DATE_OUT, 'type' => '', 'length' => -1),
            array('name' => ':p_JOBTITLE', 'value' => $this->input->post('JOBTITLE'), 'type' => '', 'length' => -1),
            array('name' => ':p_STATUS_NO', 'value' => $this->input->post('STATUS_NO'), 'type' => '', 'length' => -1),
            array('name' => ':p_SECTION', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),

            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1)


        );

        $x = $this->eng_md->search_OUTTIME($param);
        echo json_encode($x);
    }
    /*--------------------------------المهام-----------------------*/
    function search_TASK(){
        $TASK_DATESTAR='';
        if($this->input->post('TASK_DATESTAR')){
            $date= new DateTime($_POST['TASK_DATESTAR']);
            $TASK_DATESTAR=$date->format('d-M-y');
        }


        $param = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_firstname', 'value' => $this->input->post('FIRSTNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_fathername', 'value' => $this->input->post('FATHERNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_grandfathername', 'value' => $this->input->post('GRANDFATHERNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_familyname', 'value' => $this->input->post('FAMILYNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_JOBTITLE', 'value' => $this->input->post('JOBTITLE'), 'type' => '', 'length' => -1),
            array('name' => ':p_TASK_NAME', 'value' => $this->input->post('TASK_NAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_TASK_TYPE', 'value' => $this->input->post('TASK_TYPE'), 'type' => '', 'length' => -1),

            array('name' => ':p_TASK_DATESTAR', 'value' => $TASK_DATESTAR, 'type' => '', 'length' => -1),
            array('name' => ':p_STATUS_NO', 'value' => $this->input->post('STATUS_NO'), 'type' => '', 'length' => -1),
            array('name' => ':p_SECTION', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),

            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1)


        );

        $x = $this->eng_md->search_TASK($param);
        echo json_encode($x);
    }
    /*--------------------------------المهام-----------------------*/
    function search_REWARDS(){
        $DATE_REWARDS='';
        if($this->input->post('DATE_REWARDS')){
            $date= new DateTime($_POST['DATE_REWARDS']);
            $DATE_REWARDS=$date->format('d-M-y');
        }


        $param = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_firstname', 'value' => $this->input->post('FIRSTNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_fathername', 'value' => $this->input->post('FATHERNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_grandfathername', 'value' => $this->input->post('GRANDFATHERNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_familyname', 'value' => $this->input->post('FAMILYNAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_JOBTITLE', 'value' => $this->input->post('JOBTITLE'), 'type' => '', 'length' => -1),


            array('name' => ':p_DATE_REWARDS', 'value' => $DATE_REWARDS, 'type' => '', 'length' => -1),
            array('name' => ':p_TYPPE_REWARDS', 'value' => $this->input->post('TYPPE_REWARDS'), 'type' => '', 'length' => -1),

            array('name' => ':p_SECTION', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),

            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1)


        );

        $x = $this->eng_md->search_REWARDS($param);
        echo json_encode($x);
    }

    /*--------------------------------المهام-----------------------*/
    function get_task(){
        $para = array(

            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1),
            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)
        );
        $x = $this->eng_md->get_task($para);
        echo json_encode($x);
    }
    function get_task1(){
        $para = array(
            array('name' => ':p_section_id', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),

            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1),
            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)
        );
        $x = $this->eng_md->get_task1($para);
        echo json_encode($x);
    }

    function DELETE_task()
    {
        $param = array(
            array('name' => ':p_id', 'value' => $this->input->post('p_id'), 'type' => '', 'length' => -1),
            array('name' => ':P_ERRCOD', 'value' => 'P_ERRCOD', 'type' => '', 'length' => 500),
            array('name' => ':P_ERRMSG', 'value' =>'P_ERRMSG', 'type' => '', 'length' => 500)
        );

        $x = $this->eng_md->DELETE_task($param);
        echo json_encode($x);
    }
    function insert_task(){
        $TASK_DATESTAR='';
        if($this->input->post('TASK_DATESTAR')){
            $date= new DateTime($_POST['TASK_DATESTAR']);
            $TASK_DATESTAR=$date->format('d-M-y');
        }
        $TASK_DATEEND='';
        if($this->input->post('TASK_DATEEND')){
            $date= new DateTime($_POST['TASK_DATEEND']);
            $TASK_DATEEND=$date->format('d-M-y');
        }

        $param = array(
            array('name' => ':p_cardid', 'value' =>  $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_task_name', 'value' =>  $this->input->post('TASK_NAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_task_type', 'value' => $this->input->post('TASK_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':p_task_datestar', 'value' => $TASK_DATESTAR, 'type' => '', 'length' => -1),
            array('name' => ':p_task_dateend', 'value' => $TASK_DATEEND, 'type' => '', 'length' => -1),
            array('name' => ':p_task_detailes', 'value' => $this->input->post('TASK_DETAILES'), 'type' => '', 'length' => -1),
            array('name' => ':p_status_no', 'value' => $this->input->post('STATUS_NO'), 'type' => '', 'length' => -1),
            array('name' => ':p_section_id', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),

            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );

        $x = $this->eng_md->insert_task($param);
        echo json_encode($x);
    }
    function update_task(){
        $TASK_DATESTAR='';
        if($this->input->post('TASK_DATESTAR')){
            $date= new DateTime($_POST['TASK_DATESTAR']);
            $TASK_DATESTAR=$date->format('d-M-y');
        }
        $TASK_DATEEND='';
        if($this->input->post('TASK_DATEEND')){
            $date= new DateTime($_POST['TASK_DATEEND']);
            $TASK_DATEEND=$date->format('d-M-y');
        }

        $param = array(
            array('name' => ':p_id', 'value' =>  $this->input->post('p_id'), 'type' => '', 'length' => -1),

            array('name' => ':p_cardid', 'value' =>  $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_task_name', 'value' =>  $this->input->post('TASK_NAME'), 'type' => '', 'length' => -1),
            array('name' => ':p_task_type', 'value' => $this->input->post('TASK_TYPE'), 'type' => '', 'length' => -1),
            array('name' => ':p_task_datestar', 'value' => $TASK_DATESTAR, 'type' => '', 'length' => -1),
            array('name' => ':p_task_dateend', 'value' => $TASK_DATEEND, 'type' => '', 'length' => -1),
            array('name' => ':p_task_detailes', 'value' => $this->input->post('TASK_DETAILES'), 'type' => '', 'length' => -1),
          //  array('name' => ':p_status_no', 'value' => $this->input->post('STATUS_NO'), 'type' => '', 'length' => -1),

            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );

        $x = $this->eng_md->update_task($param);
        echo json_encode($x);
    }

    /*--------------------------------منشورات-----------------------*/
    function get_TWET(){
        $para = array(
            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1),
            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)
        );
        $x = $this->eng_md->get_TWET($para);
        echo json_encode($x);
    }
    function aaaa(){
        $para = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->aaaa($para);
        echo json_encode($x);
    }
    function emp_accept(){
        $para = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->emp_accept($para);
        echo json_encode($x);
    }
    function emp_cancel(){
        $para = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->emp_cancel($para);
        echo json_encode($x);
    }
    function emp_allorder(){
        $para = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->emp_allorder($para);
        echo json_encode($x);
    }
    function aaaa1(){
        $para = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->aaaa1($para);
        echo json_encode($x);
    }
    function countqq11(){
        $para = array(
            array('name' => ':p_SECTION', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->countqq11($para);
        echo json_encode($x);
    }
    function countout(){
        $para = array(
            array('name' => ':p_SECTION', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->countout($para);
        echo json_encode($x);
    }
    function emp_allreward(){
        $para = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->emp_allreward($para);
        echo json_encode($x);
    }

    function emp_accept1(){
        $para = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->emp_accept1($para);
        echo json_encode($x);
    }
    function get_navegations(){
        $para = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
//            array('name' => ':p_SECTION', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1));

        $x = $this->eng_md->get_navegations($para);
        echo json_encode($x);
    }
    function get_navegation1s(){
        $para = array(

            array('name' => ':P_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1));

        $x = $this->eng_md->get_navegation1s($para);
        echo json_encode($x);
    }
    function insert_refresh(){
        $para = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1)

        );
        $x = $this->eng_md->insert_refresh($para);
        echo json_encode($x);
    }

    function emp_cancel1(){
        $para = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->emp_cancel1($para);
        echo json_encode($x);
    }
    function emp_allorder1(){
        $para = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->emp_allorder1($para);
        echo json_encode($x);
    }

    function insert_TWET(){


        $param = array(
            array('name' => ':p_DROPWORD', 'value' =>  $this->input->post('DROPWORD'), 'type' => '', 'length' => -1),


        );

        $x = $this->eng_md->insert_TWET($param);
        echo json_encode($x);
    }
    function channge_password(){


        $param = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':old_pass', 'value' =>  $this->input->post('OLD_PASS'), 'type' => '', 'length' => -1),
            array('name' => ':new_pass', 'value' => $this->input->post('NEW_PASS'), 'type' => '', 'length' => -1),
            array('name' => ':conf_pass', 'value' => $this->input->post('CONF_PASS'), 'type' => '', 'length' => -1),


            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );

        $x = $this->eng_md->channge_password($param);
        echo json_encode($x);
    }
    function activity_state(){


        $param = array(
            array('name' => ':p_cardid', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),
            array('name' => ':p_active', 'value' =>  $this->input->post('ACTIVE_STATE'), 'type' => '', 'length' => -1),

 array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );

        $x = $this->eng_md->activity_state($param);
        echo json_encode($x);
    }
    function get_DEPARTMENT(){
        $para = array(
            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1));
        $x = $this->eng_md->get_DEPARTMENT($para);
        echo json_encode($x);
    }
    function arrivetasks(){
        $para = array(

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->arrivetasks($para);
        echo json_encode($x);
    }
    function inworktasks(){
        $para = array(

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->inworktasks($para);
        echo json_encode($x);
    }
    function donetasks(){
        $para = array(

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->donetasks($para);
        echo json_encode($x);
    }
    function latetask(){
        $para = array(
            array('name' => ':p_SECTION', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->latetask($para);
        echo json_encode($x);
    }
    function alltaskscard(){
        $para = array(
            array('name' => ':p_CARDID', 'value' => $this->input->post('CARDID'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->alltaskscard($para);
        echo json_encode($x);
    }

    function alltasks(){
        $para = array(

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->alltasks($para);
        echo json_encode($x);
    }
    function arrivetasks1(){
        $para = array(
            array('name' => ':p_SECTION', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->arrivetasks1($para);
        echo json_encode($x);
    }
    function inworktasks1(){
        $para = array(
            array('name' => ':p_SECTION', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->inworktasks1($para);
        echo json_encode($x);
    }
    function donetasks1(){
        $para = array(
            array('name' => ':p_SECTION', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->donetasks1($para);
        echo json_encode($x);
    }
    function alltasks1(){
        $para = array(
            array('name' => ':p_SECTION', 'value' => $this->input->post('SECTION'), 'type' => '', 'length' => -1),

            array('name' => ':P_OUT', 'value' =>'P_OUT', 'type' => '', 'length' => 50)

        );
        $x = $this->eng_md->alltasks1($para);
        echo json_encode($x);
    }
    function get_data11(){
        $para = array(
            array('name' => ':p_page_no', 'value' =>$this->input->post('p_page_no'), 'type' => '', 'length' => -1),
            array('name' => ':p_limit_to', 'value' =>$this->input->post('p_limit_to'), 'type' => '', 'length' => -1),
            array('name' => ':p_rowscount_out', 'value' =>'p_rowscount_out', 'type' => '', 'length' => 500),
            array('name' => ':pout', 'value' => 'items', 'type' => 'cur', 'length' => -1));
        $x = $this->eng_md->get_data1($para);
        echo json_encode($x);
    }
    function get_data1(){


        $param = array(
            array('name' => ':p_page_no', 'value' =>$this->input->post('p_page_no'), 'type' => '', 'length' => -1),
            array('name' => ':p_limit_to', 'value' =>$this->input->post('p_limit_to'), 'type' => '', 'length' => -1),
            array('name' => ':p_rowscount_out', 'value' =>'p_rowscount_out', 'type' => '', 'length' => 500),
            array('name' => ':pout', 'value' => 'items', 'type' => 'cur', 'length' => 500));
        $x = $this->eng_md->get_data1($param);

        $data = array();
        foreach ($x['items']  as $row) {
            array_push($data,
                array(

                    'CARDID'=> $row['CARDID'],
                    'FULLNAME'=> $row['FULLNAME'],
                    'SECION'=> $row['SECION'],

                    'STATUSJOB'=> $row['STATUSJOB'],

                    'STATUSJOBNAME'=> $row['STATUSJOBNAME'],
                    'PASSWORD'=> $row['PASSWORD'],
                    'ACTIVE_STATE'=> $row['ACTIVE_STATE'],
                    'ACTIVE_STATENAME'=> $row['ACTIVE_STATENAME'],

                    'SECIONNAME'=> $row['SECIONNAME'],

                    'STATUS'=> $row['STATUS'],

                    // 'CITYNAME'=> $row['CITYNAME'],
                    // 'TELNO'=> $row['TELNO'],
                    'IMAGE'=> $this->get_pictur1e($row['CARDID']),

                )
            );
        };
        $out['items']=$data;
        $out['p_rowscount_out']=$x['p_rowscount_out'];
        echo json_encode($out);
        //echo json_encode($x);
    }

}
