<?php
class Satker_model extends CI_Model{

	 function get_satker_by_id($id_satker){
        $hasil=$this->db->query("SELECT nama_satker FROM satker WHERE id_satker = '$id_satker' LIMIT 1");
        return $hasil;
    }

}
?>