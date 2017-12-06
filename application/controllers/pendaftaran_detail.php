<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Pendaftaran_Detail extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pendaftaran_detail_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'TEDI : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to load the user list by criteria
     */
    function pendaftaranDetailListing($id_pendaftaran)
    {   
        // $userId = $this->vendorId;
            
        $data['pendaftaranDetailRecords'] = $this->pendaftaran_detail_model->listPendaftaranDetail($id_pendaftaran);
        
		$status = $this->pendaftaran_detail_model->status_pendaftaran($id_pendaftaran);
		
		$this->pendaftaran_detail_model->ubah_status($id_pendaftaran, $status);
		
        $this->global['pageTitle'] = 'TEDI : List Detail Pendaftaran';
            
        $this->loadViews("pendaftaran_detail", $this->global, $data, NULL);
    }
	
	/**
     * Fungsi ini berguna untuk mengubah status pendaftar menjadi diterima
     */
    function diterima($id_detail_pendaftaran, $id_pendaftaran)
    {           
        $result = $this->pendaftaran_detail_model->diterima($id_detail_pendaftaran);

		// if($result > 0)
        // {
            // $this->session->set_flashdata('success', 'New Mapping updated successfully');
        // }
        // else
        // {
            // $this->session->set_flashdata('error', 'Mapping updation failed');
        // }
		
        $this->pendaftaranDetailListing($id_pendaftaran);
    }
	
	/**
     * Fungsi ini berguna untuk mengubah status pendaftar menjadi ditolak
     */
    function ditolak($id_detail_pendaftaran, $id_pendaftaran)
    {           
        $result = $this->pendaftaran_detail_model->ditolak($id_detail_pendaftaran);
            
		// if($result > 0)
        // {
            // $this->session->set_flashdata('success', 'New Mapping updated successfully');
        // }
        // else
        // {
            // $this->session->set_flashdata('error', 'Mapping updation failed');
        // }	
		
        $this->pendaftaranDetailListing($id_pendaftaran);
    }

    function pageNotFound()
    {
        $this->global['pageTitle'] = 'TEDI : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>