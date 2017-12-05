<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Mape_model extends CI_Model
{
    /**
     * This function is used to add new register to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewMape($mapeInfo)
    {
        $this->db->trans_start();
        $this->db->insert('mapping_event', $mapeInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }

    /**
     * This function is used to get the user listing count
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function getMape($eventId,$sieId)
    {
        $this->db->select('me.id_mapping_event,me.id_sie,s.id_sie,s.nama');
        $this->db->from('mapping_event as me');
        $this->db->join('event as e','me.id_event=e.id_event');
        $this->db->join('sie as s','me.id_sie=s.id_sie');
        $this->db->where('me.id_event', $eventId);
        $this->db->where('s.id_sie', $sieId);
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
        $this->db->from('sie');
        $this->db->where('createdBy', $userId);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
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
     * This function is used to get the event listing
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function mapeventInfo($userId)
    {
        $this->db->select('me.id_mapping_event, me.id_sie, s.nama');
        $this->db->from('mapping_event as me');
        $this->db->join('event as e','me.id_event=e.id_event');
        $this->db->join('sie as s','s.id_sie=me.id_sie');
        $this->db->where('me.id_event', $userId);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
}