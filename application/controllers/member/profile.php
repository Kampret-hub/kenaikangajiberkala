<?php
class profile extends ci_controller{
    
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
        $data['member'] = $this->model_kgb->get_member_by_id($this->session->userdata('username'));
        $data['history'] = $this->model_kgb->get_history_by_id($this->session->userdata('username'));
        
        
        //$data['history']= $this->model_kgb->get_data('history_kbg', array('nrp'))->result();

        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template/template_member','member/profile',$data);
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_profile',$id);
        $this->db->delete('profile');
        redirect('profile');
    }
}