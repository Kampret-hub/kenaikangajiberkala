<?php
class Report extends ci_controller{
    
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
        
        $data['title'] = 'Report KGB';

        $data['record']= $this->model_kgb->get_data('t_kgb')->result();
        //$data['record']= $this->model_kgb->get_data('t_kgb')->result(); 
        $this->template->load('template/template_admin','report/lihat_data',$data);
    }

    function lihat_data($nrp)
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        
        $data['title'] = 'Lihat Data';
        $data['record']=  $this->db->query('select a.nrp AS NRP, ket, nomor_kgb, nama_lengkap, kesatuan, tmpt_lahir ,t_lahir, pangkat, golongan, gpl, gpb, mkgg1, mkgg2, mkg1, mkg2, tmtl, tmtb,  kep_pangkat, no_tgl, kgbb, kgbb_thn, kgbb_bln, diterapkan, padatanggal, d_oleh, sebagai, nrp_p from anggota a join t_kgb b ON a.nrp = b.nrp WHERE a.nrp ='.$nrp)->row_array();
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template/template_admin','report/lihat_cetak',$data);
    }

    function print_data($NRP)
    {
         $data['record']=  $this->db->query('select a.nrp AS NRP, ket, nomor_kgb, nama_lengkap,kesatuan, tmpt_lahir ,t_lahir, pangkat, golongan, gpl, gpb, mkgg1, mkgg2, mkg1, mkg2, tmtl, tmtb,  kep_pangkat, no_tgl, kgbb, kgbb_thn, kgbb_bln, diterapkan, padatanggal, d_oleh, sebagai, nrp_p  from anggota a join t_kgb b ON a.nrp = b.nrp WHERE a.nrp ='.$NRP)->row_array();
        $this->load->view('report/print_report', $data);
    }

    public function export_pdf($NRP)
    {
        $this->load->library('dompdf_gen');
       $data['record']=  $this->db->query('select a.nrp AS NRP, ket, nomor_kgb, nama_lengkap,kesatuan, tmpt_lahir ,t_lahir, pangkat, golongan, gpl, gpb, mkgg1, mkgg2, mkg1, mkg2, tmtl, tmtb,  kep_pangkat, no_tgl, kgbb, kgbb_thn, kgbb_bln, diterapkan, padatanggal, d_oleh, sebagai, nrp_p from anggota a join t_kgb b ON a.nrp = b.nrp WHERE a.nrp ='.$NRP)->row_array();

        $this->load->view('report/print_report', $data);
        $paper_size = 'letter';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("report.pdf", array('Attachment' => 0));
    }

    
}