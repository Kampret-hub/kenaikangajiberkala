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

    public function insert_data($data, $table, $id)
    {
        $this->db->insert($table, $data);
    }

    public function insert($data, $table){
        $insert = $this->db->insert_batch($table, $data);
        if($insert){
            return true;
        }
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

    public function kontak()
    {
        $this->db->select('bagian');
        $this->db->from('anggota');
        $this->db->like("bagian","BAGSUMDA");
        return $this->db->get()->result_array();
    }

    public function report($nrp){
       $query = $this->db->query('select a.nrp , ket, nomor_kgb, nama_lengkap, kesatuan, tmpt_lahir ,t_lahir, pangkat, golongan, gpl, gpb, mkgg1, mkgg2, mkg1, mkg2, tmtl, tmtb,  kep_pangkat, no_tgl, kgbb, kgbb_thn, kgbb_bln, diterapkan, padatanggal, d_oleh, sebagai, nrp_p from anggota a join t_kgb b ON a.nrp = b.nrp WHERE a.nrp ='.$nrp)->row_array();
        return $query;
    }

     public function get_prov($title)
    {
      $this->db->like('kode_gapok', $title, 'BOTH');
      $this->db->order_by('kode_gapok', 'asc');
      $this->db->limit(10);
      return $this->db->get('gaji_pokok')->result();
    }

    public function get_nama($title)
    {
      $this->db->like('nama_lengkap', $title, 'BOTH');
      $this->db->order_by('nama_lengkap', 'asc');
      $this->db->limit(10);
      return $this->db->get('anggota')->result();
    }
} 