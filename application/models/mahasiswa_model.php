<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
	/**
     * This function is used to get the user listing count
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function mahasiswaListingCount($userId)
    {
        $this->db->select('m.nim');
        $this->db->from('detail_pendaftaran as dp');
        $this->db->join('pendaftaran as p', 'dp.id_pendaftaran = p.id_pendaftaran');
        $this->db->join('mahasiswa as m', 'p.nim = m.nim');
        $this->db->join('mapping_event as me', 'dp.id_mapping_event = me.id_mapping_event');
        $this->db->join('event as e', 'me.id_event = e.id_event');
        $this->db->join('sie as s', 'me.id_sie = s.id_sie');
        $this->db->join('prodi as pr', 'm.id_prodi = pr.id_prodi');
        $this->db->where('me.createdBy', $userId);
		$this->db->group_by('m.nim');
        $query = $this->db->get();
            
        return count($query->result());
    }
	
    /**
     * This function is used to get the user listing count
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function listMahasiswa($userId, $page, $segment)
    {
        $this->db->select('m.nim, m.kelas, m.nama as nama_mahasiswa, m.no_telp, m.angkatan, m.jenkel, pr.nama as nama_prodi');
        $this->db->from('detail_pendaftaran as dp');
        $this->db->join('pendaftaran as p', 'dp.id_pendaftaran = p.id_pendaftaran');
        $this->db->join('mahasiswa as m', 'p.nim = m.nim');
        $this->db->join('mapping_event as me', 'dp.id_mapping_event = me.id_mapping_event');
        $this->db->join('event as e', 'me.id_event = e.id_event');
        $this->db->join('sie as s', 'me.id_sie = s.id_sie');
        $this->db->join('prodi as pr', 'm.id_prodi = pr.id_prodi');
        $this->db->where('me.createdBy', $userId);
		$this->db->group_by('m.nim');
		$this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
	
    function cekMhs($nim){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where('nim',$nim);
        $query = $this->db->get();
        return $query->result_array();
    }
	
    /**
     * This function is used to add new register to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewMhs($mhsInfo)
    {
        $this->db->trans_start();
        $this->db->insert('mahasiswa', $mhsInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }
	
	/**
     * This function is used to get the user listing count
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function listMahasiswaDetail($nim)
    {
        $this->db->select('m.nama, m.nim, e.nama as nama_event, s.nama as nama_sie, dp.status, p.createdDtm');
        $this->db->from('detail_pendaftaran as dp');
        $this->db->join('pendaftaran as p', 'dp.id_pendaftaran = p.id_pendaftaran');
        $this->db->join('mahasiswa as m', 'p.nim = m.nim');
        $this->db->join('mapping_event as me', 'dp.id_mapping_event = me.id_mapping_event');
        $this->db->join('event as e', 'me.id_event = e.id_event');
        // $this->db->join('thread as t', 't.id_event = e.id_event');
        $this->db->join('sie as s', 'me.id_sie = s.id_sie');
        $this->db->join('prodi as pr', 'm.id_prodi = pr.id_prodi');
        $this->db->where('m.nim', $nim);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
	
	/**
     * This function is used to get the user listing count
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function countEvent($nim)
    {
        $this->db->select('e.id_event');
        $this->db->from('detail_pendaftaran as dp');
        $this->db->join('pendaftaran as p', 'dp.id_pendaftaran = p.id_pendaftaran');
        $this->db->join('mahasiswa as m', 'p.nim = m.nim');
        $this->db->join('mapping_event as me', 'dp.id_mapping_event = me.id_mapping_event');
        $this->db->join('event as e', 'me.id_event = e.id_event');
        $this->db->where('m.nim', $nim);
        $this->db->where('p.status', "diterima");
		$this->db->group_by('e.id_event');
        $query = $this->db->get();
        
        return count($query->result());
    }
	
}

  