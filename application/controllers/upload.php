<?php

class upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('regist_model'); 
        $this->load->model('mape_model'); 
        $this->load->model('mapping_model'); 
        $this->load->model('event_model'); 
        $this->load->model('sie_model'); 
        $this->load->model('mahasiswa_model'); 
        $this->load->model('detailpendaftaran_model'); 
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        $this->load->view('form_upload');
    }

    function do_upload() {
        $idEvent = $this->uri->segment('3');
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $telepon = $this->input->post('telepon');
        $prodi = $this->input->post('prodi');
        $angkatan = $this->input->post('angkatan');
        $kelas = $this->input->post('kelas');
        $jenkel = $this->input->post('jenkel');
        $sie = $this->input->post('sie');
        $alasan = $this->input->post('alasan');

        // setting konfigurasi upload
        $namaFile = "berkasEvently".time(); 
        $config['upload_path'] = './assets/mahasiswa/';
        $config['allowed_types'] = 'pdf';
        $config['file_name'] = $namaFile;
        // load library upload
        $this->load->library('upload', $config);
        // upload gambar 1
        $this->upload->do_upload('cv');
        $result1 = $this->upload->data();
        // upload gambar 2
        $this->upload->do_upload('krs');
        $result2 = $this->upload->data();
        // upload gambar 1
        // menyimpan hasil upload
        $result = array('cv'=>$result1,'krs'=>$result2);

        $regInfo = array('nim'=>$nim,'cv'=>$result['cv']['file_name'],'krs'=>$result['krs']['file_name'], 'alasan'=>$alasan,'createdDtm'=>date('Y-m-d H:i:s'));
        $this->regist_model->addNewReg($regInfo);

        $getIdRegist = $this->regist_model->getRegist();
            
        foreach ($getIdRegist as $record) {
            $idRegist = $record->id_pendaftaran;
        }

        // ----------- push data ke tabel MAHASISWA -----------//
            
        $mhsInfo = array('nim' =>$nim,'kelas' =>$kelas,'nama' =>$nama,'no_telp' =>$telepon,'angkatan' =>$angkatan,'jenkel' =>$jenkel,'id_prodi' =>$prodi);
        $this->mahasiswa_model->addNewMhs($mhsInfo);

        // --------- get id_mapping_event ----------
            
        $ziez = implode(",",$sie);
        $getIdMape = $this->mape_model->getMape($idEvent,$ziez[0]);

        foreach ($getIdMape as $record3) {
            $idMape = $record3->id_mapping_event;
        }
        if($ziez[2] != null){
            $getIdMape2 = $this->mape_model->getMape($idEvent,$ziez[2]);
            foreach ($getIdMape2 as $record3) {
                $idMape2 = $record3->id_mapping_event;
            }
            $dpInfo = array('id_pendaftaran' =>$idRegist,'id_mapping_event' =>$idMape,'status' =>"proses",'createdDtm'=>date('Y-m-d H:i:s'));
            $dpInfo2 = array('id_pendaftaran' =>$idRegist,'id_mapping_event' =>$idMape2,'status' =>"proses",'createdDtm'=>date('Y-m-d H:i:s'));
            $this->detailpendaftaran_model->addNewDp($dpInfo);
            $this->detailpendaftaran_model->addNewDp($dpInfo2);
        }else{
            $dpInfo = array('id_pendaftaran' =>$idRegist,'id_mapping_event' =>$idMape,'status' =>"proses",'createdDtm'=>date('Y-m-d H:i:s'));
                $this->detailpendaftaran_model->addNewDp($dpInfo);
        }
        //sementara
       redirect('/berhasil');

    }

}

?>