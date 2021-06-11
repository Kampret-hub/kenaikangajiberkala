<?php
class model_pangkat extends CI_Model{
    
    
    
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
        return $this->db->get('pangkat');
    }
    
    function get_one($id)
    {
        $param  =   array('id_pangkat'=>$id);
        return $this->db->get_where('pangkat',$param);
    }

    function edit()
    {
        $data=array(
                'id_pangkat'=> $this->input->post('id_pangkat'),
                'nama_lengkap'=> $this->input->post('nama'),
                'nrp'=> $this->input->post('nrp'),
                    );
        $this->db->where('id_pangkat',$this->input->post('id_pangkat'));
        $this->db->update('pangkat',$data);
    }
}