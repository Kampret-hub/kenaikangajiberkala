<?php
class anggota_masuk extends ci_controller{
    
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
        
        $data['record']=  $this->model_kgb->get_data('anggota');
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template/template_admin','anggota_masuk/form_input',$data);
    }
    
    function post()
    {
        $data['anggota'] = $this->db->get_where('anggota', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        
        if(isset($_POST['submit'])){
            // proses data
            $nama       =  $this->input->post('nama_lengkap',true);
            $username   =  $this->input->post('nrp',true);
            $tempatlahir       =  $this->input->post('tmpt_lahir',true);
            $tanggallahir  =  $this->input->post('t_lahir',true);
            $jk    =  $this->input->post('jk',true);
            $agama  =  $this->input->post('agama',true);
            $alamat       =  $this->input->post('alamat',true);
            $pendidikan =  $this->input->post('pendidikan',true);
            $pangkat      =  $this->input->post('pangkat',true);
            $jabatan   =  $this->input->post('jabatan',true);
            $bagian   =  $this->input->post('bagian',true);
            
            $data       =  array(   'nama_lengkap'=>$nama,
                                    'nrp'=>$username,
                                    'tmpt_lahir'=>$tempatlahir,  
                                    't_lahir'=>$tanggallahir,
                                    'jk'=>$jk,
                                    'agama'=>$agama,
                                    'alamat'=>$alamat,
                                    'pendidikan'=>$pendidikan,
                                    'pangkat'=>$pangkat,
                                    'jabatan'=>$jabatan, 
                                    'bagian'=>$bagian);
                                    
            $this->db->insert('anggota',$data);
            redirect('anggota', $data);
        }
        else{
            //$this->load->view('user/form_input');
            $this->template->load('template/template_admin','anggota/form_input', $data);
        }
    }
    
     
    function edit()
    {
         $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
         
        if(isset($_POST['submit'])){
            // proses kategori
            $this->model_anggota->edit();
            redirect('anggota');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_anggota->get_one($id)->row_array();
            //$this->load->view('kategori/form_edit',$data);
            $this->template->load('template/template_admin','anggota/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_anggota',$id);
        $this->db->delete('anggota');
        redirect('anggota');
    }

    function get_autocomplete()
  {
    if (isset($_GET['term'])) {
      $result = $this->model_kgb->get_prov($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
        $result_array[] = array(
            'label'=>$row->username,
            'nama_lengkap'=>strtoupper($row->nama_lengkap),
            'tmpt_lahir'=>strtoupper($row->tmpt_lahir),
            't_lahir'=>strtoupper($row->t_lahir),
            'agama'=>strtoupper($row->agama),
            'pangkat'=>strtoupper($row->pangkat)
          );
        echo json_encode($result_array);
      }
    }
  }
}