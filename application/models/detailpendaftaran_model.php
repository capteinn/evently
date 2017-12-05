<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Detailpendaftaran_model extends CI_Model
{
    /**
     * This function is used to add new register to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewDp($dpInfo)
    {
        $this->db->trans_start();
        $this->db->insert('detail_pendaftaran', $dpInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }
}