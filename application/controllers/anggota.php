<?php 
class anggota extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_kgb');
        $this->load->library('form_validation');
       if ($this->session->userdata('username')=="") {
      redirect('auth');
        }
    }
    
    function index($id)
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 
        
        // $data['record']=  $this->model_kgb->get_data('anggota');
        // //$this->load->view('user/lihat_data',$data);
        // $this->template->load('template/template_admin','anggota/lihat_data',$data);
        $param = array ('status' => $id);
        
        if( $id == 'aktif')
        {
             $data['record1']= $this->model_kgb->find_data($param, 'anggota')->result();
            $this->template->load('template/template_admin','anggota/anggota_aktif',$data);
        } else if ($id == 'keluar')
        {
            $data['record1']= $this->model_kgb->find_data($param, 'anggota')->result();
             $this->template->load('template/template_admin','anggota/anggota_keluar',$data);
        } else if ($id == 'meninggal')
        {
            $data['record1']= $this->model_kgb->find_data($param, 'anggota')->result();
             $this->template->load('template/template_admin','anggota/anggota_meninggal',$data);
        } else
        {
            $data['record1']= $this->model_kgb->find_data($param, 'anggota')->result();
             $this->template->load('template/template_admin','anggota/anggota_pensiun',$data);
        }

    }
 
    function insert()
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 

        $this->form_validation->set_rules('nrp', 'NRP / NIP Username', 'required|min_length[5]');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|min_length[5]');
        $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('t_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required|min_length[5]');
        $this->form_validation->set_rules('no_telp', 'No Telepon', 'required|min_length[5]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[5]');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        $this->form_validation->set_rules('pangkat', 'Pangkat', 'required|min_length[5]');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('bagian', 'Bagian', 'required');
         $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');      

        $this->form_validation->set_message('required', '%s masih kosong', 'silahkan isi terlebi dahulu');
        $this->form_validation->set_message('min_length', '%s minimal 5 karakter');

        $this->form_validation->set_error_delimiters('<span class="help-block"></span>');

        if($this->form_validation->run() == FALSE)
        {
             $data['jk']=  $this->model_kgb->get_data('jk')->result();
             $data['agama']=  $this->model_kgb->get_data('agama')->result();
             $data['pangkat']=  $this->model_kgb->get_data('pangkat')->result();
             $data['jabatan']=  $this->model_kgb->get_data('jabatan')->result();
             $data['bagian']=  $this->model_kgb->get_data('bagian')->result();


            //$this->load->view('user/form_input');
            $this->template->load('template/template_admin','anggota/form_input', $data);

        }
        else
        {   
            $status         =  $this->input->post('status');
            $input_anggota = array (   
               'nrp'          => $this->input->post('nrp'),
               'nama_lengkap' => $this->input->post('nama_lengkap'),
               'tmpt_lahir'   => $this->input->post('tmpt_lahir'),
               't_lahir'      => $this->input->post('t_lahir'),
               'jk'           => $this->input->post('jk'),
               'agama'        => $this->input->post('agama'),
               'no_telp'      => $this->input->post('no_telp'),
               'alamat'       => $this->input->post('alamat'),
               'pendidikan'   => $this->input->post('pendidikan'),
               'pangkat'      => $this->input->post('pangkat'),
               'jabatan'      => $this->input->post('jabatan'),
               'bagian'       => $this->input->post('bagian'),
               'keterangan'          => $this->input->post('keterangan'),
               'status'       => $this->input->post('status')
            );

            $input_kgb = array (
               'nrp'          => $this->input->post('nrp'),
               'nama'         => $this->input->post('nama_lengkap')
            ); 

            $input_user = array (
               'nrp'           => $this->input->post('nrp'),
               'nama_lengkap' => $this->input->post('nama_lengkap'),
               'password'     => 'ee11cbb19052e40b07aac0ca060c23ee',
               'role_id'      => '2',
               'status'       => '1',
               'date_created' => date('Y-m-d H:i:s')
            );

            $this->model_kgb->insert_data($input_anggota, 'anggota');
            $this->model_kgb->insert_data($input_kgb, 't_kgb');
            $this->model_kgb->insert_data($input_user, 'user');
            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Simpan</div>');
            redirect('anggota/index/'.$status, $data);
        }
    }
    
     
    function edit()
    {
        $this->load->model('model_kgb');
         $data['record']=  $this->model_kgb->get_data('anggota');

        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 
         
        if(isset($_POST['submit'])){
            // proses kategori
            $nama_lengkap   =  $this->input->post('nama_lengkap');
            $nrp            =  $this->input->post('nrp');
            $tmpt_lahir     =  $this->input->post('tmpt_lahir');
            $t_lahir        =  $this->input->post('t_lahir');
            $jk             =  $this->input->post('jk');
            $agama          =  $this->input->post('agama');
            $no_telp        =  $this->input->post('no_telp');
            $alamat         =  $this->input->post('alamat');
            $pendidikan     =  $this->input->post('pendidikan');
            $pangkat        =  $this->input->post('pangkat');
            $jabatan        =  $this->input->post('jabatan');
            $bagian         =  $this->input->post('bagian');
            $golongan       =  $this->input->post('golongan');
            $masa_kerja     =  $this->input->post('masa_kerja');
            $gaji_pokok     =  $this->input->post('gaji_pokok');
            $keterangan            =  $this->input->post('keterangan');
            $status         =  $this->input->post('status');
            
            $edit_anggota =  array(   
                'nama_lengkap'  =>$nama_lengkap,
                'nrp'           =>$nrp, 
                'tmpt_lahir'    =>$tmpt_lahir, 
                't_lahir'       =>$t_lahir,
                'jk'            =>$jk,
                'agama'         =>$agama,
                'no_telp'       =>$no_telp,
                'alamat'        =>$alamat,
                'pendidikan'    =>$pendidikan,
                'pangkat'       =>$pangkat,
                'jabatan'       =>$jabatan, 
                'bagian'        =>$bagian,
                'bagian'        =>$bagian,
                'golongan'      =>$golongan,
                'masa_kerja'    =>$masa_kerja,
                'gaji_pokok'    =>$gaji_pokok,
                'keterangan'           =>$keterangan,
                'status'        =>$status
            );
             $edit_kgb = array(
                'nama'          =>$nama_lengkap   
            );

            $edit_history_kgb = array(
                'nama'          =>$nama_lengkap  
            );

            $edit_user = array (
                'nama_lengkap'  =>$nama_lengkap
            );

            $where = array ('nrp' => $nrp);
            $this->model_kgb->update_data('anggota', $edit_anggota, $where);
            $this->model_kgb->update_data('t_kgb', $edit_kgb, $where);
            $this->model_kgb->update_data('history_kbg', $edit_history_kgb, $where);
            $this->model_kgb->update_data('user', $edit_user, $where);
            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Ubah</div>');
            redirect('anggota/index/'.$status);
        }
        else{
            $id=  $this->uri->segment(3);
            $param  =   array('nrp'=>$id);

            //menampilkan data db di edit select option
            $data['jk']=  $this->model_kgb->get_data('jk')->result();
            $data['agama']=  $this->model_kgb->get_data('agama')->result();
            $data['pangkat']=  $this->model_kgb->get_data('pangkat')->result();
            $data['jabatan']=  $this->model_kgb->get_data('jabatan')->result();
            $data['bagian']=  $this->model_kgb->get_data('bagian')->result();
            //$data['golongan']=  $this->model_kgb->get_data('golongan')->result();
            $data['gaji_pokok']=  $this->model_kgb->get_data('gaji_pokok')->result();

            
            $data['record']= $this->model_kgb->find_data($param, 'anggota')->row_array();
            $this->template->load('template/template_admin','anggota/form_edit',$data);
        }
    }
    
    
    function delete($id, $stat)
    {
        $stat = $this->uri->segment(4);
        $where = array ('nrp' => $id);
        $data['record']= $this->model_kgb->find_data($where, 'anggota')->row_array();

        $this->model_kgb->delete_data($where, 'anggota');
        $this->model_kgb->delete_data($where, 't_kgb');
        $this->model_kgb->delete_data($where, 'history_kbg');
        $this->model_kgb->delete_data($where, 'user');

      
        echo $this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">Data Berhasil Di Hapus</div>');
        redirect('anggota/index/'.$stat);
    }

     public function cari(){
         $username=$_GET['kode_gapok'];
         $cari =$this->model_kgb->cari($username)->result();
         echo json_encode($cari);
     } 

     function get_autocomplete()
  {
    if (isset($_GET['term'])) {
      $result = $this->model_kgb->get_prov($_GET['term']);
      if (count($result) > 0) {
        foreach ($result as $row)
        $result_array[] = array(
            'label'=>$row->kode_gapok,
            'golongan'=>strtoupper($row->golongan),
            'masa_kerja'=>strtoupper($row->masa_kerja),
            'gaji_pokok'=>strtoupper($row->gaji)
          );
        echo json_encode($result_array);
      }
    }
  }
}