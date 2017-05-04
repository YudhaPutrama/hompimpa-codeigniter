<?php
class Berita_model extends PT_Model {
    public function insert($data){
        return $this->db->insert('BERITA', $data);
    }

    public function get_profil(){
        return $this->db->query("SELECT NAMA_LENGKAP, AVATAR, BERITA, CREATED_AT FROM PENGGUNA, BERITA WHERE PENGGUNA.USERNAME=BERITA.USERNAME_PENGGUNA")->result_array();
        return $this->db->get('BERITA', 10)->result_array();
    }
}