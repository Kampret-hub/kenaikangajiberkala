<?php
class user extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_user');
        if ($this->session->userdata('username')=="") {
      redirect('auth');
        }
    } 
    
    function index()
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        
        $data['record']=  $this->model_user->tampildata();
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template/template_admin','user/lihat_data',$data);
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
            $date   =  $this->input->post('date',true);
            $data       =  array(   'nama_lengkap'=>$nama,
                                    'username'=>$username,
                                    'role_id'=>$bagian,
                                    'password'=>md5($password),
                                    'date_created'=>$date);
            $this->db->insert('user',$data);
            redirect('user', $data);
        }
        else{
            //$this->load->view('user/form_input');
             $this->template->load('template/template_admin','user/form_input', $data);
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
            $this->template->load('template/template_admin','user/form_edit',$data);
        }
    }
    
    
   // function delete()
    //{
    //    $id=  $this->uri->segment(3);
    //    $this->db->where('user_id',$id);
    //    $this->db->delete('user');
    //    redirect('user');
   // }

     function delete($id)
    {
        $where = array ('nrp' => $id);
        $this->model_kgb->delete_data($where, 'anggota');
        $this->model_kgb->delete_data($where, 't_kgb');
        $this->model_kgb->delete_data($where, 'user');
        // update table user tidak berhasil di karenakan tidak ada filed bernama username
        // $this->model_kgb->delete_data($where, 'user');


        //    $id=  $this->uri->segment(3);
        //    $this->db->where('user_id',$id);
        //    $this->db->delete('user');
        redirect('user');
    }
}