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
    function getMape()
    {
        $this->db->select('me.id_mapping_event');
        $this->db->from('mapping_event as me');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
}