<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class : Beranda (BerandaController)
 * Beranda Class to control all user related operations.
 * @author : Proyek SI
 * @version : 1.1
 * @since : 12 Desember 2017
 */
class Uberanda extends CI_Controller
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
	
	function detail_event($id_thread) {
		$detail_event = $this->beranda_model->threadInfo($id_thread);
		
		foreach ($detail_event as $record) {
			
			$nama_sie = $this->beranda_model->sieInfo($record->id_event);
			
			$threadRecords = array(
							'id_event'=>$record->id_event,
							'poster'=>$record->poster,
							'nama'=>$record->nama,
                            'judul'=>$record->judul,
                            'mulai'=>$record->tgl_mulai,
                            'selesai'=>$record->tgl_selesai,
                            'deskripsi'=>$record->deskripsi,
                            'sie'=>$nama_sie
							);
			
		}
		
		
		$this->load->view('detail_event', $threadRecords);
	}
	
	function contact() {
		$this->load->view('contact');
	}
	
	function about() {
		$this->load->view('about');
	}
	
	function berhasil() {
		$this->load->view('berhasil');
	}
    
}

?>