<?php
class Gallery_model extends PT_Model {
    protected $table_name = "GAMBAR";

    public $id;
    public $tipe_gambar;
    public $judul;
    public $nama_file;
    public $id_pengguna;

    public function save(){
        $data = [
            'ID'=>$this->id,
            'TIPE_GAMBAR'=>$this->tipe_gambar,
            'JUDUL'=>$this->judul,
            'NAMA_FILE'=>$this->nama_file,
            'ID_PENGGUNA'=>$this->id_pengguna
        ];
        if (is_null($this->id)){
            return $this->db->insert($this->table_name, $data);
        } else {
            if ($this->db->where("ID",$this->id)->get($this->table_name)->num_rows()>0){
                // Update
                return $this->db->where("ID", $this->id)->update($this->table_name);
            } else {
                // Insert
                return $this->db->insert($this->table_name, $data);
            }
        }
    }

    public function get($id=null){
        if ($id==null){
            return $this->db->get($this->table_name)->result_array();
        } else {
            return $this->db->where("ID", $id)->get($this->table_name)->row_array();
        }
    }

    public function remove($id=null){
        if ($id==null){
            if(is_null($this->id)){
                return false;
            } else {
                return $this->db->where("ID", $this->id)->get($this->table_name);
            }
        }
        return $this->db->where("ID",$id)->get($this->table_name);
    }
}