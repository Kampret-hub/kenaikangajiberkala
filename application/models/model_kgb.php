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
    
    
    
    function tampildata()
    {
        return $this->db->get('t_kgb');
    }
    
   
    
    function get_one($id)
    {
        $param  =   array('id_anggota'=>$id);
        return $this->db->get_where('anggota',$param);
    }

    function edit()
    {
        $data=array(
                'id_kgb'    => $this->input->post('id_kgb'),
                'nrp'       => $this->input->post('nrp'),
                'gpl'       => $this->input->post('gpl'),
                'gpb'       => $this->input->post('gpb'),
                'mkgg'      => $this->input->post('mkgg'),
                'tmtl'      => $this->input->post('tmtl'),
                'tmtb'      => $this->input->post('tmtb'),
                'nosk'      => $this->input->post('nosk'),
                'kgbb'      => $this->input->post('kgbb')
        );
        $this->db->where('id_kgb',$this->input->post('id_kgb'));
        $this->db->update('t_kgb',$data);
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

}