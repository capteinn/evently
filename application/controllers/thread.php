<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Proyek SI
 * @version : 1.1
 * @since : 11 Desember 2017
 */
class Thread extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('thread_model');
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
    function threadListing()
    {   
        $userId = $this->vendorId;
            
        $data['threadRecords'] = $this->thread_model->listThread($userId);
            
        $this->global['pageTitle'] = 'TEDI : List Thread';
            
        $this->loadViews("thread", $this->global, $data, NULL);
    }

	/**
     * This function is used to load the add new thread form
     */
    function addNew()
    {       
		$userId = $this->vendorId;
		
        $this->global['pageTitle'] = 'TEDI : Add New Thread';
		
		$data['event'] = $this->thread_model->eventInfo($userId);
		
        $this->loadViews("addNewThread", $this->global, $data, NULL);
    }
	
	/**
     * This function is used to add new thread to the system
     */
    function addNewThread()
    {
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('event','Event','trim|required|numeric');
        $this->form_validation->set_rules('judul','Judul','trim|required|max_length[128]|xss_clean');
        $this->form_validation->set_rules('poster','Poster','required');
        $this->form_validation->set_rules('tgl_mulai','Tanggal Mulai','trim|required');
        $this->form_validation->set_rules('tgl_selesai','Tanggal Selesai','trim|required');
        $this->form_validation->set_rules('deskripsi','Deskripsi','trim|required|xss_clean');
            
        if($this->form_validation->run() == FALSE)
        {
            $this->addNew();
        }
        else
        {
			$config['upload_path'] = './assets/poster/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 100;
			$config['max_width'] = 1024;
			$config['max_height'] = 768;
			
			$this->load->library('upload', $config);
			//masih error boss, belum bisa upload gambar ke directory assets/poster
			
            $event = $this->input->post('event');
            $judul = $this->input->post('judul');
            $poster = $this->input->post('poster');
			$tgl_mulai = DateTime::createFromFormat('m/d/Y', $this->input->post('tgl_mulai'))->format('Y-m-d');
			$tgl_selesai = DateTime::createFromFormat('m/d/Y', $this->input->post('tgl_selesai'))->format('Y-m-d');
            $deskripsi = $this->input->post('deskripsi');
               
            $threadInfo = array('id_event'=>$event, 'judul'=>$judul, 'poster'=>$poster, 'tgl_mulai'=>$tgl_mulai, 'tgl_selesai'=>$tgl_selesai, 'deskripsi'=>$deskripsi, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->thread_model->addNewThread($threadInfo);
            
			if ( ! $this->upload->do_upload('poster')){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$terupload = array('upload_data' => $this->upload->data());
			}
			
            if($result > 0)
            {
                $this->session->set_flashdata('success', 'New Thread created successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Thread creation failed');
            }
                
            redirect('addNewThread');
        }
    }
	
	/**
     * This function is used load thread edit information
     * @param number $userId : Optional : This is thread id
     */
    function editOld($id_thread = NULL)
    {
        if($id_thread == null)
        {
            redirect('threadListing');
        }
            
        $data['threadInfo'] = $this->thread_model->threadInfo($id_thread);
          
        $this->global['pageTitle'] = 'TEDI : Edit User';
            
        $this->loadViews("editOldThread", $this->global, $data, NULL);
    }
	
	/**
     * This function is used to edit thread to the system
     */
    function editThread()
    {
        $this->load->library('form_validation');
        
		$id_thread = $this->input->post('id_thread');
		
        $this->form_validation->set_rules('nama','Nama','trim|required|max_length[128]|xss_clean');
        $this->form_validation->set_rules('deskripsi','Deskripsi','trim|required|xss_clean');
            
        if($this->form_validation->run() == FALSE)
        {
            $this->editOld($id_thread);
        }
        else
        {
            $nama = $this->input->post('nama');
            $deskripsi = $this->input->post('deskripsi');
               
            $threadInfo = array('nama'=>$nama, 'deskripsi'=>$deskripsi);
            
            $result = $this->thread_model->editThread($threadInfo, $id_thread);
               
            if($result > 0)
            {
                $this->session->set_flashdata('success', 'New Thread updated successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Thread updation failed');
            }
                
            redirect('threadListing');
        }
    }
    
	function pageNotFound()
    {
        $this->global['pageTitle'] = 'TEDI : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>