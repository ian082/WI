<?php

class Order extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("order_model");
    }

    public function index($tema = null)
    {
        if (!$tema)
            redirect(base_url());
        $data['title'] = 'WI | Order';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['theme'] = $tema;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('order/data_awal', $data);
        $this->load->view('templates/footer');
    }

    public function data_mempelai()
    {
        $data['title'] = 'WI | Order - Data Mempelai';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('order/data_mempelai', $data);
        $this->load->view('templates/footer');
    }

    public function acara()
    {
        $data['title'] = 'WI | Order - Acara';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('order/acara', $data);
        $this->load->view('templates/footer');
    }

    public function norek()
    {
        $data['title'] = 'WI | Order - Rekening';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('order/norek', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_data_awal()
    {
        $this->order_model->simpan_data_awal();
    }
}
