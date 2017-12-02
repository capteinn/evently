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
        $this->global['pageTitle'] = 'TEDI : Add New Sie';

        $this->loadViews("addNewSie", $this->global, NULL, NULL);
    }
	
	/**
     * This function is used to add new sie to the system
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
	
	/**
     * This function is used load sie edit information
     * @param number $userId : Optional : This is sie id
     */
    function editOld($id_sie = NULL)
    {
        if($id_sie == null)
        {
            redirect('sieListing');
        }
            
        $data['sieInfo'] = $this->sie_model->sieInfo($id_sie);
          
        $this->global['pageTitle'] = 'TEDI : Edit User';
            
        $this->loadViews("editOldSie", $this->global, $data, NULL);
    }
	
	/**
     * This function is used to edit sie to the system
     */
    function editSie()
    {
        $this->load->library('form_validation');
        
		$id_sie = $this->input->post('id_sie');
		
        $this->form_validation->set_rules('nama','Nama','trim|required|max_length[128]|xss_clean');
        $this->form_validation->set_rules('deskripsi','Deskripsi','trim|required|xss_clean');
            
        if($this->form_validation->run() == FALSE)
        {
            $this->editOld($id_sie);
        }
        else
        {
            $nama = $this->input->post('nama');
            $deskripsi = $this->input->post('deskripsi');
               
            $sieInfo = array('nama'=>$nama, 'deskripsi'=>$deskripsi);
            
            $result = $this->sie_model->editSie($sieInfo, $id_sie);
               
            if($result > 0)
            {
                $this->session->set_flashdata('success', 'New Sie updated successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Sie updation failed');
            }
                
            redirect('sieListing');
        }
    }
    
	function pageNotFound()
    {
        $this->global['pageTitle'] = 'TEDI : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>