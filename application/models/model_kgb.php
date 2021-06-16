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

}