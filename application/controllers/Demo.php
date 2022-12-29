<?php

class Demo extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("undangan_model");
    }

    public function index($themes = null, $username = null, $nama = null)
    {
        if (!$username) {
            echo "<script>alert('Mau Bikin Undangn Online Gratis? Follow dan DM saja'); window.location = 'https://www.instagram.com/im_nothing_99/';</script>";
            die();
        }
        if ($themes == null) {
            redirect(base_url());
        }

        if ($nama != null) {
            $data['nama'] = $nama;
        }
        $data["themes"] = $themes;
        $data['username'] = $username;
        $data["show"] = $this->undangan_model->show($username);
        $data["album"] = $this->undangan_model->album($this->undangan_model->show($username)->id_undangan);
        $data["ucapan"] = $this->undangan_model->ucapan($this->undangan_model->show($username)->id_undangan);
        $this->load->view('demo/index', $data);
    }
}
