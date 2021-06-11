<?php
class model_user extends CI_Model{
    
    
    
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
        
        $this->db->order_by('user_id','ASC');
        $query = $this->db->get('user');
        return $query;
        //return $this->db->get('user');
    }
    
    function get_one($id)
    {
        $param  =   array('user_id'=>$id);
        return $this->db->get_where('user',$param);
    }
}