<?php
class pangkat extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_pangkat');
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
        
        $data['record']=  $this->model_pangkat->tampildata();
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template','pangkat/lihat_data',$data);
    }
    
   function post()
    {
       $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 

        $this->form_validation->set_rules('pangkat', 'Pangkat', 'required|min_length[5]');
        $this->form_validation->set_rules('taraf', 'Taraf', 'required|min_length[5]');

        $this->form_validation->set_message('required', '%s masih kosong', 'silahkan isi terlebi dahulu');
        $this->form_validation->set_message('min_length', '%s minimal 5 karakter');

        $this->form_validation->set_error_delimiters('<span class="help-block"></span>');

        if($this->form_validation->run() == FALSE)
        {
             $this->template->load('template','pangkat/form_input', $data);
        }
        else
        {
            $insert_pangkat = array (
                'taraf' => $this->input->post('taraf'),
                'nama_pangkat' => $this->input->post('pangkat')
            );

            $this->model_kgb->insert_data($insert_pangkat, 'pangkat');
            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Simpan</div>');
            redirect('pangkat');
        }
    }
    
    function edit()  
    {
        $this->load->model('model_kgb');
         $data['record']=  $this->model_kgb->get_data("pangkat");

        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 
         
        if(isset($_POST['submit'])){
            $id_pangkat       =  $this->input->post('id_pangkat',true);
            $taraf        =  $this->input->post('taraf',true);
            $pangkat      =  $this->input->post('nama_pangkat',true);

             $edit_pangkat =  array(   
                'taraf'    => $taraf,
                'nama_pangkat' => $pangkat
            );
            $where = array ('id_pangkat' => $id_pangkat);
            $this->model_kgb->update_data("pangkat", $edit_pangkat, $where);
            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Ubah</div>');
            redirect('pangkat');
        }
        else{

            $id=  $this->uri->segment(3);
            $param  =   array('id_pangkat'=>$id);            
            $data['record']= $this->model_kgb->find_data($param, "pangkat")->row_array();
            $this->template->load('template','pangkat/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_pangkat',$id);
        $this->db->delete('pangkat');

        echo $this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">Data Berhasil Di Hapus</div>');
        redirect('pangkat');
    }
}