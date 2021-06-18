<?php
class anggota extends ci_controller{
    
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
        $this->template->load('template/template_admin','anggota/lihat_data',$data);
    }
    
    function insert()
    {
        $data['anggota'] = $this->db->get_where('anggota', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        
        if(isset($_POST['submit'])){
            // proses data
            $nama_lengkap   =  $this->input->post('nama_lengkap');
            $nrp            =  $this->input->post('nrp');
            $tmpt_lahir     =  $this->input->post('tmpt_lahir');
            $t_lahir        =  $this->input->post('t_lahir');
            $jk             =  $this->input->post('jk');
            $agama          =  $this->input->post('agama');
            $alamat         =  $this->input->post('alamat');
            $pendidikan     =  $this->input->post('pendidikan');
            $pangkat        =  $this->input->post('pangkat');
            $jabatan        =  $this->input->post('jabatan');
            $bagian         =  $this->input->post('bagian');
            
            $input_anggota =  array(   
                'nama_lengkap'  =>$nama_lengkap,
                'nrp'           =>$nrp,
                'tmpt_lahir'    =>$tmpt_lahir, 
                't_lahir'       =>$t_lahir,
                'jk'            =>$jk,
                'agama'         =>$agama,
                'alamat'        =>$alamat,
                'pendidikan'    =>$pendidikan,
                'pangkat'       =>$pangkat,
                'jabatan'       =>$jabatan, 
                'bagian'        =>$bagian
            );
            $input_kgb = array(
                'nrp'           =>$nrp,
                'nama'          =>$nama_lengkap
                
            );
            $input_user = array (
                'nama_lengkap'  =>$nama_lengkap,
                'username'      =>$nrp,
                'password'      => 'ee11cbb19052e40b07aac0ca060c23ee',
                'role_id'       => '2',
                'status'        => '1',
                'date_created'  =>  date('Y-m-d H:i:s')
            );
                                    
            $this->model_kgb->insert_data($input_anggota, 'anggota');
            $this->model_kgb->insert_data($input_kgb, 't_kgb');
            $this->model_kgb->insert_data($input_user, 'user');
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
            $id_anggota    =  $this->input->post('id_anggota');
            $nama_lengkap   =  $this->input->post('nama_lengkap');
            $nrp            =  $this->input->post('nrp');
            $tmpt_lahir     =  $this->input->post('tmpt_lahir');
            $t_lahir        =  $this->input->post('t_lahir');
            $jk             =  $this->input->post('jk');
            $agama          =  $this->input->post('agama');
            $alamat         =  $this->input->post('alamat');
            $pendidikan     =  $this->input->post('pendidikan');
            $pangkat        =  $this->input->post('pangkat');
            $jabatan        =  $this->input->post('jabatan');
            $bagian         =  $this->input->post('bagian');
            $golongan       =  $this->input->post('golongan');
            $masa_kerja     =  $this->input->post('masa_kerja');
            $gaji_pokok     =  $this->input->post('gaji_pokok');
            $status         =  $this->input->post('status');

             $edit_anggota =  array(   
                'nama_lengkap'  =>$nama_lengkap,
                'nrp'           =>$nrp,
                'tmpt_lahir'    =>$tmpt_lahir, 
                't_lahir'       =>$t_lahir,
                'jk'            =>$jk,
                'agama'         =>$agama,
                'alamat'        =>$alamat,
                'pendidikan'    =>$pendidikan,
                'pangkat'       =>$pangkat,
                'jabatan'       =>$jabatan, 
                'bagian'        =>$bagian,
                'golongan'      =>$golongan,
                'masa_kerja'    =>$masa_kerja,
                'gaji_pokok'    =>$gaji_pokok, 
                'status'        =>$status
            );
             $edit_kgb = array(
                'nama'          =>$nama_lengkap
                
            );
            $edit_user = array (
                'nama_lengkap'  =>$nama_lengkap
               
            );

            $where = array ('nrp' => $nrp);
            $this->model_kgb->update_data('anggota', $edit_anggota, $where);
            $this->model_kgb->update_data('t_kgb', $edit_kgb, $where);
            // update table user tidak berhasil di karenakan tidak ada filed bernama NRP
            //$this->model_kgb->update_data('user', $edit_kgb, $where);
            redirect('anggota');
        }
        else{
            $id=  $this->uri->segment(3);
            $param  =   array('id_anggota'=>$id);
            // $data['record']=  $this->model_kgb->get_one($id)->row_array();
            $data['record']= $this->model_kgb->find_data($param, 'anggota')->row_array();
            $this->template->load('template/template_admin','anggota/form_edit',$data);
        }
    }
    
    
    function delete($id)
    {
        $where = array ('nrp' => $id);
        $this->model_kgb->delete_data($where, 'anggota');
        $this->model_kgb->delete_data($where, 't_kgb');
        // update table user tidak berhasil di karenakan tidak ada filed bernama NRP
        // $this->model_kgb->delete_data($where, 'user');


        // $id=  $this->uri->segment(3);
        // $this->db->where('id_anggota',$id);
        // $this->db->delete('anggota');
        redirect('anggota');
    }

    // public function cari(){
    //     $nrp=$_GET['nrp'];
    //     $cari =$this->model_anggota->cari($nrp)->result();
    //     echo json_encode($cari);
    // } 
}