<?php
class Category_model extends PT_Model {
    protected $table_name = "KATEGORI";

    public $kode_kategori;
    public $nama_kategori;

    public function save(){
        if (is_null($this->kode_kategori)||is_null($this->nama_kategori)) return false;
        // Check kode kategori
        $num = $this->db->where("KODE_KATEGORI",$this->kode_kategori)->get($this->table_name)->num_rows();

        $data = [
            "KODE_KATEGORI"=>$this->kode_kategori,
            "NAMA_KATEGORI"=>$this->nama_kategori
        ];

        if ($num>0){
            // Update
            return $this->db->where("KODE_KATEGORI", $this->kode_kategori)->update($this->table_name, $data);
        } else {
            // Insert
            return $this->db->insert($this->table_name, $data);
        }
    }

    public function get(){
        if (is_null($this->kode_kategori)) return false;
        return $this->db->where("KODE_KATEGORI", $this->kode_kategori)->get($this->table_name)->row_array();
    }

    public function delete(){
        if (is_null($this->kode_kategori)) return false;
        return $this->db->where("KODE_KATEGORI", $this->kode_kategori)->delete($this->table_name);
    }

    public function posts(){
        $query = $this->db->where('KODE_KATEGORI',$this->kode_kategori);
        $query = $query->get("ARTIKEL");
        return $query->result_array();
    }
}