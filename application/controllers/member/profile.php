<?php
class profile extends ci_controller{
    
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
        $data['member']= $this->model_kgb->find_data($where, 'anggota')->row_array();
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array();
        $data['history']= $this->model_kgb->find_data($where, 'history_kgb')->result();

        $this->template->load('template','member/profile',$data);
    }

     function edit()
    {   
       $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
       $where = array ('nrp' => $this->session->userdata('username'));
       $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 
       
       $where = array ('nrp' => $this->session->userdata('username')); 
       $data['member']= $this->model_kgb->find_data($where, 'anggota')->row_array();

        if(isset($_POST['submit'])){
            // proses kategori
            $nrp            =  $this->input->post('nrp');
            $nama_lengkap   =  $this->input->post('nama_lengkap');
            $tmpt_lahir     =  $this->input->post('tmpt_lahir');
            $t_lahir        =  $this->input->post('t_lahir');
            $jk             =  $this->input->post('jk');
            $agama          =  $this->input->post('agama');
            $no_telp        =  $this->input->post('no_telp');
            $alamat         =  $this->input->post('alamat');
            $pendidikan     =  $this->input->post('pendidikan');
            $foto           =  $_FILES['foto']['name'];
           

           if($foto) {
                $config['upload_path'] = './assets/avatars/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('foto')){
                    $foto=$this->upload->data('file_name');
                    $this->db->set('foto', $foto);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $edit_anggota =  array(   
                'nrp'           =>$nrp, 
                'nama_lengkap'  =>$nama_lengkap,
                'tmpt_lahir'    =>$tmpt_lahir, 
                't_lahir'       =>$t_lahir,
                'jk'            =>$jk,
                'agama'         =>$agama,
                'no_telp'       =>$no_telp,
                'alamat'        =>$alamat,
                'pendidikan'    =>$pendidikan,
                

            );

            $edit_kgb = array(
                'nama'          =>$nama_lengkap  
            );

            $edit_history_kgb = array(
                'nama'          =>$nama_lengkap  
            );

            $edit_user = array(
                'nama_lengkap'  =>$nama_lengkap,
                'foto'          =>$foto
                
            );

            $where = array ('nrp' => $nrp);
            $this->model_kgb->update_data('anggota', $edit_anggota, $where);
            $this->model_kgb->update_data('t_kgb', $edit_kgb, $where);
            $this->model_kgb->update_data('history_kgb', $edit_kgb, $where);
            $this->model_kgb->update_data('user', $edit_user, $where);
            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Ubah</div>');
            redirect('member/profile');
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
            $this->template->load('template','member/form_edit_profile',$data);
        }
    }
    
     function ganti_password()
    {   
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 
        
        $this->load->model('model_kgb');
        // $data['record']=  $this->model_kgb->get_data('user');
       
         $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
         
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('cpw_baru','Password','required|matches[password]');

        $this->form_validation->set_message('required','%s wajib diisi');

        $this->form_validation->set_error_delimiters('<p class="alert">','</p>');

        if( $this->form_validation->run() == FALSE ){
            $where = array ('nrp' => $this->session->userdata('username')); 
            $data['password']= $this->model_kgb->find_data($where, 'user')->row_array();
            $this->template->load('template','member/form_gpassword',$data);

        } else {
            
            $nrp =  $this->input->post('nrp');
            $password =  $this->input->post('password');
            
            $data = array(
                'password' => md5($password)
            );

            $where = array ('nrp' => $nrp);
            $this->model_kgb->update_data('user', $data, $where);
            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Password Berhasil Di Ubah</div>');
            redirect('member/profile');

        }
    }

    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_profile',$id);
        $this->db->delete('profile');
        redirect('profile');
    }

     function lihat_cetak($id)
    {
       $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('nrp' => $this->session->userdata('username'));
        $data['akun']= $this->model_kgb->find_data($where, 'user')->row_array(); 
        $data['member']= $this->model_kgb->find_data($where, 'anggota')->row_array();

        $data['title'] = 'Lihat Data';

        $id=  $this->uri->segment(4);
        $where = array ('id'=> $id);
        $data['record']= $this->model_kgb->find_data($where, 'history_kgb')->row_array();
        $this->template->load('template','member/lihat_cetak',$data);
    }
}