<?php
class Seldik_model extends CI_Model{

	 function get_seldik(){
        $hasil=$this->db->query("SELECT nama_seldik FROM jenis_seldik");
        return $hasil;
    }

    

}
?>