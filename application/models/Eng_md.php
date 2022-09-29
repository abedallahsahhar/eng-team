<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require 'DBOci.php';
class eng_md extends CI_Model
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



    function read_update($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "read_update", $parm);
        return $query;
    }
    /*--------------------------------get_data1-----------------------*/

    function get_data($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_data", $parm);
        return $query;
    }
    function insert_data($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "insert_data", $parm);
        return $query;
    }
    function update_data($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "update_data", $parm);
        return $query;
    }
    function delete_data($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "delete_data", $parm);
        return $query;
    }
    function getdata_cardid($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "getdata_cardid", $parm);
        return $query;
    }
    /*--------------------------------pic-----------------------*/
    function get_picture($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_picture", $parm);
        return $query;
    }
    function insert_picture($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "insert_picture", $parm);
        return $query;
    }
    function delete_picture($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "delete_picture", $parm);
        return $query;
    }
    /*--------------------------------drop-----------------------*/

    function insert_file($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "insert_file", $parm);
        return $query;
    }
    function delete_file($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "delete_file", $parm);
        return $query;
    }
    function get_file($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_file", $parm);
        return $query;
    }
    function get_joptitle0($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_joptitle0", $parm);
        return $query;
    }
    function insert_timeemp($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "insert_timeemp", $parm);
        return $query;
    }
    function get_timeemp($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_timeemp", $parm);
        return $query;
    }
    function DELETE_timeemp($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "DELETE_timeemp", $parm);
        return $query;
    }

    function get_holyday($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_holyday", $parm);
        return $query;
    }
    function get_holyday1($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_holyday1", $parm);
        return $query;
    }
    function insert_holyday($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "insert_holyday", $parm);
        return $query;
    }
    function DELETE_holyday($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "DELETE_holyday", $parm);
        return $query;
    }
    function UPDATE_holyday($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "UPDATE_holyday", $parm);
        return $query;
    }
    function insert_OUTTIME($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "insert_OUTTIME", $parm);
        return $query;
    }
    function DELETE_OUTTIME($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "DELETE_OUTTIME", $parm);
        return $query;
    }
    function UPDATE_OUTTIME($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "UPDATE_OUTTIME", $parm);
        return $query;
    }
    function get_OUTTIME($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_OUTTIME", $parm);
        return $query;
    }
    function get_REWARDS($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_REWARDS", $parm);
        return $query;
    }
    function insert_REWARDS($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "insert_REWARDS", $parm);
        return $query;
    }
    function UPDATE_REWARDS($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "UPDATE_REWARDS", $parm);
        return $query;
    }
    function DELETE_REWARDS($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "DELETE_REWARDS", $parm);
        return $query;
    }
    function search_data($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "search_data", $parm);
        return $query;
    }
    function get_task($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.TASKS", "get_task", $parm);
        return $query;
    }
    function get_task1($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.TASKS", "get_task1", $parm);
        return $query;
    }

    function insert_task($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.TASKS", "insert_task", $parm);
        return $query;
    }

    function DELETE_task($parm)
{
    $query = $this->dbconn->excuteProcedures("abed.TASKS", "DELETE_task", $parm);
    return $query;
}
function update_task($parm)
{
    $query = $this->dbconn->excuteProcedures("abed.TASKS", "update_task", $parm);
    return $query;
}
    function get_TWET($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_TWET", $parm);
        return $query;
    }
    function insert_TWET($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "insert_TWET", $parm);
        return $query;
    }
    function channge_password($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "channge_password", $parm);
        return $query;
    }
    function activity_state($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "activity_state", $parm);
        return $query;
    }
    function login($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "login", $parm);
        return $query;
    }
    function get_DEPARTMENT($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_DEPARTMENT", $parm);
        return $query;
    }
    function aaaa($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "aaaa", $parm);
        return $query;
    }
    function get_OUTTIME1($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_OUTTIME1", $parm);
        return $query;
    }

    function get_timeemp1($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_timeemp1", $parm);
        return $query;
    }
    function UPDATE_timeemp($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "UPDATE_timeemp", $parm);
        return $query;
    }
    function emp_accept($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "emp_accept", $parm);
        return $query;
    }
    function emp_cancel($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "emp_cancel", $parm);
        return $query;
    }
    function emp_allorder($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "emp_allorder", $parm);
        return $query;
    }
    function emp_accept1($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "emp_accept1", $parm);
        return $query;
    }
    function emp_cancel1($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "emp_cancel1", $parm);
        return $query;
    }
    function emp_allorder1($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "emp_allorder1", $parm);
        return $query;
    }
    function aaaa1($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "aaaa1", $parm);
        return $query;
    }
    function alltasks($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.TASKS", "alltasks", $parm);
        return $query;
    }
    function donetasks($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.TASKS", "donetasks", $parm);
        return $query;
    }
    function latetask($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.TASKS", "latetask", $parm);
        return $query;
    }
    function alltaskscard($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.TASKS", "alltaskscard", $parm);
        return $query;
    }
    function inworktasks($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.TASKS", "inworktasks", $parm);
        return $query;
    }
    function arrivetasks($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.TASKS", "arrivetasks", $parm);
        return $query;
    }
    function alltasks1($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.TASKS", "alltasks1", $parm);
        return $query;
    }
    function donetasks1($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.TASKS", "donetasks1", $parm);
        return $query;
    }
    function inworktasks1($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.TASKS", "inworktasks1", $parm);
        return $query;
    }
    function arrivetasks1($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.TASKS", "arrivetasks1", $parm);
        return $query;
    }
    function get_data_section($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_data_section", $parm);
        return $query;
    }
    function get_data1($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_data1", $parm);
        return $query;
    }
    function search_HOLIDAY($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "search_HOLIDAY", $parm);
        return $query;
    }
    function countqq11($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "countqq11", $parm);
        return $query;
    }
    function search_OUTTIME($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "search_OUTTIME", $parm);
        return $query;
    }
    function search_TIMEEMP($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "search_TIMEEMP", $parm);
        return $query;
    }
    function search_TASK($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "search_TASK", $parm);
        return $query;
    }
    function search_REWARDS($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "search_REWARDS", $parm);
        return $query;
    }
    function countout($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "countout", $parm);
        return $query;
    }
    function get_navegations($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_navegations", $parm);
        return $query;
    }
    function get_navegation1s($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "get_navegation1s", $parm);
        return $query;
    }
    function insert_refresh($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "insert_refresh", $parm);
        return $query;
    }
    function emp_allreward($parm)
    {
        $query = $this->dbconn->excuteProcedures("abed.EMPLOYEE", "emp_allreward", $parm);
        return $query;
    }
}