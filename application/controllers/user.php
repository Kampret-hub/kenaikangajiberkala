<?php
class user extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_user');
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
        
        $data['record']=  $this->model_user->tampildata();
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template','user/lihat_data',$data);
    }
    
    function post()
    {
       $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 
        
        if(isset($_POST['submit'])){
            // proses data
            $nama       =  $this->input->post('nama',true);
            $nrp   =  $this->input->post('nrp',true);
            $bagian   =  $this->input->post('bagian',true); 
            $password   =  $this->input->post('password',true);
            $date   =  $this->input->post('date',true);
            $data       =  array(   'nama_lengkap'=>$nama,
                                    'nrp'=>$nrp,
                                    'role_id'=>$bagian,
                                    'password'=>md5($password),
                                    'date_created'=>$date); 
            $this->db->insert('user',$data);
            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Simpan</div>');
            redirect('user', $data);
        }
        else{
            //$this->load->view('user/form_input');
             $this->template->load('template','user/form_input', $data);
        }
    }
    
    function edit()
    {
       $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 
        
        if(isset($_POST['submit'])){
            
            $id         =  $this->input->post('id',true);
            $nama       =  $this->input->post('nama',true);
            $nrp   =  $this->input->post('nrp',true);
            $password   =  $this->input->post('password',true);
            $role_id = $this->input->post('role_id',true);
            if(empty($password)){
                 $data  =  array(   'nama_lengkap'=>$nama,
                                    'nrp'=>$nrp,
                                    'role_id'=>$role_id);
            }

            else{
                  $data =  array(   'nama_lengkap'=>$nama,
                                    'nrp'=>$nrp,
                                    'role_id'=>$role_id,
                                    'password'=>md5($password));
                                    
            }
             $this->db->where('user_id',$id);
             $this->db->update('user',$data);
             echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Ubah</div>');
             redirect('user');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_user->get_one($id)->row_array();
            //$this->load->view('user/form_edit',$data);
            $this->template->load('template','user/form_edit',$data);
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
        // update table user tidak berhasil di karenakan tidak ada filed bernama nrp
        // $this->model_kgb->delete_data($where, 'user');


        //    $id=  $this->uri->segment(3);
        //    $this->db->where('user_id',$id);
        //    $this->db->delete('user');
        redirect('user');
    }
}