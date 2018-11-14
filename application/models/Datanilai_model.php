<?php
class Datanilai_model extends CI_Model{
      public function get_datanilai_filter_by_flag_del(){
        
        $this->db->select('personel.id as id_data_personil,personel.nama as nama, personel.pangkat as pangkat,personel.korps as korps,personel.nrp as nrp,personel.jenis_kelamin as jenis_kelamin,personel.jabatan as jabatan,personel.kesatuan as kesatuan,personel.matra as matra, personel.tanggal_lahir as tanggal_lahir,tb_nilai.id as id_nilai,tb_nilai.date_created as tgl_pelaksanaan');
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

    public function get_nilai_shuttle_run_by_id($tabel,$kelompok_umur,$shuttle_run){
         $q = $this->db->query("select $kelompok_umur as nilai_shuttle_run from $tabel where  shuttle_run = '".$shuttle_run."'  limit 1");
        return $q->row();
    }


}
?>