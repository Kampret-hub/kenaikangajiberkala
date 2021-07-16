<?php
class bagian extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_bagian');
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
        
        $data['record']=  $this->model_bagian->tampildata();
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template/template_admin','bagian/lihat_data',$data);
    }
    
    
    function post()
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 

        $this->form_validation->set_rules('bagian', 'Bagian', 'required|min_length[5]');

        $this->form_validation->set_message('required', '%s masih kosong', 'silahkan isi terlebi dahulu');
        $this->form_validation->set_message('min_length', '%s minimal 5 karakter');

        $this->form_validation->set_error_delimiters('<span class="help-block"></span>');

        if($this->form_validation->run() == FALSE)
        {
             $this->template->load('template/template_admin','bagian/form_input', $data);
        }
        else
        {
            $insert_bagian = array (
                'nama_bagian' => $this->input->post('bagian')
            );

            $this->model_kgb->insert_data($insert_bagian, 'bagian');
            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Simpan</div>');
            redirect('bagian');
        }
    }
    
 function edit() 
    {
        $this->load->model('model_kgb');
        $data['record']=  $this->model_kgb->get_data("bagian");

        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 
         
        if(isset($_POST['submit'])){
            $id_bagian       =  $this->input->post('id_bagian',true);
            $bagian      =  $this->input->post('nama_bagian',true);

             $edit_bagian =  array(
                'nama_bagian' => $bagian
            );
            $where = array ('id_bagian' => $id_bagian);
            $this->model_kgb->update_data("bagian", $edit_bagian, $where);
            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Ubah</div>');
            redirect('bagian');
        }
        else{

            $id=  $this->uri->segment(3);
            $param  =   array('id_bagian'=>$id);            
            $data['record']= $this->model_kgb->find_data($param, "bagian")->row_array();
            $this->template->load('template/template_admin','bagian/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_bagian',$id);
        $this->db->delete('bagian');
        redirect('bagian');
    }
}