<?php
class Dataadmin_model extends CI_Model{
      public function get_dataadmin_filter_by_flag_del(){
        
        $this->db->select();
        $this->db->from('dataadmin');
        $this->db->join('users','dataadmin.id_user = users.user_id');
        $this->db->where('dataadmin.flag_del',0);
        //$this->db->where_not_in('id',_get_current_user_id($this));
        $q = $this->db->get();
        return $q->result();
       
    }
   public function get_user(){
        $q = $this->db->get('users');
        return $q;
    }

    public function get_personel_by_id($id){
        $q = $this->db->query("select * from personel where  id = '".$id."' limit 1");
        return $q->row();
    }


}
?>