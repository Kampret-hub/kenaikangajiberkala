<?php
class kgb extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_kgb');
        if ($this->session->userdata('username')=="") {
      redirect('auth');
        }
    } 
    
    function index()
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        
		$data['title'] = 'Data KGB';
        $data['record']=  $this->model_kgb->get_data('t_kgb');
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template/template_admin','kgb/lihat_data',$data);
    }
        
    function edit()
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        
        if(isset($_POST['submit'])){
            $id_kgb        =  $this->input->post('id_kgb',true);
            $nrp           =  $this->input->post('nrp',true);
            $nama          =  $this->input->post('nama',true);
            $gpl           =  $this->input->post('gpl',true);
            $gpb           =  $this->input->post('gpb',true);
            $mkgg          =  $this->input->post('mkgg',true); 
            $tmtl          =  $this->input->post('tmtl',true);
            $tmtb          =  $this->input->post('tmtb',true);
            $nosk          =  $this->input->post('nosk',true);
            $kgbb          =  $this->input->post('kgbb',true);
          
          


            $edit_kgb = array(
                'nrp'       => $nrp,
                'nama'      => $nama,
                'gpl'       => $gpl,
                'gpb'       => $gpb,
                'mkgg'      => $mkgg,
                'tmtl'      => $tmtl,
                'tmtb'      => $tmtb,
                'nosk'      => $nosk,
                'kgbb'      => $kgbb
            );

            $insert_history =  array(   
                'nrp'     => $nrp,
                'nama'    => $nama,
                'periode' => $mkgg, 
                'gaji'    => $gpb,
                'tmt'     => $tmtb 
            );

             // proses kategori
            $where = array ('id_kgb' => $id_kgb);
            $this->model_kgb->update_data('t_kgb', $edit_kgb, $where);
             $this->model_kgb->insert_data($insert_history, 'history_kbg');

             echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Simpan</div>');
             redirect('kgb');
        }
        else{
            $id=  $this->uri->segment(3);
            $param  =   array('id_kgb'=>$id);
            // $data['record']=  $this->model_kgb->get_one($id)->row_array();
            $data['record']= $this->model_kgb->find_data($param, 't_kgb')->row_array();
            $this->template->load('template/template_admin','kgb/form_edit',$data);
        }
    }

}