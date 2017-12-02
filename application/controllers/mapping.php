<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Proyek SI
 * @version : 1.1
 * @since : 11 Desember 2017
 */
class Mapping extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mapping_model');
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
    function mappingListing()
    {   
        $userId = $this->vendorId;
            
        $data['mappingRecords'] = $this->mapping_model->listMapping($userId);
            
        $this->global['pageTitle'] = 'TEDI : List Mapping';
            
        $this->loadViews("mapping", $this->global, $data, NULL);
    }

	/**
     * This function is used to load the add new mapping form
     */
    function addNew()
    {       
		$userId = $this->vendorId;
		
        $this->global['pageTitle'] = 'TEDI : Add New Mapping';
		
		$data['event'] = $this->mapping_model->eventInfo($userId);
		$data['sie'] = $this->mapping_model->sieInfo($userId);

        $this->loadViews("addNewMapping", $this->global, $data, NULL);
    }
	
	/**
     * This function is used to add new mapping to the system
     */
    function addNewMapping()
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
               
            $mappingInfo = array('nama'=>$nama, 'deskripsi'=>$deskripsi, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->mapping_model->addNewMapping($mappingInfo);
               
            if($result > 0)
            {
                $this->session->set_flashdata('success', 'New Mapping created successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Mapping creation failed');
            }
                
            redirect('addNewMapping');
        }
    }
	
	/**
     * This function is used load mapping edit information
     * @param number $userId : Optional : This is mapping id
     */
    function editOld($id_mapping = NULL)
    {
        if($id_mapping == null)
        {
            redirect('mappingListing');
        }
            
        $data['mappingInfo'] = $this->mapping_model->mappingInfo($id_mapping);
          
        $this->global['pageTitle'] = 'TEDI : Edit User';
            
        $this->loadViews("editOldMapping", $this->global, $data, NULL);
    }
	
	/**
     * This function is used to edit mapping to the system
     */
    function editMapping()
    {
        $this->load->library('form_validation');
        
		$id_mapping = $this->input->post('id_mapping');
		
        $this->form_validation->set_rules('nama','Nama','trim|required|max_length[128]|xss_clean');
        $this->form_validation->set_rules('deskripsi','Deskripsi','trim|required|xss_clean');
            
        if($this->form_validation->run() == FALSE)
        {
            $this->editOld($id_mapping);
        }
        else
        {
            $nama = $this->input->post('nama');
            $deskripsi = $this->input->post('deskripsi');
               
            $mappingInfo = array('nama'=>$nama, 'deskripsi'=>$deskripsi);
            
            $result = $this->mapping_model->editMapping($mappingInfo, $id_mapping);
               
            if($result > 0)
            {
                $this->session->set_flashdata('success', 'New Mapping updated successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Mapping updation failed');
            }
                
            redirect('mappingListing');
        }
    }
    
	function pageNotFound()
    {
        $this->global['pageTitle'] = 'TEDI : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>