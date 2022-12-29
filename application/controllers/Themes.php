<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Themes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
	{
        $data['title'] = 'Themes';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tema'] = $this->ThemesModel->get_all_themes()->result_array();


		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('themes/index', $data);
        $this->load->view('templates/footer');
	}

    public function delete()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ThemesModel->deleteThemes($where);
        redirect('Admin/themes');
    }
}