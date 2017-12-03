<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Thread_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function listThread($userId)
    {
        $this->db->select('t.id_thread, t.judul, t.poster, t.tgl_mulai, t.tgl_selesai, t.deskripsi, e.nama');
        $this->db->from('thread as t');
        $this->db->join('event as e', 't.id_event = e.id_event');
        $this->db->where('t.createdBy', $userId);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
	
	/**
     * This function is used to add new thread to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewThread($threadInfo)
    {
        $this->db->trans_start();
        $this->db->insert('thread', $threadInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
	
	/**
     * This function used to get thread information by id
     * @param number $threadId : This is thread id
     * @return array $result : This is thread information
     */
    function threadInfo($id_thread)
    {
        $this->db->select('t.id_thread, t.judul, t.poster, t.tgl_mulai, t.tgl_selesai, t.deskripsi, t.id_event');
        $this->db->from('thread as t');
        $this->db->join('event as e', 't.id_event = e.id_event');
        $this->db->where('t.id_thread', $id_thread);
        $query = $this->db->get();
        
        return $query->result();
    }
	
	/**
     * This function is used to get the event listing
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function eventInfo($userId)
    {
        $this->db->select('id_event, nama, deskripsi');
        $this->db->from('event');
        $this->db->where('createdBy', $userId);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
	
	/**
     * This function is used to update the thread information
     * @param array $threadInfo : This is thread updated information
     * @param number $id_thread : This is thread id
     */
    function editThread($threadInfo, $id_thread)
    {
        $this->db->where('id_thread', $id_thread);
        $this->db->update('thread', $threadInfo);
        
        return TRUE;
    }
	
}

  