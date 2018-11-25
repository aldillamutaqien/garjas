<?php
class Datanilai_model extends CI_Model{

     function begin_date_year(){

        $begin_date_year =  date("Y-01-01");

        return $begin_date_year;
     }

     function end_date_year(){

        $end_date_year =  date("Y-12-31");
            
        return $end_date_year;
     }


    function begin_date_last_year(){

        $tahunlalu = date('Y', strtotime('-1 year')); 
        $begin_date_last_year =  date($tahunlalu."-01-01");

        return $begin_date_last_year;
     }

     function end_date_last_year(){
        $tahunlalu = date('Y', strtotime('-1 year')); 
        $end_date_last_year =  date($tahunlalu."-12-31");
            
        return $end_date_last_year;
     }



      public function get_datanilai_filter_by_flag_del(){
        
        $this->db->select('personel.id as id_data_personil,personel.nama as nama, personel.pangkat as pangkat,personel.korps as korps,personel.nrp as nrp,personel.jenis_kelamin as jenis_kelamin,personel.jabatan as jabatan,personel.kesatuan as kesatuan,personel.matra as matra, personel.tanggal_lahir as tanggal_lahir,tb_nilai.id as id_nilai,tb_nilai.date_created as tgl_pelaksanaan,tb_nilai.nilai as nilai,tb_nilai.keterangan as keterangan,personel.nama_kotama as nama_kotama,tb_nilai.nama_seldik as nama_seldik');
        $this->db->from('personel');
        $this->db->join('tb_nilai','personel.id = tb_nilai.id_data_personil');
        $this->db->where('tb_nilai.flag_del',0);
         //$this->db->where_not_in('id',_get_current_user_id($this));
        $q = $this->db->get();
        return $q->result();

       
    }
   public function get_user(){
        $q = $this->db->get('users');
        return $q;
    }

    public function get_datanilai_by_id($id){
       

        $this->db->select('');
        $this->db->from('personel');
        $this->db->join('tb_nilai','personel.id = tb_nilai.id_data_personil');
        $this->db->where('tb_nilai.id',$id);
         //$this->db->where_not_in('id',_get_current_user_id($this));
        $q = $this->db->get();
        return $q->result();
    }

    public function get_nilai_pull_up_by_id($tabel,$kelompok_umur,$pull_up){
        $query = "select $kelompok_umur as nilai_pull_up from $tabel where  pull_up = '".$pull_up."' limit 1";
         $q = $this->db->query("select $kelompok_umur as nilai_pull_up from $tabel where  pull_up = '".$pull_up."' limit 1");

        return $q->row();
    }

     public function get_nilai_sit_up_by_id($tabel,$kelompok_umur,$sit_up){
         $q = $this->db->query("select $kelompok_umur as nilai_sit_up from $tabel where  sit_up = '".$sit_up."' limit 1");
        return $q->row();
    }

     public function get_nilai_push_up_by_id($tabel,$kelompok_umur,$push_up){
         $q = $this->db->query("select $kelompok_umur as nilai_push_up from $tabel where  push_up = '".$push_up."' limit 1");
        return $q->row();
    }
    public function get_nilai_lari_by_id($tabel_lari,$kelompok_umur,$lari){
         $q = $this->db->query("select $kelompok_umur as nilai_lari from $tabel_lari where  waktu_lari >= '".$lari."' ORDER BY id_nilai ASC limit 1");
        return $q->row();
    }

     public function get_nilai_renang_by_id($tabel_renang,$kelompok_umur,$renang){
        if($renang < "00:00:39" && $tabel_renang == "ren_mil_das_pria" ){
            $q = $this->db->query("select $kelompok_umur as nilai_renang from $tabel_renang where  waktu_renang = '00:00:39' ORDER BY id_renang ASC limit 1");
        } else if($renang < "00:00:59" && $tabel_renang == "ren_mil_das_wan" ){
            $q = $this->db->query("select $kelompok_umur as nilai_renang from $tabel_renang where  waktu_renang = '00:00:59' ORDER BY id_renang ASC limit 1");
        } else if($renang > "00:03:01" && $tabel_renang == "ren_mil_das_wan" ){
            $q = $this->db->query("select $kelompok_umur as nilai_renang from $tabel_renang where  waktu_renang = '00:03:01' ORDER BY id_renang ASC limit 1");
        } else if($renang > "00:02:49" && $tabel_renang == "ren_mil_das_pria" ){
            $q = $this->db->query("select $kelompok_umur as nilai_renang from $tabel_renang where  waktu_renang = '00:02:49' ORDER BY id_renang ASC limit 1");
        } else {
           $q = $this->db->query("select $kelompok_umur as nilai_renang from $tabel_renang where  waktu_renang >= '".$renang."' ORDER BY id_renang ASC limit 1");  
        }

        
        return $q->row();
    }

    public function get_nilai_shuttle_run_by_id($tabel,$kelompok_umur,$shuttle_run){
         $q = $this->db->query("select $kelompok_umur as nilai_shuttle_run from $tabel where  shuttle_run = '".$shuttle_run."'  limit 1");
        return $q->row();
    }

    public function get_datanilai_filter_by_flag_del_and_by_id_personel($id_personel){
        
        $this->db->select('personel.id as id_data_personil,personel.nama as nama, personel.pangkat as pangkat,personel.korps as korps,personel.nrp as nrp,personel.jenis_kelamin as jenis_kelamin,personel.jabatan as jabatan,personel.kesatuan as kesatuan,personel.matra as matra, personel.tanggal_lahir as tanggal_lahir,tb_nilai.id as id_nilai,tb_nilai.date_created as tgl_pelaksanaan');
        $this->db->from('personel');
        $this->db->join('tb_nilai','personel.id = tb_nilai.id_data_personil');
        $this->db->where('tb_nilai.flag_del',0);
        $this->db->where('tb_nilai.id_data_personil',$id_personel);
         //$this->db->where_not_in('id',_get_current_user_id($this));
        $q = $this->db->get();
        return $q->result();

       
    }

     function get_jumlah_by_seldik($where,$table){
        // $this->db->select('COUNT(nama_seldik) as jumlah');
        // $this->db->from('tb_nilai');
        // $this->db->where('nama_seldik',$where);
        // $total = $this->db->count();
       

        $total = $this->db->get_where($table,$where)->count();
 print_r($total);die();


        // $hasil=$this->db->query("SELECT COUNT(*) as jumlah FROM tb_nilai WHERE nama_seldik='$seldik' ");
        // print_r($hasil);die();
        return $hasil;
    }

    public function get_datanilai_filter_by_flag_del_and_kesatuan($kesatuan){
        
        $q = $this->db->query("
            select * from personel 
            left join tb_nilai on personel.id = tb_nilai.id_data_personil
            where personel.kesatuan = '".$kesatuan."'
            and personel.flag_del = 0
            and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
            ORDER BY tb_nilai.date_created DESC");
        return $q->result();

       
    }
    public function get_datanilai_filter_by_flag_del_and_kotama($nama_kotama){
        
        $this->db->select('personel.id as id_data_personil,personel.nama as nama, personel.pangkat as pangkat,personel.korps as korps,personel.nrp as nrp,personel.jenis_kelamin as jenis_kelamin,personel.jabatan as jabatan,personel.nama_kotama as nama_kotama,personel.matra as matra, personel.tanggal_lahir as tanggal_lahir,tb_nilai.id as id_nilai,tb_nilai.date_created as tgl_pelaksanaan');
        $this->db->from('personel');
        $this->db->join('tb_nilai','personel.id = tb_nilai.id_data_personil');
        $this->db->where('tb_nilai.flag_del',0);
        $this->db->where('personel.nama_kotama',$nama_kotama);
         //$this->db->where_not_in('id',_get_current_user_id($this));
        $q = $this->db->get();
        return $q->result();

       
    }


    function get_datanilai_filter_by_flag_del_and_kesatuan_and_lulus($kesatuan){
        
        $q = $this->db->query("
            select * from personel 
            left join tb_nilai on personel.id = tb_nilai.id_data_personil
            where personel.kesatuan = '".$kesatuan."'
            and personel.flag_del = 0
            and tb_nilai.keterangan = 'Lulus'
            and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
            ORDER BY tb_nilai.date_created DESC");
        return $q->result();

       
    }


    function get_datanilai_filter_by_flag_del_and_kesatuan_and_tdklulus($kesatuan){
        
        $q = $this->db->query("
            select * from personel 
            left join tb_nilai on personel.id = tb_nilai.id_data_personil
            where personel.kesatuan = '".$kesatuan."'
            and personel.flag_del = 0
            and tb_nilai.keterangan = 'Tidak Lulus'
            and tb_nilai.date_created BETWEEN '".$this->begin_date_year()."' and '".$this->end_date_year()."'
            ORDER BY tb_nilai.date_created DESC");
        return $q->result();

       
    }



    function get_datanilai_filter_by_flag_del_and_kesatuan_and_lulus_last_year($kesatuan){
        
        $q = $this->db->query("
            select * from personel 
            left join tb_nilai on personel.id = tb_nilai.id_data_personil
            where personel.kesatuan = '".$kesatuan."'
            and personel.flag_del = 0
            and tb_nilai.keterangan = 'Lulus'
            and tb_nilai.date_created BETWEEN '".$this->begin_date_last_year()."' and '".$this->end_date_last_year()."'
            ORDER BY tb_nilai.date_created DESC");
        return $q->result();

       
    }


    function get_datanilai_filter_by_flag_del_and_kesatuan_and_tdklulus_last_year($kesatuan){
        
        $q = $this->db->query("
            select * from personel 
            left join tb_nilai on personel.id = tb_nilai.id_data_personil
            where personel.kesatuan = '".$kesatuan."'
            and personel.flag_del = 0
            and tb_nilai.keterangan = 'Tidak Lulus'
            and tb_nilai.date_created BETWEEN '".$this->begin_date_last_year()."' and '".$this->end_date_last_year()."'
            ORDER BY tb_nilai.date_created DESC");
        return $q->result();

       
    }

    public function get_datanilai_filter_by_flag_del_and_kesatuan_last_year($kesatuan){
        
        $q = $this->db->query("
            select * from personel 
            left join tb_nilai on personel.id = tb_nilai.id_data_personil
            where personel.kesatuan = '".$kesatuan."'
            and personel.flag_del = 0
            and tb_nilai.date_created BETWEEN '".$this->begin_date_last_year()."' and '".$this->end_date_last_year()."'
            ORDER BY tb_nilai.date_created DESC");
        return $q->result();

       
    }
	
	public function get_data_pers_tidak_seldik_filter_by_flag_del($id){
        
        $this->db->select();
        $this->db->from('personel');
        $this->db->where('id',$id);
        $this->db->where('flag_del',0);
         //$this->db->where_not_in('id',_get_current_user_id($this));
        $q = $this->db->get();
        return $q->result();

	}
	
	function cek_nilai_by_id($id){
		return $this->db->query("SELECT * FROM tb_nilai WHERE id_data_personil = '$id' ");
	}

}
?>