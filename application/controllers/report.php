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
        
        $data['title'] = 'History KGB';

        
        $data['record']= $this->model_kgb->get_data('t_kgb')->result();
        $this->template->load('template/template_admin','report/lihat_data',$data);
    }

    function lihat_data($nrp)
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        
        $data['title'] = 'Lihat Data';
        $data['record']=  $this->db->query('select a.nrp AS NRP, nama_lengkap, CONCAT(tmpt_lahir ,t_lahir) AS TTL,CONCAT(pangkat,golongan) AS PG, gpl, gpb, mkgg1, mkgg2, tmtl, tmtb,nosk, kgbb from anggota a join t_kgb b ON a.nrp = b.nrp WHERE a.nrp ='.$nrp)->row_array();
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template/template_admin','report/lihat_cetak',$data);
    }

    function print_data($NRP)
    {
         $data['record']=  $this->db->query('select a.nrp AS NRP, nama_lengkap, CONCAT(tmpt_lahir ,t_lahir) AS TTL,CONCAT(pangkat,golongan) AS PG, gpl, gpb, mkgg1, mkgg2, tmtl, tmtb,nosk, kgbb from anggota a join t_kgb b ON a.nrp = b.nrp WHERE a.nrp ='.$NRP)->row_array();
        $this->load->view('report/print_report', $data);
    }

    public function export_pdf($NRP)
    {
        $this->load->library('dompdf_gen');
       $data['record']=  $this->db->query('select a.nrp AS NRP, nama_lengkap, CONCAT(tmpt_lahir ,t_lahir) AS TTL,CONCAT(pangkat,golongan) AS PG, gpl, gpb, mkgg1, mkgg2, tmtl, tmtb,nosk, kgbb from anggota a join t_kgb b ON a.nrp = b.nrp WHERE a.nrp ='.$NRP)->row_array();

        $this->load->view('report/print_report', $data);
        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("report.pdf", array('Attachment' => 0));
    }
}