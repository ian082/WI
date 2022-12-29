<?php

class Order_model extends CI_Model
{

    public function simpan_data_awal()
    {
        $username = str_replace(" & ", "-", strtolower($this->input->post("inisial")));
        mkdir("assets/users/" . $username);
        $data = [
            'id_undangan' => null,
            'username' => $username,
            'inisial' => $this->input->post("inisial"),
            'gambar_cover' => $_FILES['cover']['name'],
            'musik' => 'music.mp3',
            'themes' => $this->input->post("tema"),
            'agama' => $this->input->post("agama"),
        ];

        if ($this->db->insert("undangan", $data)) {
            $this->upload_cover($username);
            redirect("next/data_mempelai");
        } else {
            redirect("pesan/data_awal");
        }
    }

    public function data_mempelai()
    {
        $username = str_replace(" & ", "-", strtolower($this->input->post("inisial")));
        mkdir("assets/users/" . $username);
        $data = [
            'id_undangan' => null,
            'username' => $username,
            'inisial' => $this->input->post("inisial"),
            'gambar_cover' => $_FILES['cover']['name'],
            'musik' => 'music.mp3',
            'themes' => $this->input->post("tema"),
            'agama' => $this->input->post("agama"),
        ];

        if ($this->db->insert("undangan", $data)) {
            $this->upload_cover($username);
            redirect("next/data_mempelai");
        } else {
            redirect("pesan/data_awal");
        }
    }

    //Upload Cover
    private function upload_cover($user)
    {

        $upload_image = $_FILES['cover']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '2048'; //ukuran gambar KB
            $config['upload_path'] = './assets/users/' . $user;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('cover')) {
                $this->upload->data('file_name');
            } else {
                $this->upload->display_errors();
            }
        }
    }
}
