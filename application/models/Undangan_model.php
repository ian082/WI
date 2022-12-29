<?php


class Undangan_model extends CI_Model
{

    public function show($username)
    {
        $this->db->select("*");
        $this->db->from("undangan");
        $this->db->join('mempelai', 'mempelai.id_undangan = undangan.id_undangan');
        $this->db->join('acara', 'acara.id_undangan = undangan.id_undangan');
        $this->db->join('norek', 'norek.id_undangan = undangan.id_undangan');
        $this->db->where("undangan.username", $username);
        return $this->db->get()->row();
    }

    public function album($id)
    {
        $this->db->select("*");
        $this->db->from("album");
        $this->db->where("id_undangan", $id);
        return $this->db->get()->result();
    }

    public function ucapan($id)
    {
        $this->db->select("*");
        $this->db->from("ucapan");
        $this->db->where("id_undangan", $id);
        $this->db->order_by("id_ucapan", "DESC");
        return $this->db->get()->result();
    }
}
