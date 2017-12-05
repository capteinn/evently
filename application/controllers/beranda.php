<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Beranda (BerandaController)
 * Beranda Class to control all user related operations.
 * @author : Proyek SI
 * @version : 1.1
 * @since : 12 Desember 2017
 */
class Beranda extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('beranda_model');  
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
		$data['threadRecords'] = $this->beranda_model->listThread();
        $this->load->view("index.php", $data);
    }
    
}

?>