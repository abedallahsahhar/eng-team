<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class boss_ctr extends CI_Controller {

    function __construct()
    {

        parent::__construct();
        if (!$this->eng_md->__construct()){

            $this->session->sess_destroy();
            //redirect( 'http://192.168.88.17/login/');
            echo 'لا يوجد اتصال في قواعد البيانات';

        }



    }

//---------------------------------------------------------------------------------//

/*-----------------------------------------شاشات الفاتورة--------------------------------------------------------*/
public function furlough(){
  $data= array('tittle' =>"الإجازات");
   $data['headhtml']=$this->load->view('templates/headhtml',$data,true) ;
  $data['header']= $this->load->view('templates/header',NULL,true);
  $data['quick_sidebar'] = $this->load->view('templates/quick_sidebar', NULL, true);

  $data['content']=$this->load->view('Boos/furlough',$data,true) ;
  $data['footer']=$this->load->view('templates/footer',NULL,true);
  $data['scripts']=$this->load->view('templates/scripts',$data,true) ;
  $this->template->load('default',null,$data);
  }

/*---------------------------------------------------------------------------------------------------------------*/
    function get_holydayBOSS(){
        $para = array(
            array('name' => ':p_section_id', 'value' => $this->input->post('p_section_id'), 'type' => '', 'length' => -1),

            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1));
        $x = $this->boss_md->get_holydayBOSS($para);
        echo json_encode($x);
    }
    function get_holydayBOSS1(){
        $para = array(

            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1));
        $x = $this->boss_md->get_holydayBOSS1($para);
        echo json_encode($x);
    }
    function get_holydayBOSS2(){
        $para = array(
            array('name' => ':p_JOBTITLE', 'value' => $this->input->post('JOBTITLE'), 'type' => '', 'length' => -1),

            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1));
        $x = $this->boss_md->get_holydayBOSS2($para);
        echo json_encode($x);
    }

    function cancel_holydayBOSS(){
        $param = array(
            array('name' => ':p_id', 'value' => $this->input->post('ID'), 'type' => '', 'length' => -1),
            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );
        $x = $this->boss_md->cancel_holydayBOSS($param);
        echo json_encode($x);
    }
    function accept_holydayBOSS()
    {
        $param = array(
            array('name' => ':p_id', 'value' => $this->input->post('ID'), 'type' => '', 'length' => -1),
            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' => 'p_errmsg', 'type' => '', 'length' => 500)
        );
        $x = $this->boss_md->accept_holydayBOSS($param);
        echo json_encode($x);
    }
        /*---------------------------------------------------------------------------------------------------------------*/
        function get_OUTTIMEBOSS(){
            $para = array(
                array('name' => ':p_section_id', 'value' => $this->input->post('p_section_id'), 'type' => '', 'length' => -1),

                array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1));
            $x = $this->boss_md->get_OUTTIMEBOSS($para);
            echo json_encode($x);
        }
    function get_OUTTIMEBOSS2(){
        $para = array(
            array('name' => ':p_JOBTITLE', 'value' => $this->input->post('JOBTITLE'), 'type' => '', 'length' => -1),

            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1));
        $x = $this->boss_md->get_OUTTIMEBOSS2($para);
        echo json_encode($x);
    }

    function get_OUTTIMEBOSS1(){
        $para = array(

            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1));
        $x = $this->boss_md->get_OUTTIMEBOSS1($para);
        echo json_encode($x);
    }

    function cancel_OUTTIMEBOSS(){
            $param = array(
                array('name' => ':p_id', 'value' => $this->input->post('ID'), 'type' => '', 'length' => -1),
                array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
                array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

            );
            $x = $this->boss_md->cancel_OUTTIMEBOSS($param);
            echo json_encode($x);
        }
        function accept_OUTTIMEBOSS(){
            $param = array(
                array('name' => ':p_id', 'value' => $this->input->post('ID'), 'type' => '', 'length' => -1),
                array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
                array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)
            );
            $x = $this->boss_md->accept_OUTTIMEBOSS($param);
            echo json_encode($x);
    }
    /*------------------------------------------tasks---------------------------------------------------------------------*/
    function get_task(){
        $para = array(
            array('name' => ':user_id', 'value' => $this->input->post('user_id'), 'type' => '', 'length' => -1),

            array('name' => ':P_RESULT_OUT', 'value' => 'items', 'type' => 'cur', 'length' => -1));
        $x = $this->boss_md->get_task($para);
        echo json_encode($x);
    }
    function accept_task(){
        $param = array(
            array('name' => ':p_id', 'value' => $this->input->post('ID'), 'type' => '', 'length' => -1),
            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)

        );
        $x = $this->boss_md->accept_task($param);
        echo json_encode($x);
    }
    function done_task(){
        $param = array(
            array('name' => ':p_id', 'value' => $this->input->post('ID'), 'type' => '', 'length' => -1),
            array('name' => ':p_errcod', 'value' => 'p_errcod', 'type' => '', 'length' => 500),
            array('name' => ':p_errmsg', 'value' =>'p_errmsg', 'type' => '', 'length' => 500)
        );
        $x = $this->boss_md->done_task($param);
        echo json_encode($x);
    }

}

/* End of file welcome.php */
