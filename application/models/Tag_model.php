<?php
class Tag_model extends PT_Model {
    protected $table_name = "TAG";

    public $kode_tag;
    public $nama_tag;

    public function save(){
        if (is_null($this->kode_tag)||is_null($this->nama_tag)) return false;
        $data = [
            "KODE_TAG"=>$this->kode_tag,
            "NAMA_TAG"=>$this->nama_tag
        ];
        if ($this->db->where("KODE_TAG", $this->kode_tag)->get($this->table_name)->num_rows()>0) {
            // Update
            return $this->db->where("KODE_TAG", $this->kode_tag)->update($this->table_name, $data);
        } else {
            // Insert
            return $this->db->insert($this->table_name, $data);
        }
    }

    public function get($kode=null){
        if ($kode==null){
            return $this->db->get($this->table_name)->result_array();
        } else {
            return $this->db->where("KODE_TAG", $kode)->get($this->table_name)->row_array();
        }
    }

    public function update($kode, $data){
        $this->db->where('KODE_TAG', $kode)->update($this->table_name, $data);

    }

    public function detachAll($kode_tag){
        return $this->db->where("KODE_TAG", $kode_tag)->delete("TAG_ARTIKEL");
    }

    public function remove(){
        return $this->db->where("KODE_TAG", $this->kode_tag)->delete($this->table_name);
    }

    public function tambah($data)
    {
        return $this->db->insert($this->table_name, $data);
    }
}