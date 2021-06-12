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
        $param  =   array('id_kgb'=>$id);
        return $this->db->get_where('t_kgb',$param);
    }

    function edit()
    {
        $data=array(
                'id_anggota'=> $this->input->post('id_anggota'),
                'nama_lengkap'=> $this->input->post('nama'),
                'nrp'=> $this->input->post('nrp'),
                    );
        $this->db->where('id_anggota',$this->input->post('id_anggota'));
        $this->db->update('anggota',$data);
    }
}