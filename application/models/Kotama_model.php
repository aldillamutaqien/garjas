<?php
class Kotama_model extends CI_Model{

	 function get_kotama_by_id($id_kotama){
        $hasil=$this->db->query("SELECT nama_kotama FROM kotama WHERE id_kotama = '$id_kotama'");
        return $hasil;
    }

}
?>