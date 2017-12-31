<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Beranda_model extends CI_Model
{
    /**
     * This function is used to get the Thread listing
     * @return array $result : This is result
     */
    function listThread()
    {
        $this->db->select('t.id_thread, t.judul, t.poster, t.tgl_mulai, t.tgl_selesai, t.deskripsi, e.nama, me.id_mapping_event, e.id_event, s.nama as nama_sie');
        $this->db->from('thread as t');
        $this->db->join('event as e', 't.id_event = e.id_event');
        $this->db->join('mapping_event as me', 'me.id_event = e.id_event');
        $this->db->join('sie as s', 'me.id_sie = s.id_sie');
		$this->db->where('status', 'aktif');
		$this->db->group_by('t.id_thread');
        $this->db->order_by('t.id_thread', 'desc');
		$this->db->limit(6);
        $query = $this->db->get();
		
        $result = $query->result();        
        return $result;
    }
	
	/**
     * This function is used to get the Thread listing Deadline
     * @return array $result : This is result
     */
    function listThreadDeadline()
    {
        $this->db->select('t.id_thread, t.judul, t.poster, t.tgl_mulai, t.tgl_selesai, t.deskripsi, e.nama, me.id_mapping_event, e.id_event, s.nama as nama_sie');
        $this->db->from('thread as t');
        $this->db->join('event as e', 't.id_event = e.id_event');
        $this->db->join('mapping_event as me', 'me.id_event = e.id_event');
        $this->db->join('sie as s', 'me.id_sie = s.id_sie');
		$this->db->where('status', 'aktif');
		$this->db->order_by('tgl_selesai', 'desc');
		$this->db->group_by('t.id_thread');
		$this->db->limit(6);
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
        $this->db->select('t.id_thread, t.judul, t.poster, t.tgl_mulai, t.tgl_selesai, t.deskripsi, e.nama, me.id_mapping_event, e.id_event, s.nama as nama_sie');
        $this->db->from('thread as t');
        $this->db->join('event as e', 't.id_event = e.id_event');
        $this->db->join('mapping_event as me', 'me.id_event = e.id_event');
        $this->db->join('sie as s', 'me.id_sie = s.id_sie');
		$this->db->where('id_thread', $id_thread);
        $query = $this->db->get();
        
        return $query->result();
    }
	
	/**
     * This function is used to get the Sie listing
     * @param string $id_event : mengambil id_event yang dimasukkan
     * @return array $result : This is result
     */
    function sieInfo($id_event)
    {
        $this->db->select('s.nama');
        $this->db->from('mapping_event as me', 'me.id_event = e.id_event');
        $this->db->join('event as e', 'me.id_event = e.id_event');
        $this->db->join('sie as s', 'me.id_sie = s.id_sie');
		$this->db->where('e.id_event', $id_event);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
	
}

  