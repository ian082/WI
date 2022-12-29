<?php


class Ucapan extends CI_Controller
{


    public function tambah()
    {
        $post = $this->input->post();
        $this->id_ucapan = null;
        $this->id_undangan = strip_tags($post["id"]);
        $this->nama_tamu = strip_tags($post["nama"]);
        $this->isi_ucapan = strip_tags($post["komentar"]);
        $this->date = date("Y-m-d H:i:s");
        if ($this->db->insert("ucapan", $this)) {
            $output = array(
                "error_code" => 0,
                "status" => "sukses",
                "nama" => strip_tags($post["nama"]),
                "komentar" => strip_tags($post["komentar"]),
            );
        } else {
            $output = array(
                "error_code" => 2,
                "status" => "gagal",
                "nama" => strip_tags($post["nama"]),
                "komentar" => strip_tags($post["komentar"]),
            );
        }
        echo json_encode($output);
    }
}
