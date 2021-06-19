<?php
class model_login extends CI_Model{
    
    function validate($email,$password){
      //validasi data pada databse user, untuk mengindentifikasi role id ny
    $this->db->where('nrp',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('user',1);
    return $result;
    
  }    
}