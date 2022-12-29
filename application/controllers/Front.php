<?php

class Front extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'WI | Group 1';
        $data['tema'] = $this->ThemesModel->get_all_themes()->result_array();
        $this->load->view('front/index', $data);
    }

}
