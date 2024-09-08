<?php
class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mahasiswa_model");
        // kalo satu controller membutuhkan model ini, maka panggilnya di construc
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["judul"] = "Daftar Mahasiswa";
        $data["mahasiswa"] = $this->Mahasiswa_model->getAllMhs();
        if ($this->input->post("keyword")) {
            $data["mahasiswa"] = $this->Mahasiswa_model->cariDataMahasiswa();
        }
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/index", $data);
        $this->load->view("layout/footer");
    }

    public function tambah()
    {
        $data["judul"] = "Tambah Data Mahasiswa";
        $this->form_validation->set_rules('nama', 'Email', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("mahasiswa/tambah");
            $this->load->view("layout/footer");
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata("flash", "Ditambahkan");
            redirect('mahasiswa');
        }
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata("flash", "Dihapus");
        redirect("mahasiswa");
    }

    public function detail($id)
    {
        $data["judul"] = "Detail Data Mahasiswa";
        $data["mahasiswa"] = $this->Mahasiswa_model->getMhsById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/detail", $data);
        $this->load->view("layout/footer");
    }

    public function ubah($id)
    {
        $data["judul"] = "Ubah Data Mahasiswa";
        $data["mahasiswa"] = $this->Mahasiswa_model->getMhsById($id);
        $data["jurusan"] = ["Sistem Informasi", "Teknik Informatika", "Teknik Sipil", "Teknik Industri", "Arsitek"];

        $this->form_validation->set_rules('nama', 'Email', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("mahasiswa/ubah", $data);
            $this->load->view("layout/footer");
        } else {
            $this->Mahasiswa_model->ubahDataMahasiswa();
            $this->session->set_flashdata("flash", "Diubah");
            redirect('mahasiswa');
        }
    }
}
