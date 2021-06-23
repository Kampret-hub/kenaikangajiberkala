<?php
class bagian extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_bagian');
        if ($this->session->userdata('username')=="") {
      redirect('auth');
        }
    } 
    
    function index()
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        
        $data['record']=  $this->model_bagian->tampildata();
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template/template_admin','bagian/lihat_data',$data);
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_bagian',$id);
        $this->db->delete('bagian');
        redirect('bagian');
    }
}