<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = "Data Siswa";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->ModelSiswa->getSiswa()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
     {
          $data['judul'] = 'Tambah Data Siswa';
          $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
          $data['siswa'] = $this->ModelSiswa->getSiswa(['id' => $this->uri->segment(3)])->result_array();
          $this->load->view('templates/header');
          $this->load->view('templates/sidebar');
          $this->load->view('templates/topbar', $data);
          $this->load->view('siswa/tambah');
          $this->load->view('templates/footer');    
     }

     public function SimpanDataMahasiswa()
     {
          $this->form_validation->set_rules(
               'nama',
               'nis',
               'kelas',
               'tgllahir',
               'tmplahir',
               'alamat',
               'required', [
                    'required' => 'Semua Data harus diisi'
               ]
          );
          $data = array(
               'nama' => $this->input->post('nama'),
               'nis' => $this->input->post('nis'),
               'kelas' => $this->input->post('kelas'),
               'tgllahir' => $this->input->post('tgllahir'),
               'tmplahir' => $this->input->post('tmplahir'),
               'alamat' => $this->input->post('alamat'),
               'jnskel' => $this->input->post('jnskel'),
               'agama' => $this->input->post('agama'),
          );
          $this->load->model('ModelSiswa');
          $this->ModelSiswa->simpanDataSiswa($data);
          redirect('siswa');        
     }

    public function edit() {
        $data['judul'] = 'Ubah Data Siswa';
        $this->load->model('ModelSiswa');
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->ModelSiswa->getSiswa(['id' => $this->uri->segment(3)])->result_array();
        $where = ['id' => $this->uri->segment(3)];
        $data['siswa'] = $this->ModelSiswa->siswaWhere($where)->row_array();

          $this->load->view('templates/header', $data);
          $this->load->view('templates/sidebar', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('siswa/edit', $data);
          $this->load->view('templates/footer');

   }

   public function editDAtaSiswa(){
    $this->form_validation->set_rules(
         'nama',
         'nis',
         'kelas',
         'tgllahir',
         'tmplahir',
         'alamat',
         'required', [
              'required' => 'Semua Data harus diisi'
         ]
    );
    $data = array(
         'nama' => $this->input->post('nama'),
         'nis' => $this->input->post('nis'),
         'kelas' => $this->input->post('kelas'),
         'tgllahir' => $this->input->post('tgllahir'),
         'tmplahir' => $this->input->post('tmplahir'),
         'alamat' => $this->input->post('alamat'),
         'jnskel' => $this->input->post('jnskel'),
         'agama' => $this->input->post('agama'),
    );
    $this->load->model('ModelSiswa');
    $this->ModelSiswa->editDataSiswa(['id' => $this->input->post('id')], $data);
    redirect('siswa');  
}

public function hapus ()
{
    $where = ['id' => $this->uri->segment(3)];
    $this->ModelSiswa->hapus($where);
    redirect('siswa');
}

   
}