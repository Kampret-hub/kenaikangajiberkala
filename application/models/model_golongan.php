<?php
class model_golongan extends CI_Model{
    
    
    
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
        return $this->db->get('golongan');
    }
    
    function get_one($id)
    {
        $param  =   array('id_golongan'=>$id);
        return $this->db->get_where('golongan',$param);
    }

    function edit()
    {
        $data=array(
                'id_golongan'=> $this->input->post('id_golongan'),
                'nama_lengkap'=> $this->input->post('nama'),
                'nrp'=> $this->input->post('nrp'),
                    );
        $this->db->where('id_golongan',$this->input->post('id_golongan'));
        $this->db->update('golongan',$data);
    }
}