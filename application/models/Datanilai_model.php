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


}
?>