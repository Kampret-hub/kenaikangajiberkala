<?php
class model_kgb extends CI_Model{
    
    
    
    function login($username,$password)
    {
        $chek=  $this->db->get_where('user',array('username'=>$username,'password'=>  md5($password)));
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
    
    // model baru di tambahkan 17-06-2021 cara biar 1 file di pakai banyak controller
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // untuk mendapatkan 1 data yang akan di edit
    public function find_data($where, $table){
        return $this->db->get_where($table,$where);
    }
    // untuk update data
    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table, $where);
    }

     public function get_prov($title)
    {
      $this->db->like('kode_gapok', $title, 'BOTH');
      $this->db->order_by('kode_gapok', 'asc');
      $this->db->limit(10);
      return $this->db->get('gaji_pokok')->result();
    }

   
   // ini buat apa kalo gak di pake hapus aja
    public function history($id)
    {
        $this->db->select("*");
        $this->db->where("nrp", $id);
        return $this->db->get('history_kbg')->row();
    }
}