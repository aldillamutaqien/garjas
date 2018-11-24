<?php
class Seldik_model extends CI_Model{

	

	 function begin_date_year(){

	 	$begin_date_year =  date("Y-01-01");

	 	return $begin_date_year;
	 }

	 function end_date_year(){

	 	$end_date_year =  date("Y-12-31");
	 		
	 	return $end_date_year;
	 }

	 function get_seldik(){
        $hasil=$this->db->query("SELECT nama_seldik FROM jenis_seldik");
        return $hasil;
    }

    function get_personel_diktukba_by_satker_this_year($kesatuan){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.kesatuan = '".$kesatuan."'
			and personel.flag_del = 0
			and tb_nilai.nama_seldik = 'DIKTUKBA'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->row();
    }

     function get_personel_diktukba_by_kotama_this_year($nama_kotama){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.nama_kotama = '".$nama_kotama."'
			and personel.flag_del = 0
			and tb_nilai.nama_seldik = 'DIKTUKBA'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->result();
    }


    function get_personel_diktukpa_by_satker_this_year($kesatuan){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.kesatuan = '".$kesatuan."'
			and personel.flag_del = 0
			and tb_nilai.nama_seldik = 'DIKTUKPA'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->row();
    }

    function get_personel_diktukpa_by_kotama_this_year($nama_kotama){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.nama_kotama = '".$nama_kotama."'
			and personel.flag_del = 0
			and tb_nilai.nama_seldik = 'DIKTUKPA'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->result();
    }
    
    function get_personel_diklapasatu_by_satker_this_year($kesatuan){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.kesatuan = '".$kesatuan."'
			and personel.flag_del = 0
			and tb_nilai.nama_seldik = 'DIKLAPA I'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->row();
    }

     function get_personel_diklapasatu_by_kotama_this_year($nama_kotama){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.nama_kotama = '".$nama_kotama."'
			and personel.flag_del = 0
			and tb_nilai.nama_seldik = 'DIKLAPA I'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->result();
    }

   function get_personel_diklapadua_by_satker_this_year($kesatuan){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.kesatuan = '".$kesatuan."'
			and personel.flag_del = 0
			and tb_nilai.nama_seldik = 'DIKLAPA II'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->result();
    }
    function get_personel_diklapadua_by_kotama_this_year($nama_kotama){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.nama_kotama = '".$nama_kotama."'
			and personel.flag_del = 0
			and tb_nilai.nama_seldik = 'DIKLAPA II'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->result();
    }

    function get_lulus_diktukba_by_kotama_this_year($nama_kotama){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.nama_kotama = '".$nama_kotama."'
			and personel.flag_del = 0
			and tb_nilai.nama_seldik = 'DIKTUKBA'
			and tb_nilai.keterangan = 'LULUS'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->result();
    }

     function get_lulus_diktukpa_by_kotama_this_year($nama_kotama){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.nama_kotama = '".$nama_kotama."'
			and personel.flag_del = 0
			and tb_nilai.nama_seldik = 'DIKTUKPA'
			and tb_nilai.keterangan = 'LULUS'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->result();
    }


     function get_lulus_diklapasatu_by_kotama_this_year($nama_kotama){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.nama_kotama = '".$nama_kotama."'
			and personel.flag_del = 0
			and tb_nilai.nama_seldik = 'DIKLAPA I'
			and tb_nilai.keterangan = 'LULUS'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->result();
    }

     function get_lulus_diklapadua_by_kotama_this_year($nama_kotama){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.nama_kotama = '".$nama_kotama."'
			and personel.flag_del = 0
			and tb_nilai.nama_seldik = 'DIKLAPA II'
			and tb_nilai.keterangan = 'LULUS'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->result();
    }


    function get_lulus_diktukba_by_kesatuan_this_year($kesatuan){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.kesatuan = '".$kesatuan."'
			and personel.flag_del = 0
			and tb_nilai.nama_seldik = 'DIKTUKBA'
			and tb_nilai.keterangan = 'LULUS'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->result();
    }

     function get_lulus_diktukpa_by_kesatuan_this_year($kesatuan){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.kesatuan = '".$kesatuan."'
			and personel.flag_del = 0
			and tb_nilai.nama_seldik = 'DIKTUKPA'
			and tb_nilai.keterangan = 'LULUS'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->result();
    }


     function get_lulus_diklapasatu_by_kesatuan_this_year($kesatuan){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.kesatuan = '".$kesatuan."'
			and personel.flag_del = 0
			and tb_nilai.nama_seldik = 'DIKLAPA I'
			and tb_nilai.keterangan = 'LULUS'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->result();
    }

     function get_lulus_diklapadua_by_kesatuan_this_year($kesatuan){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.kesatuan = '".$kesatuan."'
			and personel.flag_del = 0
			and tb_nilai.nama_seldik = 'DIKLAPA II'
			and tb_nilai.keterangan = 'LULUS'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->result();
    }


    function get_ms_by_kesatuan_this_year($kesatuan){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.kesatuan = '".$kesatuan."'
			and personel.flag_del = 0
			and tb_nilai.kategori = 'Memenuhi Sarat'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->result();
    }

    function get_tms_by_kesatuan_this_year($kesatuan){
        $q = $this->db->query("
        	select * from personel 
        	left join tb_nilai on personel.id = tb_nilai.id_data_personil
			where personel.kesatuan = '".$kesatuan."'
			and personel.flag_del = 0
			and tb_nilai.kategori = 'Tidak Memenuhi Sarat'
			and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
			ORDER BY tb_nilai.date_created DESC");
        return $q->result();
    }

     function get_lulus_diktukba_satker_kotama_this_year($nama_kotama){
        $q = $this->db->query("
            select * from personel 
            left join tb_nilai on personel.id = tb_nilai.id_data_personil
            where personel.nama_kotama = '".$nama_kotama."'            
            and personel.flag_del = 0
            and tb_nilai.nama_seldik = 'DIKTUKBA'
            and tb_nilai.keterangan = 'LULUS'
            and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
            GROUP BY personel.kesatuan ORDER BY tb_nilai.date_created DESC");
        return $q->result();
    }

}
?>


