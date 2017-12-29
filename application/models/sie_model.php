<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Sie_model extends CI_Model
{
	/**
     * This function is used to get the user listing count
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function sieListingCount($userId)
    {
        $this->db->select('id_sie, nama, deskripsi');
        $this->db->from('sie');
        $this->db->where('createdBy', $userId);
        $query = $this->db->get();
        
        return count($query->result());
    }
	
    /**
     * This function is used to get the user listing count
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function listSie($userId, $page, $segment)
    {
        $this->db->select('id_sie, nama, deskripsi');
        $this->db->from('sie');
        $this->db->where('createdBy', $userId);
		$this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
	
	/**
     * This function is used to add new sie to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewSie($sieInfo)
    {
        $this->db->trans_start();
        $this->db->insert('sie', $sieInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
	
	/**
     * This function used to get sie information by id
     * @param number $sieId : This is sie id
     * @return array $result : This is sie information
     */
    function sieInfo($id_sie)
    {
        $this->db->select('id_sie, nama, deskripsi');
        $this->db->from('sie');
        $this->db->where('id_sie', $id_sie);
        $query = $this->db->get();
        
        return $query->result();
    }
	
	/**
     * This function is used to update the sie information
     * @param array $sieInfo : This is sie updated information
     * @param number $id_sie : This is sie id
     */
    function editSie($sieInfo, $id_sie)
    {
        $this->db->where('id_sie', $id_sie);
        $this->db->update('sie', $sieInfo);
        
        return TRUE;
    }
	
}

  