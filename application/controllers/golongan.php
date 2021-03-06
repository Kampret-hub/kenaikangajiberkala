<?php
class golongan extends ci_controller{
    
   function __construct() { 
        parent::__construct();
        $this->load->model('model_golongan');
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
        
        $data['record']=  $this->model_golongan->tampildata();
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template','golongan/lihat_data',$data);
    }
    
    function post()
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 

        $this->form_validation->set_rules('golongan', 'Golongan', 'required|min_length[5]');
         $this->form_validation->set_rules('pangkat', 'Pangkat', 'required|min_length[5]');

        $this->form_validation->set_message('required', '%s masih kosong', 'silahkan isi terlebi dahulu');
        $this->form_validation->set_message('min_length', '%s minimal 5 karakter');

        $this->form_validation->set_error_delimiters('<span class="help-block"></span>');

        if($this->form_validation->run() == FALSE)
        {
             $this->template->load('template','golongan/form_input', $data);
        }
        else
        {
            $insert_golongan = array (
                'kode_golongan' => $this->input->post('golongan'),
                'pangkat' => $this->input->post('pangkat')
            );

            $this->model_kgb->insert_data($insert_golongan, 'golongan');
            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Simpan</div>');
            redirect('golongan');
        }
    }
    
 function edit() 
    {
        $this->load->model('model_kgb');
        $data['record']=  $this->model_kgb->get_data("golongan");

        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 
         
        if(isset($_POST['submit'])){
            $id_golongan     =  $this->input->post('id_golongan',true);
            $golongan        =  $this->input->post('nama_golongan',true);
            $pangkat         =  $this->input->post('pangkat',true);

             $edit_golongan =  array(
                'kode_golongan' => $golongan,
                'pangkat' => $pangkat
            );
            $where = array ('id_golongan' => $id_golongan);
            $this->model_kgb->update_data("golongan", $edit_golongan, $where);
            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Ubah</div>');
            redirect('golongan');
        }
        else{

            $id     =  $this->uri->segment(3);
            $param  =   array('id_golongan'=>$id);            
            $data['record']= $this->model_kgb->find_data($param, "golongan")->row_array();
            $this->template->load('template','golongan/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_golongan',$id);
        $this->db->delete('golongan');

        echo $this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">Data Berhasil Di Hapus</div>'); 
        redirect('golongan');
    }
}