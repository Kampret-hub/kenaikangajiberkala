<?php
class jabatan extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_jabatan');
        if ($this->session->userdata('username')=="") {
      redirect('auth');
        }
    } 
    
    function index()
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        
        $data['record']=  $this->model_jabatan->tampildata();
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template/template_admin','jabatan/lihat_data',$data);
    }
    
    function post()
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 

        $this->form_validation->set_rules('jabatan', 'jabatan', 'required|min_length[5]');

        $this->form_validation->set_message('required', '%s masih kosong', 'silahkan isi terlebi dahulu');
        $this->form_validation->set_message('min_length', '%s minimal 5 karakter');

        $this->form_validation->set_error_delimiters('<span class="help-block"></span>');

        if($this->form_validation->run() == FALSE)
        {
             $this->template->load('template/template_admin','jabatan/form_input', $data);
        }
        else
        {
            $insert_jabatan = array (
                'nama_jabatan' => $this->input->post('jabatan')
            );

            $this->model_kgb->insert_data($insert_jabatan, 'jabatan');
            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Simpan</div>');
            redirect('jabatan');
        }
    }
    
     function edit() 
    {
        $this->load->model('model_kgb');
         $data['record']=  $this->model_kgb->get_data("jabatan");

         $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
         
        if(isset($_POST['submit'])){
            $id_jabatan       =  $this->input->post('id_jabatan',true);
            $jabatan      =  $this->input->post('nama_jabatan',true);

             $edit_jabatan =  array(   
                'nama_jabatan' => $jabatan
            );
            $where = array ('id_jabatan' => $id_jabatan);
            $this->model_kgb->update_data("jabatan", $edit_jabatan, $where);
            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Ubah</div>');
            redirect('jabatan');
        }
        else{

            $id=  $this->uri->segment(3);
            $param  =   array('id_jabatan'=>$id);            
            $data['record']= $this->model_kgb->find_data($param, "jabatan")->row_array();
            $this->template->load('template/template_admin','jabatan/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_jabatan',$id);
        $this->db->delete('jabatan');
        redirect('jabatan');
    }
}