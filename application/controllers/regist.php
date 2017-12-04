<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Proyek SI
 * @version : 1.1
 * @since : 11 Desember 2017
 */
class Regist extends CI_Controller
{
	 /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('regist_model'); 
        $this->load->model('mape_model'); 
        $this->load->model('mapping_model'); 
        $this->load->model('event_model'); 
        $this->load->model('sie_model'); 
    }

    /**
     * This function is used to load the add new regist form
     */
    function addNew()
    {       
		// $userId = $this->vendorId;
  //       $this->global['pageTitle'] = 'TEDI : Add New Data';
		// $data['regist'] = $this->regist_model->addNewReg($userId);
		$data['event'] = $this->mape_model->eventInfo(4);
		$data['sie'] = $this->mape_model->sieInfo(4);

        //$this->loadViews("addNewMapping", $this->global, $data, NULL);
        $this->load->view("addNewRegist", $data, NULL);
    }

    function addNewRegist()
    {
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('nim','Nim','trim|required|max_length[128]|xss_clean');
        $this->form_validation->set_rules('cv','Cv','required');
        $this->form_validation->set_rules('krs','Krs','required');
        if($this->form_validation->run() == FALSE)
        {
            $this->addNew();
        }
        else
        {
            $nim = $this->input->post('nim');
            $cv = $this->input->post('cv');
            $krs = $this->input->post('krs');

            $namaFile = "dokumenEvently".time(); //nama file diberi nama langsung dan diikuti fungsi time
            $config['upload_path'] = './assets/mahasiswa/';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = 1000;
			$config['file_name'] = $namaFile; //nama yang terupload nantinya

			$this->load->library('upload', $config);
            
           

            $regInfo = array('nim'=>$nim,'cv'=>$cv,'krs'=>$krs,'status'=>"proses", 'createdDtm'=>date('Y-m-d H:i:s'));
            $result = $this->regist_model->addNewReg($regInfo);
            $getIdRegist = $this->regist_model->getRegist();
            
            foreach ($getIdRegist as $record) {
            	$idRegist = $record->id_pendaftaran;
            }

            $meInfo = array('id_pendaftaran' =>$idRegist, 'id_event' =>99,'id_sie' =>9999,'deskripsi' =>"TRALALA",'createdBy' =>4);
            $meInfo2 = array('id_pendaftaran' =>$idRegist, 'id_event' =>99,'id_sie' =>8888,'deskripsi' =>"TRALALA",'createdBy' =>4);
            if($meInfo2 != null){
            		$this->mape_model->addNewMape($meInfo);
            		$this->mape_model->addNewMape($meInfo2);
            }else{
	            	$this->mape_model->addNewMape($meInfo);
            }


            if($result > 0)
            {
                $this->session->set_flashdata('success', 'New Sie created successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Sie creation failed');
            }
                
            redirect('addNewRegist');
        }
    }
}