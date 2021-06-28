<?php
class History extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_kgb');
        if ($this->session->userdata('username')=="") {
      redirect('auth');
        }
    } 
    
    function index($id)
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        
        $data['title'] = 'History KGB';

        $param  =   array('nrp'=>$id);
        $data['record']= $this->model_kgb->find_data($param, 'history_kbg')->result();
        // $data['record1']= $this->db->query('select distinct nrp, nama from history_kbg where nrp = '.$id);
        //$this->load->view('user/lihat_data',$data);
        $this->template->load('template/template_admin','history_kgb/lihat_data',$data);
    }
    
    function edit()
    {
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        
        $data['title'] = 'Edit History KGB';
        if(isset($_POST['submit'])){
            $id        =  $this->input->post('id',true);
            $nrp        =  $this->input->post('nrp',true);
            $nama       =  $this->input->post('nama',true);
            $periode_thn    =  $this->input->post('periode_thn',true);
            $periode_bln    =  $this->input->post('periode_bln',true);
            $gpb       =  $this->input->post('gpb',true);
            $tmtb        =  $this->input->post('tmtb',true);

            $data =  array(   
                'nrp'     => $nrp,
                'nama'    => $nama,
                'periode_thn' => $periode_thn,
                'periode_bln' => $periode_bln, 
                'gpb'    => $gpb,
                'tmtb'     => $tmtb 
            );
            // proses kategori
            $where = array ('id' => $id);
            $this->model_kgb->update_data('history_kbg', $data, $where);

            echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Simpan</div>');
            redirect('history/index/'.$nrp);
        }
        else{
            $id=  $this->uri->segment(3);
            // $data['record']=  $this->model_history_kgb->get_one($id)->row_array();
            $param  =   array('id'=>$id);
            $data['record']= $this->model_kgb->find_data($param, 'history_kbg')->row_array();
            //$this->load->view('user/form_edit',$data);
            $this->template->load('template/template_admin','history_kgb/form_edit',$data);
        }
    }

    function delete($id)
    {   
        $where = array ('id' => $id);
        $this->model_kgb->delete_data($where, 'history_kgb'); 
        //$id=  $this->uri->segment(3);
        //$this->db->where('id',$id);
        //$this->db->delete('history_kbg');
        echo $this->session->set_flashdata('msg','<div class="alert alert-danger text-center" role="alert">Data Berhasil Di Hapus</div>');
        redirect('history');
    }
}