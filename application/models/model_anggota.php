<?php
class model_anggota extends CI_Model{
    
    
    
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
        return $this->db->get('anggota');
    }
    
    function get_one($id)
    {
        $param  =   array('id_anggota'=>$id);
        return $this->db->get_where('anggota',$param);
    }

    function edit()
    {
        $data=array(
                'id_anggota'    => $this->input->post('id_anggota'),
                'nama_lengkap'  => $this->input->post('nama'),
                'nrp'           => $this->input->post('nrp'),
                't_lahir'           => $this->input->post('t_lahir')
        );
        $this->db->where('id_anggota',$this->input->post('id_anggota'));
        $this->db->update('anggota',$data);
    }

    public function get_prov($title)
    {
      $this->db->like('nrp', $title, 'BOTH');
      $this->db->order_by('id_anggota', 'asc');
      $this->db->limit(10);
      return $this->db->get('anggota')->result();
    }
} 