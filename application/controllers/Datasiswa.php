<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Datasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = "Data Siswa";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/view-form-data-siswa');
        $this->load->view('templates/footer');
    }
    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tgllahir' => $this->input->post('tgllahir'),
            'tmplahir' => $this->input->post('tmplahir'),
            'alamat' => $this->input->post('alamat'),
            'jnskel' => $this->input->post('jnskel'),
            'agama' => $this->input->post('agama')
        ];
        $data['judul'] = "Data Siswa";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/view-data-siswa', $data);
        $this->load->view('templates/footer');
    }
}