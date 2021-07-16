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
        
        $where = array ('id_kontak'=> '1');
        $data['record']= $this->model_kgb->find_data($where, 'kontak')->row_array();
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template/template_admin','kontak/lihat_data',$data);
    }

     function setup() 
    {
        $this->load->model('model_kgb');
        $data['record']=  $this->model_kgb->get_data("kontak");

       $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 
         
        if(isset($_POST['submit'])){
            $id_kontak       =  $this->input->post('id_kontak',true);
            $kab        =  $this->input->post('kab',true);
            $alamat      =  $this->input->post('alamat',true);
            $no_telp    =  $this->input->post('no_telp',true);
            $email    =  $this->input->post('email',true);

             $edit_gaji =  array(   
                'kab'     => $kab,
                'alamat'    => $kab,
                'no_telp' => $no_telp,
                'email' => $email);

            $where = array ('id_kontak' => $id_kontak);
            $this->model_kgb->update_data("kontak", $edit_gaji, $where);
            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Ubah</div>');
            redirect('kontak');
        }
        else{

            $id=  $this->uri->segment(3);
            $param  =   array('id_kontak'=>$id);            
            $data['record']= $this->model_kgb->find_data($param, "kontak")->row_array();
            $this->template->load('template/template_admin','kontak/form_setup',$data);
        }
    }
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_kontak',$id);
        $this->db->delete('kontak');

        echo $this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">Data Berhasil Di Hapus</div>');
        redirect('kontak');
    }
}