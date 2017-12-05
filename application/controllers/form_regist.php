<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Form_Regist extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
       // $this->load->model('login_model');

    }

    public function index(){
        $this->load->view('form');

    }

    public function daftar($idMape){
        $this->load->view('form');

    }

    
}

?>