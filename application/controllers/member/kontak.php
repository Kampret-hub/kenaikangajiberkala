<?php
class kontak extends ci_controller{
    
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
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 
        
        $where = array ('bagian'=> 'BAGSUMDA');
        $data['record1']= $this->model_kgb->find_data($where, 'anggota')->result_array();
        
        $where = array ('id_kontak'=> '1');
        $data['record']= $this->model_kgb->find_data($where, 'kontak')->row_array();
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template','kontak/lihat_data',$data);
    }

}