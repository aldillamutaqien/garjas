<?php
class Satker_model extends CI_Model{
	 function begin_date_year(){

	 	$begin_date_year =  date("Y-01-01");

	 	return $begin_date_year;
	 }

	 function end_date_year(){

	 	$end_date_year =  date("Y-12-31");
	 		
	 	return $end_date_year;
	 }


	 function get_satker_by_id($id_satker){
        $hasil=$this->db->query("SELECT nama_satker FROM satker WHERE id_satker = '$id_satker' LIMIT 1");
        return $hasil;
    }

     function get_satker_by_kotama($nama_kotama){
        $q = $this->db->query("
        	select personel.kesatuan as kesatuan,satker.id_satker as id_satker FROM personel
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
        	left join satker on personel.kesatuan = satker.nama_satker
			where personel.nama_kotama = '".$nama_kotama."'
			and personel.flag_del = 0
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			GROUP BY personel.kesatuan ORDER BY satker.id_satker ASC
			");
        return $q->result();
    }

}
?>