<?php
class auth extends CI_Controller{
    
    function __construct() { 
        parent::__construct();
        // load adalah fungsi membuka suatu fungsi
        // load model berfungsi sebagai membuka informasi yang ada di database
        $this->load->model('model_login');
        $this->load->library('form_validation');
    }
    
    function index(){
      // load view melihat interface form login
        $this->load->view('form_login');
    }

    function login (){
      // infutan di form login
    $username    = $this->input->post('nrp',TRUE);
    $password = md5($this->input->post('password',TRUE));

    // validasi data username dan password
    $validate = $this->model_login->validate($username,$password);

    // if(jika) infutan di form login ada di database maka tampilkan hal
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $nama_lengkap  = $data['nama_lengkap'];
        $username = $data['nrp'];
        $role_id = $data['role_id'];
        $sesdata = array(
            'nama_lengkap'  => $nama_lengkap,
            'username'     => $username,
            'role_id'     => $role_id,
            'logged_in' => TRUE
        );
        

        // mengindentifikasi halaman sesuai role uder
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($role_id === '1'){
           redirect('admin/c_admin');
 
        // access login for staff
        }elseif($role_id === '2'){
             redirect('member/c_member');
        // access login for author
        } 
    }else{

      // jika data user data tidak ada di database maka tampilkan ulang form login
        echo $this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">Username or Password is Wrong !</div>');
        redirect('auth');
    }
  }

  public function ganti_password()
    {

        $this->load->model('model_user');
        
        $username = $this->session->userdata['username'];
        $data['user'] = $this->db->get_where('user', ['password' => $this->session->userdata('password')])->row_array();


        $this->form_validation->set_rules('pw_baru','password baru','required');
        $this->form_validation->set_rules('cpw_baru','password kedua','required|matches[pw_baru]');

        $this->form_validation->set_message('required','%s wajib diisi');

        $this->form_validation->set_error_delimiters('<p class="alert">','</p>');

        if( $this->form_validation->run() == FALSE ){
            $this->template->load('template/template_admin','form_gpassword', $data);
        } else {
            $post = $this->input->post();
            
            $data = array(
                'password' => md5($post['pw_baru']),
            );

            $this->Post_model->update($username, $data['password'], 'tbuser');

        }
    }

    function logout()
    {   
        // hapus data user ketika keluar
        //$this->session->sess_destroy('username','role_id');
        $this->session->unset_userdata('nrp');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center" role="alert">You have been logout!</div>');
        redirect('auth');
    }
}