<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Proyek SI
 * @version : 1.1
 * @since : 11 Desember 2017
 */
class Sie extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sie_model');
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
    function sieListing()
    {   
        $userId = $this->vendorId;
            
        $data['sieRecords'] = $this->sie_model->listSie($userId);
            
        $this->global['pageTitle'] = 'TEDI : List Sie';
            
        $this->loadViews("sie", $this->global, $data, NULL);
    }

	/**
     * This function is used to load the add new sie form
     */
    function addNew()
    {       
        $this->global['pageTitle'] = 'CodeInsect : Add New Sie';

        $this->loadViews("addNewSie", $this->global, NULL, NULL);
    }
	
	/**
     * This function is used to add new user to the system
     */
    function addNewSie()
    {
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('nama','Nama','trim|required|max_length[128]|xss_clean');
        $this->form_validation->set_rules('deskripsi','Deskripsi','trim|required|xss_clean');
            
        if($this->form_validation->run() == FALSE)
        {
            $this->addNew();
        }
        else
        {
            $nama = $this->input->post('nama');
            $deskripsi = $this->input->post('deskripsi');
               
            $sieInfo = array('nama'=>$nama, 'deskripsi'=>$deskripsi, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->sie_model->addNewSie($sieInfo);
               
            if($result > 0)
            {
                $this->session->set_flashdata('success', 'New Sie created successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Sie creation failed');
            }
                
            redirect('addNewSie');
        }
    }
    
	function pageNotFound()
    {
        $this->global['pageTitle'] = 'TEDI : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>