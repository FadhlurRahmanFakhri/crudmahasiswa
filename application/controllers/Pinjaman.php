<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pinjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pinjaman_model');
    } 

    public function index()
    {
        $data['judul'] = "Halaman Peminjaman";
        $data['pinjaman'] = $this->Pinjaman_model->get();
        $this->load->view("layout/header");
        $this->load->view("pinjaman/vw_pinjaman", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Mahasiswa";
        $data['pinjaman'] = $this->Pinjaman_model->get();
        $this->load->view("layout/header");
        $this->load->view("pinjaman/vw_tambah_pinjaman", $data);
        $this->load->view("layout/footer");
    }
    public function hapus($id)
    {
        $this->Pinjaman_model->delete($id);
        redirect('Pinjaman');
    }
    function upload()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telpon' => $this->input->post('no_telpon'),
            'email' => $this->input->post('email'),
            'besar_pinjaman' => $this->input->post('besar_pinjaman'),
            'durasi_pinjaman' => $this->input->post('durasi_pinjaman'),
        ];
        $this->Pinjaman_model->insert($data);
        redirect('Pinjaman');
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Pinjaman";
        $data['pinjaman'] =$this->Pinjaman_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("pinjaman/vw_ubah_pinjaman", $data);
        $this->load->view("layout/footer");
    }
    function update()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telpon' => $this->input->post('no_telpon'),
            'email' => $this->input->post('email'),
            'besar_pinjaman' => $this->input->post('besar_pinjaman'),
            'durasi_pinjaman' => $this->input->post('durasi_pinjaman'),
        ];
        $id = $this->input->post('id');
        $this->Pinjaman_model->update(['id' => $id], $data);
        redirect('Pinjaman');
    }
}
