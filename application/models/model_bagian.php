<?php
class model_bagian extends CI_Model{
    
    
    
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
        return $this->db->get('bagian');
    }
    
    function get_one($id)
    {
        $param  =   array('id_bagian'=>$id);
        return $this->db->get_where('bagian',$param);
    }
}