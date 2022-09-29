<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require 'DBOci.php';
class boss_md extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $user = 'abed';// $this->session->userdata('uname') ;
        $pass = '123'; //$this->session->userdata('pass') ;
        $this->dbconn = new DBOci();
        $connect = $this->dbconn->db_connect($user, $pass);
        return $connect;
    }


    /*--------------------------------accounts-----------------------------------------------------------------------------*/


    function get_holydayBOSS($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.BOOS", "get_holydayBOSS", $parm);
        return $query;
    }
    function get_holydayBOSS2($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.BOOS", "get_holydayBOSS2", $parm);
        return $query;
    }
    function get_holydayBOSS1($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.BOOS", "get_holydayBOSS1", $parm);
        return $query;
    }



    function cancel_holydayBOSS($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.BOOS", "cancel_holydayBOSS", $parm);
        return $query;
    }



    function accept_holydayBOSS($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.BOOS", "accept_holydayBOSS", $parm);
        return $query;
    }
    function get_OUTTIMEBOSS($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.BOOS", "get_OUTTIMEBOSS", $parm);
        return $query;
    }
    function get_OUTTIMEBOSS2($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.BOOS", "get_OUTTIMEBOSS2", $parm);
        return $query;
    }
    function get_OUTTIMEBOSS1($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.BOOS", "get_OUTTIMEBOSS1", $parm);
        return $query;
    }
    function accept_OUTTIMEBOSS($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.BOOS", "accept_OUTTIMEBOSS", $parm);
        return $query;
    }
    function cancel_OUTTIMEBOSS($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.BOOS", "cancel_OUTTIMEBOSS", $parm);
        return $query;
    }
    function get_task($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.BOOS", "get_task", $parm);
        return $query;
    }
    function accept_task($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.BOOS", "accept_task", $parm);
        return $query;
    }
    function done_task($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.BOOS", "done_task", $parm);
        return $query;
    }
}