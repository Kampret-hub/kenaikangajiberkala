<?php
class model_jabatan extends CI_Model{
    
    
    
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
        return $this->db->get('jabatan');
    }
    
    function get_one($id)
    {
        $param  =   array('id_jabatan'=>$id);
        return $this->db->get_where('jabatan',$param);
    }

    function edit()
    {
        $data=array(
                'id_jabatan'=> $this->input->post('id_jabatan'),
                'nama_lengkap'=> $this->input->post('nama'),
                'nrp'=> $this->input->post('nrp'),
                    );
        $this->db->where('id_jabatan',$this->input->post('id_jabatan'));
        $this->db->update('jabatan',$data);
    }
    
}