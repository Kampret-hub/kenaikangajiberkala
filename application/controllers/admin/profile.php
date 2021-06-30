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
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['member']= $this->model_kgb->find_data($where, 'anggota')->row_array();
        $data['history']= $this->model_kgb->find_data($where, 'history_kbg')->result();

        $this->template->load('template/template_admin','admin/profile',$data);
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_profile',$id);
        $this->db->delete('profile');
        redirect('profile');
    }
}