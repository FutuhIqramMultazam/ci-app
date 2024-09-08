<?php

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mahasiswa_model");
    }

    public function index()
    {
        $data["judul"] = "About Me";
        $data["name"] = "Futuh Iqram Multazam";
        $this->load->view("layout/header", $data);
        $this->load->view("about/index", $data);
        $this->load->view("layout/footer");
    }

    public function he()
    {
        $data["judul"] = "About he";
        $data["name"] = "Fadilah Iqram Multazam";
        $this->load->view("layout/header", $data);
        $this->load->view("about/he", $data);
        $this->load->view("layout/footer");
    }
}
