<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Proyek SI
 * @version : 1.1
 * @since : 11 Desember 2017
 */
class Event extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('event_model');
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
    function eventListing()
    {   
        $userId = $this->vendorId;
		
		$this->load->library('pagination');
            
        $count = $this->event_model->eventListingCount($userId);

		$returns = $this->paginationCompress ( "eventListing/", $count, 5 );
            
        $data['eventRecords'] = $this->event_model->listEvent($userId, $returns["page"], $returns["segment"]);
            
        $this->global['pageTitle'] = 'TEDI : List Event';
            
        $this->loadViews("event", $this->global, $data, NULL);
    }

	/**
     * This function is used to load the add new event form
     */
    function addNew()
    {       
        $this->global['pageTitle'] = 'TEDI : Add New Event';

        $this->loadViews("addNewEvent", $this->global, NULL, NULL);
    }
	
	/**
     * This function is used to add new event to the system
     */
    function addNewEvent()
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
               
            $eventInfo = array('nama'=>$nama, 'deskripsi'=>$deskripsi, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->event_model->addNewEvent($eventInfo);
               
            if($result > 0)
            {
                $this->session->set_flashdata('success', 'New Event created successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Event creation failed');
            }
                
            redirect('addNewEvent');
        }
    }
	
	/**
     * This function is used load event edit information
     * @param number $userId : Optional : This is event id
     */
    function editOld($id_event = NULL)
    {
        if($id_event == null)
        {
            redirect('eventListing');
        }
            
        $data['eventInfo'] = $this->event_model->eventInfo($id_event);
          
        $this->global['pageTitle'] = 'TEDI : Edit User';
            
        $this->loadViews("editOldEvent", $this->global, $data, NULL);
    }
	
	/**
     * This function is used to edit event to the system
     */
    function editEvent()
    {
        $this->load->library('form_validation');
        
		$id_event = $this->input->post('id_event');
		
        $this->form_validation->set_rules('nama','Nama','trim|required|max_length[128]|xss_clean');
        $this->form_validation->set_rules('deskripsi','Deskripsi','trim|required|xss_clean');
            
        if($this->form_validation->run() == FALSE)
        {
            $this->editOld($id_event);
        }
        else
        {
            $nama = $this->input->post('nama');
            $deskripsi = $this->input->post('deskripsi');
               
            $eventInfo = array('nama'=>$nama, 'deskripsi'=>$deskripsi);
            
            $result = $this->event_model->editEvent($eventInfo, $id_event);
               
            if($result > 0)
            {
                $this->session->set_flashdata('success', 'New Event updated successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Event updation failed');
            }
                
            redirect('eventListing');
        }
    }
    
	function pageNotFound()
    {
        $this->global['pageTitle'] = 'TEDI : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>