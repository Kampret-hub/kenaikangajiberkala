<?php
class historycetak extends ci_controller{
    
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

        
        $data['record']= $this->model_kgb->get_data('history_kbg')->result();
        // $data['record1']= $this->db->query('select distinct nrp, nama from history_kbg where nrp = '.$id);
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template/template_admin','history_kgb/lihat_data',$data);
    }
}