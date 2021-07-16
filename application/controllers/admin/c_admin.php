<?php
session_start();
class C_admin extends CI_Controller {

public function __construct() {
parent::__construct();
if ($this->session->userdata('username')=="") {
redirect('auth');
}
$this->load->helper('text');
}
public function index() {
			$this->load->model('model_kgb');
			$data['contents']=  $this->model_kgb->get_data('anggota')->num_rows();
			
		   $data['title'] = 'Page Admin';
           $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
	       $where = array ('nrp' => $this->session->userdata('username'));
	       $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 
	       
		   $data['username'] = $this->session->userdata('username');
 		  $this->template->load('template/template_admin','admin/index',$data);
           
}
}
?>