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


    public function save(){
        $data = [
            'ID'=>$this->id,
            'SLUG'=>$this->slug,
            'NAMA_PERMAINAN'=>$this->nama_permainan,
            'AVATAR'=>$this->avatar,
            'GAMBAR'=>$this->gambar,
            'SCRIPT'=>$this->script,
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

    /**
     * Get number of news using oracle function
     *
     * @return	mixed
     */
    public function get_count_game($userId=null){
        if ($userId==null)
            return $this->db->query("SELECT JUMLAH_PERMAINAN() JUMLAH FROM DUAL")->row_array()['JUMLAH'];
        else {
            return $this->db->query("SELECT JUMLAH_PERMAINAN() JUMLAH FROM DUAL")->row_array()['JUMLAH'];
        }
    }
}