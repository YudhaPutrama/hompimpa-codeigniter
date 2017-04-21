<?php
class Game_model extends PT_Model {
    protected $table_name="PERMAINAN";

    public $id;
    public $slug;
    public $nama_permainan;
    public $avatar;
    public $gambar;
    public $script;
    public $id_pengguna;

}