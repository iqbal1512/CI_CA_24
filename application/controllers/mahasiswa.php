<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    // ========================
    // TAMPIL DATA
    // ========================
    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    // ========================
    // FORM TAMBAH
    // ========================
    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('mahasiswa/tambah');
        $this->load->view('templates/footer');
    }

    // ========================
    // SIMPAN
    // ========================
    public function simpan()
    {
        $data = [
            'nim'      => $this->input->post('nim'),
            'nama'     => $this->input->post('nama'),
            'jurusan'  => $this->input->post('jurusan'),
            'alamat'   => $this->input->post('alamat')
        ];

        $this->Mahasiswa_model->insert($data);
        redirect('mahasiswa');
    }

    // ========================
    // HAPUS
    // ========================
    public function hapus($id)
    {
        $this->Mahasiswa_model->delete($id);
        redirect('mahasiswa');
    }
}