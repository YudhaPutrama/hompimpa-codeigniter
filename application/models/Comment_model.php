<?php

class Comment_model extends PT_Model {
    protected $table_name = "KOMENTAR_ARTIKEL";

    public function post($id_post, $id_user, $content){
        $data = [
            'ID_ARTIKEL' => $id_post,
            'ID_PENGGUNA' => $id_user,
            'KONTENT' => $content
        ];
        return $this->db->insert('KOMENTAR_ARTIKEL',$data);
    }

    public function get_by_posts($id_post){
        $query = $this->db->where("ID_ARTIKEL",$id_post);
        return $query->get("KOMENTAR_ARTIKEL")->result_array();
    }

    public function get_by_user($id_user){
        $query = $this->db->where("ID_PENGGUNA",$id_user);
        return $query->get("KOMENTAR_ARTIKEL")->result_array();
    }

    public function get($id){
        $query = $this->db->where("ID", $id);
        return $query->get("KOMENTAR_ARTIKEL")->row_array();
    }

    public function remove($id){
        $query = $this->db->where("ID", $id);
        return $query->delete("KOMENTAR_ARTIKEL");
    }

    public function get_list(){
        return $this->db->query("
        SELECT A.ID, A.KOMENTAR, B.JUDUL, C.NAMA_LENGKAP FROM KOMENTAR_ARTIKEL A, ARTIKEL B, PENGGUNA C WHERE A.ID_ARTIKEL=B.ID AND A.ID_PENGGUNA=C.ID
        ")->result_array();
    }
}