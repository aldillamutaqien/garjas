<?php
class Kotama_model extends CI_Model{

	 function get_kotama_by_id($id_kotama){
        $hasil=$this->db->query("SELECT nama_kotama FROM kotama WHERE id_kotama = '$id_kotama'");
        return $hasil;
    }

     function get_kotama_by_id_user($id_user){
        $hasil=$this->db->query("SELECT nama_kotama FROM personel WHERE id_user = '$id_user' LIMIT 1");
        
        return $hasil->row();

    }

}
?>