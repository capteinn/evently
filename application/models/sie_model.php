<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Sie_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $userId : mengambil session user/panitia yang login saat ini
     * @return array $result : This is result
     */
    function listSie($userId)
    {
        $this->db->select('id_sie, nama, deskripsi');
        $this->db->from('sie');
        $this->db->where('createdBy', $userId);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
	
}

  