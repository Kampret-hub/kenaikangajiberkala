<?php

class anggota extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_kgb');
        $this->load->library('form_validation', 'excel');
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
        // $this->template->load('template','anggota/lihat_data',$data);
        $param = array ('status' => $id);
        
        if( $id == 'aktif')
        {
             $data['record1']= $this->model_kgb->find_data($param, 'anggota')->result();
            $this->template->load('template','anggota/anggota_aktif',$data);
        } else if ($id == 'keluar')
        {
            $data['record1']= $this->model_kgb->find_data($param, 'anggota')->result();
             $this->template->load('template','anggota/anggota_keluar',$data);
        } else if ($id == 'meninggal')
        {
            $data['record1']= $this->model_kgb->find_data($param, 'anggota')->result();
             $this->template->load('template','anggota/anggota_meninggal',$data);
        } else
        {
            $data['record1']= $this->model_kgb->find_data($param, 'anggota')->result();
             $this->template->load('template','anggota/anggota_pensiun',$data);
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
        $this->form_validation->set_rules('pangkat', 'Pangkat', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('bagian', 'Bagian', 'required');
        $this->form_validation->set_rules('stat_pegawai', 'Status Pegawai', 'required');
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
            $this->template->load('template','anggota/form_input', $data);

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
               'stat_pegawai' => $this->input->post('stat_pegawai'),
               'keterangan'   => $this->input->post('keterangan'),
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
            $stat_pegawai     =  $this->input->post('stat_pegawai');
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
                'stat_pegawai'    =>$stat_pegawai,
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
            $this->model_kgb->update_data('history_kgb', $edit_history_kgb, $where);
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
            $this->template->load('template','anggota/form_edit',$data);
        }
    }
    
    
    function delete($id, $stat)
    {
        $stat = $this->uri->segment(4);
        $where = array ('nrp' => $id);
        $data['record']= $this->model_kgb->find_data($where, 'anggota')->row_array();

        $this->model_kgb->delete_data($where, 'anggota');
        $this->model_kgb->delete_data($where, 't_kgb');
        $this->model_kgb->delete_data($where, 'history_kgb');
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

   public function import_excel(){

    $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
    $where = array ('nrp' => $this->session->userdata('username'));
    $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 

    if (isset($_FILES["fileExcel"]["name"])) {
      $path = $_FILES["fileExcel"]["tmp_name"];
      $object = PHPExcel_IOFactory::load($path);
      foreach($object->getWorksheetIterator() as $worksheet)
      {
        $highestRow = $worksheet->getHighestRow();
        $highestColumn = $worksheet->getHighestColumn();  
        for($row=2; $row<=$highestRow; $row++)
        {
          $nrp = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
          $nama_lengkap = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
          $tmpt_lahir = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
          $t_lahir = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
          $jk = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
          $agama = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
          $no_telp = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
          $alamat = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
          $pendidikan = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
          $pangkat = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
          $jabatan = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
          $bagian = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
          $golongan = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
          $masa_kerja = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
          $gaji_pokok = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
          $stat_pegawai = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
          $keterangan = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
          $status = $worksheet->getCellByColumnAndRow(18, $row)->getValue();

           $input_anggota[] = array (   
                  'nrp'         => $nrp,
                  'nama_lengkap'=> $nama_lengkap,
                  'tmpt_lahir'  => $tmpt_lahir,
                  't_lahir'     => $t_lahir,
                  'jk'          => $jk,
                  'agama'       => $agama,
                  'no_telp'     => $no_telp,
                  'alamat'      => $alamat,
                  'pendidikan'  => $pendidikan,
                  'pangkat'     => $pangkat,
                  'jabatan'     => $jabatan,
                  'bagian'      => $bagian,
                  'golongan'    => $golongan,
                  'masa_kerja'  => $masa_kerja,
                  'gaji_pokok'  => $gaji_pokok,
                  'stat_pegawai'=> $stat_pegawai,
                  'keterangan'  => $keterangan,
                  'status'      => $status                 
          );

           $input_kgb[] = array (
               'nrp'          => $nrp,
               'nama'         => $nama_lengkap
            ); 


          $input_user[] = array (
               'nrp'          => $nrp,
               'nama_lengkap' => $nama_lengkap,
               'password'     => 'ee11cbb19052e40b07aac0ca060c23ee',
               'role_id'      => '2',
               'status'       => '1',
               'date_created' => date('Y-m-d H:i:s')
          );
        }
      }
      
      $this->load->model('model_kgb');
      $this->model_kgb->insert( $input_anggota, 'anggota');
      $this->model_kgb->insert( $input_kgb, 't_kgb');
      $insert = $this->model_kgb->insert( $input_user, 'user');

        
      if($insert){
       echo $this->session->set_flashdata('status','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Import</div>');
        redirect('anggota/index/'.'aktif', $data);

      }else{
       echo $this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">Terjadi Kesalahan</div>');
         redirect('anggota/index/'.'aktif', $data);
      }
    }else{
      echo "Tidak ada file yang masuk";
    
    }
     
  }
}