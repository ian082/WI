<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ThemesModel extends CI_Model
{
    public function get_all_themes()
    {
        return $this->db->get('themes');
    }

    public function deleteThemes($where = null)
    {
        $this->db->delete('themes', $where);
    }
}