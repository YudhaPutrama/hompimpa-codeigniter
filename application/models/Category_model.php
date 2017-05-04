<?php
class Category_model extends PT_Model {
    protected $table_name = "KATEGORI";

    public $kode_kategori;
    public $nama_kategori;

    public function tambah($data){
        return $this->db->insert($this->table_name, $data);
    }

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

    public function get($kode=null){
        if (is_null($kode)==false) return $this->db->where(
            'KODE_KATEGORI',
            $kode
        )->get($this->table_name)->row_array();
        //if (is_null($this->kode_kategori)) return array();
        return $this->db->where("KODE_KATEGORI", $this->kode_kategori)->get($this->table_name)->row_array();
        // return $this->db->
    }

    public function get_other()
    {
        $sql = "SELECT KAT.KODE_KATEGORI KODE, KAT.NAMA_KATEGORI NAMA, COUNT(ART.ID) JUMLAH
FROM KATEGORI KAT, ARTIKEL ART
WHERE KAT.KODE_KATEGORI = ART.KODE_KATEGORI GROUP BY KAT.KODE_KATEGORI";
        return $this->db->get($this->table_name)->result_array();
    }

    public function get_all()
    {

        return $this->db->query(
            'SELECT KATEGORI.KODE_KATEGORI, KATEGORI.NAMA_KATEGORI FROM KATEGORI, ARTIKEL WHERE KATEGORI.KODE_KATEGORI = ARTIKEL.KODE_KATEGORI')
            ->result_array();
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

    public function update($kode, $data){
        return $this->db->where('KODE_KATEGORI', $kode)->update($this->table_name, $data);
    }
}