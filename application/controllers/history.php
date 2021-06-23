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
            $gaji       =  $this->input->post('gaji',true);
            $tmt        =  $this->input->post('tmt',true);

            $data =  array(   
                'nrp'     => $nrp,
                'nama'    => $nama,
                'periode_thn' => $periode_thn,
                'periode_bln' => $periode_bln, 
                'gaji'    => $gaji,
                'tmt'     => $tmt 
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


    // Cetak history kbg dengan PDF
     function pdf()
    {
        $this->load->library('cfpdf');
        // l = landscape P = potrait
        $pdf=new FPDF('P','mm','LETTER');
        $pdf->AddPage();

        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Text(10, 10, 'KEPOLISIAN NEGARA REPUBLIK INDONESIA');
        $pdf->Cell(10, 10,'','',1);

        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Text(30, 14, 'DAERAH JAWA BARAT');

        $pdf->SetFont('Arial','BU','L');
        $pdf->SetFontSize(10);
        $pdf->Text(10, 18, '                       RESOR KARAWANG                      ');

        $pdf->image('assets/img/logo2.png','100','22','15');

        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Text(100, 42, 'PETIKAN');

        $pdf->SetFont('Arial','BU','L');
        $pdf->SetFontSize(10);
        $pdf->Text(78, 48, '                   KEPUTUSAN                 ');

        $pdf->SetFont('Arial','B','L');
        $pdf->SetFontSize(10);
        $pdf->Text(78, 52, 'Nomor :');
        $pdf->Text(100, 62, 'Tentang');


        $pdf->SetFont('Arial','BU','L');
        $pdf->SetFontSize(10);
        $pdf->Text(86, 68, 'KENAIKAN GAJI BERKALA');

        $pdf->SetFont('Arial','','L');
        $pdf->SetFontSize(10);
        $pdf->Text(15, 76, 'Berdasarkan  Peraturan  Pemerintah  Republik  Indonesia  Nomor  24  Tahun  2013  tentang  perubahan  Kesembilan');
        $pdf->Text(10, 80, 'atas Peraturan Pemerintahan Nomor 29 Tahun 2001 tentang Peraturan Gaji Pokok Anggota Kepolisian Negara Republik');
        $pdf->Text(10, 84, 'Indonesia dan dengan telah dipenuhinya masa kerja dan syarat-syarat lain, bersama ini diberitahukan kepada : ');
        $pdf->Text(10, 89, '1. Nama');
        $pdf->Text(68, 89, ':');
        $pdf->Text(10, 94, '2. Tempat / tanggal lahir');
        $pdf->Text(68, 94, ':');
        $pdf->Text(10, 99, '3. NRP / NIP');
        $pdf->Text(68, 99, ':');
        $pdf->Text(10, 104, '4. Pangkat');
        $pdf->Text(68, 104, ':');
        $pdf->Text(10, 109, '5. Kesatuan');
        $pdf->Text(68, 109, ':');
        $pdf->Text(10, 114, '6. Gaji Pokok lama');
        $pdf->Text(68, 114, ':');

        $pdf->Text(10, 125, 'Diberikan Kenaikan Gaji Berkala hingga memperoleh :');
        $pdf->Text(10, 130, '7. Gaji pokok baru');
        $pdf->Text(68, 130, ':');
        $pdf->Text(10, 135, '8. Masa kerja golongan gaji');
        $pdf->Text(68, 135, ':');
        $pdf->Text(10, 140, '9. Pangkat / golongan ruang');
        $pdf->Text(68, 140, ':');
        $pdf->Text(10, 145, '10. TMT');
        $pdf->Text(68, 145, ':');
        $pdf->Text(10, 150, '11. Kep. Pangkat / Spemb oleh');
        $pdf->Text(68, 150, ':');

        $pdf->Text(16, 155, 'a.');
        $pdf->Text(20, 155, 'Nomor / tanggal');
        $pdf->Text(68, 155, ':');
        $pdf->Text(16, 160, 'b.');
        $pdf->Text(20, 160, 'TMT');
        $pdf->Text(68, 160, ':');
        $pdf->Text(16, 165, 'c.');
        $pdf->Text(20, 165, 'Masa kerja golongan');
        $pdf->Text(68, 165, ':');

        $pdf->Text(10, 170, '12. KGB Berikutnya');
        $pdf->Text(68, 170, ':');

        $pdf->SetFont('Arial','U','L');
        $pdf->SetFontSize(10);
        $pdf->Text(10, 178, 'Keterangan');
        $pdf->SetFont('Arial','','L');
         $pdf->Text(30, 178, ':');

        $pdf->SetFont('Arial','','L');
        $pdf->SetFontSize(10);
        $pdf->Text(10, 186, '1.');
        $pdf->Text(25, 186, 'Surat pemberitahuan ini disampaikan kepada yang bersangkutan untuk dapat dipergunakan seperlunya.');
        $pdf->Text(10, 190, '2.');
        $pdf->Text(25, 190, 'Apabila di kemudian hari ternyata terdapat kekeliruan dalam surat keputusan ini, akan diadakan pembetulan');
        $pdf->Text(25, 194, 'sebagaimana mestinya.');

        $pdf->SetFont('Arial','','L');
        $pdf->SetFontSize(10);
        $pdf->Text(113, 210, 'Diterapkan di');
        $pdf->Text(140, 210, ':');
        $pdf->Text(113, 214, 'Pada tanggal');
        $pdf->Text(140, 214, ':');
        $pdf->Text(113, 216, '___________________________________________');
        $pdf->Text(120, 221, 'a.n KEPALA KEPOLISIAN RESOR KARAWANG');
        $pdf->Text(150, 226, 'WAKA');
        $pdf->Text(153, 231, 'u.b');
        $pdf->Text(145, 236, 'KABAGSUMDA');

        $pdf->SetFont('Arial','U','L');
        $pdf->Text(130, 256, '                  ADI FAUZI, S.E              ');

        $pdf->SetFont('Arial','','L');
        $pdf->Text(130, 260, 'KOMISARIS POLISI NRP 71120474');
        
        $pdf->SetFont('Arial','','L');
        $data=  $this->model_kgb->laporan_default();
        $no=1;
        $total=0;

        foreach ($data->result() as $r)
        {
            $pdf->text(72, 89, $r->nama);
            $pdf->text(72, 99, $r->nrp);
            $pdf->Text(72, 109, 'POLRES KARAWANG');
            $pdf->Text(72, 135, $r->periode_thn);
            $pdf->Text(83, 135, $r->periode_bln);
            $pdf->Text(72, 160, $r->tmt);
            $no++;

        }
        
        $pdf->Output();
    }
}