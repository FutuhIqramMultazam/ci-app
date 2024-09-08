<?php

class Home extends CI_Controller
{
    public function index($nama = "")
    {
        $data["nama"] = $nama;
        $data["judul"] = "Halaman Home";
        $this->load->view("layout/header", $data);
        $this->load->view("home/index", $data);
        $this->load->view("layout/footer");
    }
}
