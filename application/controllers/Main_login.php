<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main_login extends CI_Controller {

 


    public function login(){
  
        $this->load->view('login') ;
}

/*--------------------------------Item-----------------------------------------------------------------------------*/		

public function signin(){
  
    $this->load->view('signin') ;
}

    
} 