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
    
    function get_one($nrp)
    {
        $param  =   array('nrp'=>$nrp);
        $result =  $this->db->where($param)
                            ->order_by('periode')
                           ->get('history_kbg');
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
        $this->db->update('history_kgb',$data);
    }
}