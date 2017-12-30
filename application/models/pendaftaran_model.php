<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model
{
	/**
     * This function is used to get the user listing count by criteria
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function pendaftaranListingCount($userId, $status)
    {	 
		$this->db->select('p.id_pendaftaran, m.nim, m.nama as nama_mahasiswa, pr.nama as prodi, e.nama as event, p.cv, p.krs, p.status');
        $this->db->from('pendaftaran as p');
        $this->db->join('mahasiswa as m', 'p.nim = m.nim');
        $this->db->join('prodi as pr', 'm.id_prodi = pr.id_prodi');
        $this->db->join('detail_pendaftaran as dp', 'dp.id_pendaftaran = p.id_pendaftaran');
        $this->db->join('mapping_event as me', 'dp.id_mapping_event=me.id_mapping_event');
        $this->db->join('event as e', 'me.id_event=e.id_event');
        $this->db->where('me.createdBy', $userId);
		$this->db->group_by('p.id_pendaftaran');
        $this->db->where('p.status', $status);
		
		// if($event != "") {
			// $this->db->where('e.nama', $event);
		// }
		
        $query = $this->db->get();
        
        return count($query->result());
    }
	
    /**
     * This function is used to get the user listing count by criteria
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function listPendaftaran($userId, $page, $segment)
    {	 
		$this->db->select('p.id_pendaftaran, m.nim, m.nama as nama_mahasiswa, pr.nama as prodi, e.nama as event, p.cv, p.krs, p.status');
        $this->db->from('pendaftaran as p');
        $this->db->join('mahasiswa as m', 'p.nim = m.nim');
        $this->db->join('prodi as pr', 'm.id_prodi = pr.id_prodi');
        $this->db->join('detail_pendaftaran as dp', 'dp.id_pendaftaran = p.id_pendaftaran');
        $this->db->join('mapping_event as me', 'dp.id_mapping_event=me.id_mapping_event');
        $this->db->join('event as e', 'me.id_event=e.id_event');
        $this->db->where('me.createdBy', $userId);
		// pagination masih error boss.. mumet
		$this->db->limit($page, $segment);
		$this->db->group_by('p.id_pendaftaran');
		
		$this->db->where('p.status', 'proses');
		
		// if($event != "") {
			// $this->db->where('e.nama', $event);
		// }
		
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
	
	/**
     * This function is used to get the user listing count by criteria
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function listPendaftaranDitolak($userId)
    {	 
		$this->db->select('p.id_pendaftaran, m.nim, m.nama as nama_mahasiswa, pr.nama as prodi, e.nama as event, p.cv, p.krs, p.status');
        $this->db->from('pendaftaran as p');
        $this->db->join('mahasiswa as m', 'p.nim = m.nim');
        $this->db->join('prodi as pr', 'm.id_prodi = pr.id_prodi');
        $this->db->join('detail_pendaftaran as dp', 'dp.id_pendaftaran = p.id_pendaftaran');
        $this->db->join('mapping_event as me', 'dp.id_mapping_event=me.id_mapping_event');
        $this->db->join('event as e', 'me.id_event=e.id_event');
        $this->db->where('me.createdBy', $userId);
		// pagination masih error boss.. mumet
		// $this->db->limit($page, $segment);
		$this->db->group_by('p.id_pendaftaran');
		
        $this->db->where('p.status', 'ditolak');
		
		// if($event != "") {
			// $this->db->where('e.nama', $event);
		// }
		
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
	
	/**
     * This function is used to get the user listing count by criteria
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function listPendaftaranDiterima($userId)
    {	 
		$this->db->select('p.id_pendaftaran, m.nim, m.nama as nama_mahasiswa, pr.nama as prodi, e.nama as event, p.cv, p.krs, p.status');
        $this->db->from('pendaftaran as p');
        $this->db->join('mahasiswa as m', 'p.nim = m.nim');
        $this->db->join('prodi as pr', 'm.id_prodi = pr.id_prodi');
        $this->db->join('detail_pendaftaran as dp', 'dp.id_pendaftaran = p.id_pendaftaran');
        $this->db->join('mapping_event as me', 'dp.id_mapping_event=me.id_mapping_event');
        $this->db->join('event as e', 'me.id_event=e.id_event');
        $this->db->where('me.createdBy', $userId);
		// pagination masih error boss.. mumet
		// $this->db->limit($page, $segment);
		$this->db->group_by('p.id_pendaftaran');
		
		$this->db->where('p.status', 'ditolak');
		
		// if($event != "") {
			// $this->db->where('e.nama', $event);
		// }
		
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
	
	function getEvent($userId) {
		$this->db->select('nama');
		$this->db->from('event');
		$this->db->where('createdBy', $userId);
		
		$query = $this->db->get();
		
		return $query->result();
	}
	
	/**
     * This function is used to get the Count Pendaftar count by criteria
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function countPendaftar($userId)
    {     
        $this->db->select('count(p.id_pendaftaran) as jumlahPendaftar, e.nama as event');
        $this->db->from('pendaftaran as p');
        $this->db->join('detail_pendaftaran as dp', 'dp.id_pendaftaran = p.id_pendaftaran');
        $this->db->join('mapping_event as me', 'dp.id_mapping_event=me.id_mapping_event');
        $this->db->join('event as e', 'me.id_event=e.id_event');
        $this->db->join('thread as t', 'e.id_event=t.id_event');
        $this->db->where('me.createdBy', $userId);
		$this->db->where('t.status', 'aktif');
        $this->db->group_by('t.id_thread');
        
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    /**
     * This function is used to get the Count Pendaftar count by criteria
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function countHmin($userId)
    {     
        $this->db->select('e.nama as event,t.tgl_mulai as mulai, t.tgl_selesai as selesai');
        $this->db->from('thread as t');
        $this->db->join('event as e', 't.id_event=e.id_event');
        $this->db->where('t.createdBy', $userId);
        
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
	
	
}

  