<?php
class Personel_model extends CI_Model{
      public function get_personel_filter_by_flag_del(){
        
        $this->db->select();
        $this->db->from('personel');
        $this->db->where('flag_del',0);
        //$this->db->where_not_in('id',_get_current_user_id($this));
        $q = $this->db->get();
        return $q->result();
        print_r($q);
        die();
    }
   public function get_user(){
        $q = $this->db->get('users');
        return $q;
    }

    public function get_personel_by_id($id){
        $q = $this->db->query("select * from personel where  id = '".$id."' limit 1");
        return $q->row();
    }

    public function get_personel_by_id_user($id_user){
        $q = $this->db->query("select * from personel where  id_user = '".$id_user."' 
            and flag_del = 0 limit 1");
        return $q->row();
    }

    function get_kotama(){
    $hasil=$this->db->query("SELECT * FROM kotama ORDER BY id_kotama ASC ");
    return $hasil;
    }

    function get_satker(){
        $hasil=$this->db->query("SELECT * FROM satker");
        return $hasil;
    }

    
    function get_personel_by_satker($satker){
        $this->db->select();
        $this->db->from('personel');
        $this->db->where('flag_del',0);
        $this->db->where('kesatuan',$satker);
        //$this->db->where_not_in('id',_get_current_user_id($this));
        $q = $this->db->get();
        return $q->result();
    }

}
?>