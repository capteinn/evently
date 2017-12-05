<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Regist_model extends CI_Model
{
    /**
     * This function is used to add new register to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewReg($regInfo)
    {
        $this->db->trans_start();
        $this->db->insert('pendaftaran', $regInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }

    /**
     * This function is used to get the user listing count
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function getRegist()
    {
        $this->db->select('p.id_pendaftaran');
        $this->db->from('pendaftaran as p');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
}