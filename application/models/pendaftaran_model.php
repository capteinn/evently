<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model
{
    /**
     * This function is used to get the user listing count by criteria
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function listPendaftaran($userId, $ztatuz)
    {           
		$this->db->select('p.id_pendaftaran, m.nim, m.nama as nama_mahasiswa, p.cv, p.krs, dp.id_detail_pendaftaran, dp.status, e.nama as nama_event, s.id_sie, s.nama as nama_sie');
        $this->db->from('detail_pendaftaran as dp');
        $this->db->join('pendaftaran as p', 'dp.id_pendaftaran = p.id_pendaftaran');
        $this->db->join('mahasiswa as m', 'p.nim = m.nim');
        $this->db->join('mapping_event as me', 'dp.id_mapping_event=me.id_mapping_event');
        $this->db->join('event as e', 'me.id_event=e.id_event');
        $this->db->join('sie as s', 'me.id_sie=s.id_sie');
        $this->db->where('me.createdBy', $userId);
		$this->db->group_by('p.id_pendaftaran');
		
		if($ztatuz != "semua"){
            $this->db->where('dp.status', $ztatuz);
        }
		
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
	
	/**
     * This function is used to get the user listing count by criteria
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function detailPendaftaran($id_pendaftaran)
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
	
	/**
     * Fungsi ini berguna untuk mengubah status pendaftar menjadi diterima
     * @param string $id_pendaftaran : mengambil spesifik id_pendaftaran 
     * @param string $status : merubah status menjadi diterima 
     * @return array $result : This is result
     */
    function diterima($id_pendaftaran, $id_sie)
    {	
		$sql = "UPDATE detail_pendaftaran as dp, mapping_event as me
				SET dp.status = 'diterima'
				WHERE dp.id_mapping_event=me.id_mapping_event AND dp.id_pendaftaran=$id_pendaftaran AND me.id_sie=$id_sie";
        
		$this->db->query($sql);
        
		return TRUE;
    } 
	
	/**
     * Fungsi ini berguna untuk mengubah status pendaftar menjadi diterima
     * @param string $id_pendaftaran : mengambil spesifik id_pendaftaran 
     * @param string $status : merubah status menjadi ditolak
	 * @return array $result : This is result
     */
    function ditolak($id_pendaftaran)
    {
		$sql = "UPDATE detail_pendaftaran as dp, mapping_event as me
				SET dp.status = 'ditolak'
				WHERE dp.id_mapping_event=me.id_mapping_event AND dp.id_pendaftaran=$id_pendaftaran";
		
		$this->db->query($sql);
		
		return TRUE;
    }
}

  