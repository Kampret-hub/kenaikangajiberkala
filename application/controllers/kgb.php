<?php
class kgb extends ci_controller{
    
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
        
        $data['record']=  $this->model_kgb->tampildata();
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template/alltemplate','kgb/lihat_data',$data);
    }
    
    function post()
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        
        if(isset($_POST['submit'])){
            // proses data
            $nama       =  $this->input->post('nama',true);
            $username   =  $this->input->post('username',true);
            $bagian   =  $this->input->post('bagian',true); 
            $password   =  $this->input->post('password',true);
            $data       =  array(   'nama_lengkap'=>$nama,
                                    'username'=>$username,
                                    'role_id'=>$bagian,
                                    'password'=>md5($password));
            $this->db->insert('user',$data);
            redirect('user', $data);
        }
        else{
            //$this->load->view('user/form_input');
             $this->template->load('template/alltemplate','user/form_input', $data);
        }
    }
    
    function edit()
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        
        if(isset($_POST['submit'])){
            // proses kategori
            $id         =  $this->input->post('id',true);
            $nama       =  $this->input->post('nama',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            if(empty($password)){
                 $data  =  array(   'nama_lengkap'=>$nama,
                                    'username'=>$username);
            }
            else{
                  $data =  array(   'nama_lengkap'=>$nama,
                                    'username'=>$username,
                                    'password'=>md5($password));
            }
             $this->db->where('user_id',$id);
             $this->db->update('user',$data);
             redirect('user');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_user->get_one($id)->row_array();
            //$this->load->view('user/form_edit',$data);
            $this->template->load('template/alltemplate','user/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('user_id',$id);
        $this->db->delete('user');
        redirect('user');
    }
}