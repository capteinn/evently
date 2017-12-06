<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftaran_Detail_model extends CI_Model
{
    /**
     * This function is used to get the user listing count by criteria
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function listPendaftaranDetail($id_pendaftaran)
    {           
		$this->db->select('p.id_pendaftaran, m.nim, m.nama as nama_mahasiswa, dp.id_detail_pendaftaran, dp.status, e.nama as nama_event, s.id_sie, s.nama as nama_sie');
        $this->db->from('detail_pendaftaran as dp');
        $this->db->join('pendaftaran as p', 'dp.id_pendaftaran = p.id_pendaftaran');
        $this->db->join('mahasiswa as m', 'p.nim = m.nim');
        $this->db->join('mapping_event as me', 'dp.id_mapping_event=me.id_mapping_event');
        $this->db->join('event as e', 'me.id_event=e.id_event');
        $this->db->join('sie as s', 'me.id_sie=s.id_sie');
        $this->db->where('dp.id_pendaftaran', $id_pendaftaran);
		
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
	
	function status_pendaftaran($id_pendaftaran) {
		$this->db->select('dp.status');
		$this->db->from('detail_pendaftaran as dp');
		$this->db->join('pendaftaran as p', 'dp.id_pendaftaran = p.id_pendaftaran');
		$this->db->where('dp.id_pendaftaran', $id_pendaftaran);
		
		$query = $this->db->get();
		$status_pendaftaran = $query->result();
		
		if (!empty($status_pendaftaran[1])) {
			if($status_pendaftaran[0]->status=='proses' && $status_pendaftaran[1]->status=='proses' || $status_pendaftaran[0]->status=='ditolak' && $status_pendaftaran[1]->status=='proses' || $status_pendaftaran[0]->status=='proses' && $status_pendaftaran[1]->status=='ditolak') {
				$statusnya = "proses";
			} else if ($status_pendaftaran[0]->status=='ditolak' && $status_pendaftaran[1]->status=='ditolak') {
				$statusnya = "ditolak";
			}else{
				$statusnya = "diterima";
			}
		}else{
			$statusnya = $status_pendaftaran[0]->status;
		}
		
		return $statusnya;
	}
	
	function ubah_status($id_pendaftaran, $status) {
		
		$this->db->set('status', $status);
		$this->db->where('id_pendaftaran', $id_pendaftaran);
		$this->db->update('pendaftaran');
		
	}
	
	/**
     * Fungsi ini berguna untuk mengubah status pendaftar menjadi diterima
     * @param string $id_pendaftaran : mengambil spesifik id_pendaftaran 
     * @param string $status : merubah status menjadi diterima 
     * @return array $result : This is result
     */
    function diterima($id_detail_pendaftaran)
    {	
		// $sql = "UPDATE detail_pendaftaran as dp, mapping_event as me
				// SET dp.status = 'diterima'
				// WHERE dp.id_mapping_event=me.id_mapping_event AND dp.id_pendaftaran=$id_pendaftaran AND me.id_sie=$id_sie";
        
		$this->db->set('dp.status', 'diterima');
		$this->db->where('dp.id_detail_pendaftaran', $id_detail_pendaftaran);
		$this->db->update('detail_pendaftaran as dp JOIN mapping_event as me ON dp.id_mapping_event=me.id_mapping_event');
		
		// $this->db->query($sql);
        
		return TRUE;
    }
	
	/**
     * Fungsi ini berguna untuk mengubah status pendaftar menjadi diterima
     * @param string $id_pendaftaran : mengambil spesifik id_pendaftaran 
     * @param string $status : merubah status menjadi ditolak
	 * @return array $result : This is result
     */
    function ditolak($id_detail_pendaftaran)
    {
		// $sql = "UPDATE detail_pendaftaran as dp, mapping_event as me
				// SET dp.status = 'ditolak'
				// WHERE dp.id_mapping_event=me.id_mapping_event AND dp.id_pendaftaran=$id_pendaftaran AND me.id_sie=$id_sie";
		
		$this->db->set('dp.status', 'ditolak');
		$this->db->where('dp.id_detail_pendaftaran', $id_detail_pendaftaran);
		$this->db->update('detail_pendaftaran as dp JOIN mapping_event as me ON dp.id_mapping_event=me.id_mapping_event');
		
		// $this->db->query($sql);
		
		return TRUE;
    }
}

  