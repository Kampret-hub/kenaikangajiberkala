<?php
session_start();
class C_member extends CI_Controller {

public function __construct() {
parent::__construct();
if ($this->session->userdata('username')=="") {
redirect('auth');
}
$this->load->helper('text');
}
public function index() {
$data['title'] = 'Page anggota';
           $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
		   $data['username'] = $this->session->userdata('username');
 		   $this->load->view('member/index',$data);

}
}
?>


