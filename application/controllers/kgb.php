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
            $ket          =  $this->input->post('ket',true);
            $nomor_kgb          =  $this->input->post('nomor_kgb',true);
            $nrp           =  $this->input->post('nrp',true);
            $nama          =  $this->input->post('nama',true);
            $kesatuan          =  $this->input->post('kesatuan',true);
            $gpl           =  $this->input->post('gpl',true);
            $gpb           =  $this->input->post('gpb',true);
            $mkgg1          =  $this->input->post('mkgg1',true); 
            $mkgg2          =  $this->input->post('mkgg2',true); 
            $mkg1          =  $this->input->post('mkg1',true); 
            $mkg2          =  $this->input->post('mkg2',true);
            $tmtl          =  $this->input->post('tmtl',true);
            $tmtb          =  $this->input->post('tmtb',true);
            $kgbb          =  $this->input->post('kgbb',true);
            $kgbb_thn          =  $this->input->post('kgbb_thn',true);
            $kgbb_bln          =  $this->input->post('kgbb_bln',true);
          

            $edit_kgb = array(
                'ket'      => $ket,
                'nomor_kgb'      => $nomor_kgb,
                'nrp'       => $nrp,
                'nama'      => $nama,
                'kesatuan'      => $kesatuan,
                'gpl'       => $gpl,
                'gpb'       => $gpb,
                'mkgg1'      => $mkgg1,
                'mkgg2'      => $mkgg2,
                'mkg1'      => $mkg1,
                'mkg2'      => $mkg2,
                'tmtl'      => $tmtl,
                'tmtb'      => $tmtb,
                'kgbb'      => $kgbb,
                'kgbb_thn'      => $kgbb_thn,
                'kgbb_bln'      => $kgbb_bln
            );

            $insert_history =  array(   
                'nrp'     => $nrp,
                'nama'    => $nama,
                'mkgg1'      => $mkgg1,
                'mkgg2'      => $mkgg2,
                'mkg1'      => $mkg1,
                'mkg2'      => $mkg2,
                'gaji'    => $gpb,
                'tmt'     => $tmtb 
            );

             // proses insert
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

    function get_autocomplete()
  {
    if (isset($_GET['term'])) {
      $result = $this->model_kgb->get_prov($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
        $result_array[] = array(
            'label'=>$row->kode_gapok,
            'gaji_pokok'=>strtoupper($row->gaji)
          );
        echo json_encode($result_array);
      }
    }
  }

}