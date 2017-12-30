<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Pendaftaran extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pendaftaran_model');
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
    function pendaftaranListing()
    {   
        $userId = $this->vendorId;
		
		// pagination masih error boss.. mumet

		$this->load->library('pagination');
        $count = $this->pendaftaran_model->pendaftaranListingCount($userId);
		$returns = $this->paginationCompress ( "pendaftaranListing/", $count, 5 );
        $data['pendaftaranRecords'] = $this->pendaftaran_model->listPendaftaran($userId, $returns["page"], $returns["segment"]);
		// $data['pendaftaranRecords'] = $this->pendaftaran_model->listPendaftaran($userId, $ztatuz, $event);
		$data['eventRecords'] = $this->pendaftaran_model->getEvent($userId);
        $this->global['pageTitle'] = 'TEDI : List Pendaftaran';
        $this->loadViews("pendaftaran", $this->global, $data, NULL);
    }
	
	function pendaftaranDiterimaListing()
    {   
	   $userId = $this->vendorId;
        
        // pagination masih error boss.. mumet

        $this->load->library('pagination');
        $count = $this->pendaftaran_model->pendaftaranListingCount($userId);
        $returns = $this->paginationCompress ( "pendaftaranDiterimaListing/", $count, 5 );
        $data['pendaftaranRecords'] = $this->pendaftaran_model->listPendaftaranDiterima($userId, $returns["page"], $returns["segment"]);
        // $data['pendaftaranRecords'] = $this->pendaftaran_model->listPendaftaran($userId, $ztatuz, $event);
        $data['eventRecords'] = $this->pendaftaran_model->getEvent($userId);
        $this->global['pageTitle'] = 'TEDI : List Pendaftaran';
        $this->loadViews("pendaftaran", $this->global, $data, NULL);
    }
	
	function pendaftaranDitolakListing()
    {   
        $userId = $this->vendorId;
        
        // pagination masih error boss.. mumet

        $this->load->library('pagination');
        $count = $this->pendaftaran_model->pendaftaranListingCount($userId);
        $returns = $this->paginationCompress ( "pendaftaranDitolakListing/", $count, 5 );
        $data['pendaftaranRecords'] = $this->pendaftaran_model->listPendaftaranDitolak($userId, $returns["page"], $returns["segment"]);
        // $data['pendaftaranRecords'] = $this->pendaftaran_model->listPendaftaran($userId, $ztatuz, $event);
        $data['eventRecords'] = $this->pendaftaran_model->getEvent($userId);
        $this->global['pageTitle'] = 'TEDI : List Pendaftaran';
        $this->loadViews("pendaftaran", $this->global, $data, NULL);
    }

    function pageNotFound()
    {
        $this->global['pageTitle'] = 'TEDI : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>