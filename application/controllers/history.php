<?php
class History extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_kgb');
        if ($this->session->userdata('username')=="") {
      redirect('auth');
        }
    } 
    
    function index($id)
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 
        
        $data['title'] = 'History KGB';

        $param  =   array('nrp'=>$id);
        $data['record']= $this->model_kgb->find_data($param, 'history_kgb')->result();
        // $data['record1']= $this->db->query('select distinct nrp, nama from history_kgb where nrp = '.$id);
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template/template_admin','history_kgb/lihat_data',$data);
    }
    
    function edit()
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 
        
        $data['title'] = 'Edit History KGB';
        if(isset($_POST['submit'])){
            $id         =  $this->input->post('id',true);
            $ket            =  $this->input->post('ket',true);
            $nomor_kgb      =  $this->input->post('nomor_kgb',true);
            $nrp            =  $this->input->post('nrp',true);
            $nama           =  $this->input->post('nama',true);
            $kesatuan       =  $this->input->post('kesatuan',true);
            $gpl            =  $this->input->post('gpl',true);
            $gpb            =  $this->input->post('gpb',true);
            $mkgg1          =  $this->input->post('mkgg1',true);  
            $mkgg2          =  $this->input->post('mkgg2',true); 
            $mkg1           =  $this->input->post('mkg1',true); 
            $mkg2           =  $this->input->post('mkg2',true);
            $tmtl           =  $this->input->post('tmtl',true);
            $tmtb           =  $this->input->post('tmtb',true);
            $kep_pangkat    =  $this->input->post('kep_pangkat',true);
            $no_tgl         =  $this->input->post('no_tgl',true);
            $kgbb           =  $this->input->post('kgbb',true);
            $kgbb_thn       =  $this->input->post('kgbb_thn',true);
            $kgbb_bln       =  $this->input->post('kgbb_bln',true);
            $diterapkan     =  $this->input->post('diterapkan',true);
            $padatanggal    =  $this->input->post('padatanggal',true);
            $d_oleh         =  $this->input->post('d_oleh',true);
            $sebagai        =  $this->input->post('sebagai',true);
            $nrp_p          =  $this->input->post('nrp_p',true);

            $data =  array(   
                'ket'           => $ket,
                'nomor_kgb'     => $nomor_kgb,
                'nrp'           => $nrp,
                'nama'          => $nama,
                'kesatuan'      => $kesatuan,
                'gpl'           => $gpl,
                'gpb'           => $gpb,
                'mkgg1'         => $mkgg1,
                'mkgg2'         => $mkgg2,
                'mkg1'          => $mkg1,
                'mkg2'          => $mkg2,
                'tmtl'          => $tmtl,
                'tmtb'          => $tmtb,
                'kep_pangkat'   => $kep_pangkat,
                'no_tgl'        => $no_tgl,
                'kgbb'          => $kgbb,
                'kgbb_thn'      => $kgbb_thn,
                'kgbb_bln'      => $kgbb_bln,
                'diterapkan'    => $diterapkan,
                'padatanggal'   => $padatanggal,
                'd_oleh'        => $d_oleh,
                'sebagai'       => $sebagai,
                'nrp_p'         => $nrp_p
            );
            // proses kategori
            $where = array ('id' => $id);
            $this->model_kgb->update_data('history_kgb', $data, $where);

            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Simpan</div>');
            redirect('history/index/'.$nrp);
        }
        else{
            $id=  $this->uri->segment(3);
            // $data['record']=  $this->model_history_kgb->get_one($id)->row_array();
            $param  =   array('id'=>$id);
            $data['record']= $this->model_kgb->find_data($param, 'history_kgb')->row_array();
            //$this->load->view('user/form_edit',$data);
            $this->template->load('template/template_admin','history_kgb/form_edit',$data);
        }
    }

    function delete($id)
    {   
        $stat = $this->uri->segment(4);
        $where = array ('id' => $id);
        $this->model_kgb->delete_data($where, 'history_kgb'); 
        //$id=  $this->uri->segment(3);
        //$this->db->where('id',$id);
        //$this->db->delete('history_kgb');
        echo $this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">Data Berhasil Di Hapus</div>');
        redirect('history/index/'.$stat);
    }

    function get_autonama()
  {
    if (isset($_GET['term'])) {
      $result = $this->model_kgb->get_nama($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
        $result_array[] = array(
            'label'=>$row->nama_lengkap,
            'nrp'=>strtoupper($row->nrp),
            'pangkat'=>strtoupper($row->pangkat)
          );
        echo json_encode($result_array);
      }
    }
  }
}