<?php
class model_gaji_pokok extends CI_Model{
    
    
    
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
        return $this->db->get('gaji_pokok');
    }
    
    function get_one($id)
    {
        $param  =   array('id_gaji_pokok'=>$id);
        return $this->db->get_where('gaji_pokok',$param);
    }

    function edit()
    {
        $data=array(
                'id_gaji_pokok'=> $this->input->post('id_gaji_pokok'),
                'nama_lengkap'=> $this->input->post('nama'),
                'nrp'=> $this->input->post('nrp'),
                    );
        $this->db->where('id_gaji_pokok',$this->input->post('id_gaji_pokok'));
        $this->db->update('gaji_pokok',$data);
    }
}