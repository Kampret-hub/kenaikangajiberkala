<?php
class gaji_pokok extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_gaji_pokok');
        if ($this->session->userdata('username')=="") {
      redirect('auth');
        }
    } 
    
    function index()
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        
        $data['record']=  $this->model_gaji_pokok->tampildata();
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template/template_admin','gaji_pokok/lihat_data',$data);
    }

    function post()
    {
        $this->form_validation->set_rules('kode_gapok', 'Kode Gapok', 'required|min_length[5]|is_unique[kode_gapok]');
        $this->form_validation->set_rules('gaji', 'Gaji', 'required','required');
        $this->form_validation->set_rules('masa_kerja', 'Masa Kerja', 'required');
        $this->form_validation->set_rules('golongan', 'golongan', 'required');
        $this->form_validation->set_rules('taraf', 'Taraf', 'required|min_length[5]');
         $this->form_validation->set_rules('pangkat', 'Pangkat', 'required|min_length[5]');

        $this->form_validation->set_message('required', '%s masih kosong', 'silahkan isi terlebi dahulu');
        $this->form_validation->set_message('min_length', '%s minimal 5 karakter');

        $this->form_validation->set_error_delimiters('<span class="help-block"></span>');

        if($this->form_validation->run() == FALSE)
        {
             $this->template->load('template/template_admin','gaji_pokok/form_input');
        }
        else
        {
            echo "simpan";
        }
    }


     function edit() 
    {
        $this->load->model('model_kgb');
         $data['record']=  $this->model_kgb->get_data('gaji_pokok');

         $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
         
        if(isset($_POST['submit'])){
            $id_gaji        =  $this->input->post('id_gaji',true);
            $kode_gapok        =  $this->input->post('kode_gapok',true);
            $gaji_pokok      =  $this->input->post('gaji_pokok',true);
            $masa_kerja    =  $this->input->post('masa_kerja',true);
            $golongan    =  $this->input->post('golongan',true);
            $taraf       =  $this->input->post('taraf',true);
            $pangkat        =  $this->input->post('pangkat',true);

             $edit_gaji =  array(   
                'kode_gapok'     => $kode_gapok,
                'gaji_pokok'    => $gaji_pokok,
                'masa_kerja' => $masa_kerja,
                'golongan' => $golongan, 
                'taraf'    => $taraf,
                'pangkat'     => $pangkat);

            $where = array ('id_gaji' => $id_gaji);
            $this->model_kgb->update_data('gaji_pokok', $edit_gaji, $where);
            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Ubah</div>');
            redirect('gaji_pokok');
        }
        else{
            $id=  $this->uri->segment(3);
            $param  =   array('id_gaji'=>$id);            
            $data['record']= $this->model_kgb->find_data($param, 'gaji_pokok')->row_array();
            $this->template->load('template/template_admin','gaji_pokok/form_edit',$data);
        }
    }
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_gaji_pokok',$id);
        $this->db->delete('gaji_pokok');

        echo $this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">Data Berhasil Di Hapus</div>');
        redirect('gaji_pokok');
    }
}