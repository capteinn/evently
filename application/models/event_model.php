<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Event_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function listEvent($userId)
    {
        $this->db->select('id_event, nama, deskripsi');
        $this->db->from('event');
        $this->db->where('createdBy', $userId);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
	
	/**
     * This function is used to add new event to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewEvent($eventInfo)
    {
        $this->db->trans_start();
        $this->db->insert('event', $eventInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
	
	/**
     * This function used to get event information by id
     * @param number $eventId : This is event id
     * @return array $result : This is event information
     */
    function eventInfo($id_event)
    {
        $this->db->select('id_event, nama, deskripsi');
        $this->db->from('event');
        $this->db->where('id_event', $id_event);
        $query = $this->db->get();
        
        return $query->result();
    }
	
	/**
     * This function is used to update the event information
     * @param array $eventInfo : This is event updated information
     * @param number $id_event : This is event id
     */
    function editEvent($eventInfo, $id_event)
    {
        $this->db->where('id_event', $id_event);
        $this->db->update('event', $eventInfo);
        
        return TRUE;
    }
	
}

  