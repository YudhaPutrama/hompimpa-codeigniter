<?php

class Comment_model extends PT_Model {
    protected $table_name = "KOMENTAR_ARTIKEL";

    public $id;
    public $id_artikel;
    public $id_pengguna;
    public $komentar;
    public $created_at;
}