<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Mahasiswa (MahasiswaController)
 * Mahasiswa Class to control all user related operations.
 * @author : Proyek SI
 * @version : 1.1
 * @since : 12 Desember 2017
 */
class Mahasiswa extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
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
     * This function is used to load the user list
     */
    function mahasiswaListing()
    {   
        $userId = $this->vendorId;
		
		$this->load->library('pagination');
            
        $count = $this->mahasiswa_model->mahasiswaListingCount($userId);

		$returns = $this->paginationCompress ( "mahasiswaListing/", $count, 5 );
            
        $data['mahasiswaRecords'] = $this->mahasiswa_model->listMahasiswa($userId, $returns["page"], $returns["segment"]);
            
        $this->global['pageTitle'] = 'TEDI : List Mahasiswa';
            
        $this->loadViews("mahasiswa", $this->global, $data, NULL);
    }

    function pageNotFound()
    {
        $this->global['pageTitle'] = 'TEDI : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>