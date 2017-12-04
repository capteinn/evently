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
        
        if($ztatuz == "semua"){
            $this->db->select('p.id_pendaftaran, m.nim, m.nama as nama_mahasiswa, p.cv, p.krs, p.status, e.nama as nama_event, s.nama as nama_sie');
            $this->db->from('pendaftaran as p');
            $this->db->join('mahasiswa as m', 'p.nim = m.nim');
            $this->db->join('mapping_event as me', 'p.id_pendaftaran=me.id_pendaftaran');
            $this->db->join('event as e', 'e.id_event=me.id_event');
            $this->db->join('sie as s', 's.id_sie=me.id_sie');
            $this->db->where('e.createdBy', $userId);
        }else{
            $this->db->select('p.id_pendaftaran, m.nim, m.nama as nama_mahasiswa, p.cv, p.krs, p.status, e.nama as nama_event, s.nama as nama_sie');
            $this->db->from('pendaftaran as p');
            $this->db->join('mahasiswa as m', 'p.nim = m.nim');
            $this->db->join('mapping_event as me', 'p.id_pendaftaran=me.id_pendaftaran');
            $this->db->join('event as e', 'e.id_event=me.id_event');
            $this->db->join('sie as s', 's.id_sie=me.id_sie');
            $this->db->where('p.status', $ztatuz);
            $this->db->where('e.createdBy', $userId);
        }
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
    function diterima($id_pendaftaran, $status)
    {
        $this->db->where('id_pendaftaran', $id_pendaftaran);
        $this->db->update('pendaftaran', $status);
        
        return TRUE;
    } 
	
	/**
     * Fungsi ini berguna untuk mengubah status pendaftar menjadi diterima
     * @param string $id_pendaftaran : mengambil spesifik id_pendaftaran 
     * @param string $status : merubah status menjadi ditolak
	 * @return array $result : This is result
     */
    function ditolak($id_pendaftaran, $status)
    {
        $this->db->where('id_pendaftaran', $id_pendaftaran);
        $this->db->update('pendaftaran', $status);
        
        return TRUE;
    }
}

  