<?php
class model_history_kgb extends CI_Model{
    
    
    
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
        return $this->db->get('history_kbg');
    }
    
    function get_one($id)
    {
        $param  =   array('id'=>$id);
        return $this->db->get_where('history_kbg',$param);
    }

    function insert()
    {
        
        if(isset($_POST['submit'])){
            // proses data
            $nrp        =  $this->input->post('nrp',true);
            $nama       =  $this->input->post('nama',true);
            $periode    =  $this->input->post('mkgg',true);
            $gaji       =  $this->input->post('gpb',true);
            $tmt        =  $this->input->post('tmtb',true);
          
           
            
            $data =  array(   
                'nrp'     => $nrp,
                'nama'    => $nama,
                'periode' => $periode, 
                'gaji'    => $gaji,
                'tmt'     => $tmt 
            );
                                    
            $this->db->insert('history_kbg',$data);
            redirect('kgb', $data);
        }
    }
    function edit()
    {
        $data=array(
                'id'         => $this->input->post('id'),
                'nrp'        => $this->input->post('nrp'),
                'nama'       => $this->input->post('nama'),
                'periode'    => $this->input->post('periode'),
                'gaji'       => $this->input->post('gaji'),
                'tmt'        => $this->input->post('tmt')
               
        );
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('history_kbg',$data);
    }
}