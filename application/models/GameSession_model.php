<?php
class GameSession_model extends PT_Model {
    protected $table_name = "SESI_PEMAINAN";

    public $id;
    public $tanggal;
    public $waktu;
    public $id_pengguna;
    public $id_permainan;
    public $tipe_permainan;
    public $nilai;
    public $duration;

}