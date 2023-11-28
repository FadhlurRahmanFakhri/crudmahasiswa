<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Prodi";
        $data['prodi'] = $this->Prodi_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_prodi", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Prodi";
        $data['prodi'] = $this->Prodi_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Prodi', 'required', [
            'required' => 'Nama Prodi Wajib Di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("mahasiswa/vw_tambah_prodi", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'ruangan' => $this->input->post('ruangan'),
                'jurusan' => $this->input->post('jurusan'),
                'akreditasi' => $this->input->post('akreditasi'),
                'nama_kaprodi' => $this->input->post('nama_kaprodi'),
                'tahun_berdiri' => $this->input->post('tahun_berdiri'),
                'output_lulusan' => $this->input->post('output_lulusan'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/prodi/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['prodi']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/prodi/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Prodi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"
            role="alert"><i fa-info-circle"></i>Data Prodi Berhasil Ditambah!</div>');
            redirect('Prodi');
        }
    }
    public function hapus($id)
    {
        $this->Prodi_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"
            role="alert"><i fa-info-circle"></i>Data Prodi tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
        class="icon fas fa-check-circle"></i>Data Prodi Berhasil Dihapus!</div>');
        }
        redirect('Prodi');
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Prodi";
        $data['prodi'] = $this->Prodi_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Prodi', 'required', [
            'required' => 'Nama Prodi Wajib Di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("mahasiswa/vw_ubah_prodi", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'ruangan' => $this->input->post('ruangan'),
                'jurusan' => $this->input->post('jurusan'),
                'akreditasi' => $this->input->post('akreditasi'),
                'nama_kaprodi' => $this->input->post('nama_kaprodi'),
                'tahun_berdiri' => $this->input->post('tahun_berdiri'),
                'output_lulusan' => $this->input->post('output_lulusan'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/prodi/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['prodi']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/prodi/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Prodi_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success"
            role="alert"><i fa-info-circle"></i>Data Prodi Berhasil Diubah!</div>');
            redirect('Prodi');
        }
    }
}
