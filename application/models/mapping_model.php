<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Mapping_model extends CI_Model
{
	/**
     * This function is used to get the user listing count
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function mappingListingCount($userId)
    {
        $this->db->select('m.id_mapping_event, m.id_event, m.id_sie, m.deskripsi, e.nama as nama_event, s.nama as nama_sie');
        $this->db->from('mapping_event as m');
        $this->db->join('event as e', 'm.id_event = e.id_event');
        $this->db->join('sie as s', 'm.id_sie = s.id_sie');
        $this->db->where('m.createdBy', $userId);
        $query = $this->db->get();
        
        return count($query->result());
    }
	
    /**
     * This function is used to get the user listing count
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function listMapping($userId, $page, $segment)
    {
        $this->db->select('m.id_mapping_event, m.id_event, m.id_sie, m.deskripsi, e.nama as nama_event, s.nama as nama_sie');
        $this->db->from('mapping_event as m');
        $this->db->join('event as e', 'm.id_event = e.id_event');
        $this->db->join('sie as s', 'm.id_sie = s.id_sie');
        $this->db->where('m.createdBy', $userId);
		$this->db->limit($page, $segment);
		$this->db->order_by('m.id_event');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
	
	/**
     * This function is used to add new mapping to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewMapping($mappingInfo)
    {
        $this->db->trans_start();
        $this->db->insert('mapping_event', $mappingInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
	
	/**
     * This function used to get mapping information by id
     * @param number $mappingId : This is mapping id
     * @return array $result : This is mapping information
     */
    function mappingInfo($id_mapping)
    {
        $this->db->select('id_mapping_event, id_event, id_sie, deskripsi');
        $this->db->from('mapping_event');
        $this->db->where('id_mapping_event', $id_mapping);
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
     * This function is used to get the sie listing
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function sieInfo($userId)
    {
        $this->db->select('id_sie, nama, deskripsi');
        $this->db->from('sie as s');
        $this->db->where('createdBy', $userId);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
	
	/**
     * This function is used to update the mapping information
     * @param array $mappingInfo : This is mapping updated information
     * @param number $id_mapping : This is mapping id
     */
    function editMapping($mappingInfo, $id_mapping)
    {
        $this->db->where('id_mapping_event', $id_mapping);
        $this->db->update('mapping_event', $mappingInfo);
        
        return TRUE;
    }
	
}

  