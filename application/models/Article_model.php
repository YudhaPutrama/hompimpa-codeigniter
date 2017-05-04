<?php

/**
 * @property  CI_DB_query_builder db
 */
class Article_model extends PT_Model {
    protected $table_name = "ARTIKEL";

    public $id;
    public $slug;
    public $judul;
    public $konten;
    public $kode_kategori;
    public $id_pengguna;
    public $id_permainan;
    public $hide;

    /**
	 * Get some articles
	 *
	 * @param	integer $limit	Limit result of data
	 * @return	mixed
	 */
    public function get_all_news($limit = null, $offset=null) {
        $query = $this->db->order_by('CREATED_AT','DESC')->get($this->table_name, $limit, $offset);
        // $query = $this->db->query("SELECT * FROM $this->table_name");
//        return $query->result_array();
        return $query->result_array();
    }

    /**
	 * Get detail of article by slug
	 *
	 * @param	string    $slug	Value for slug article
	 * @return	mixed|string[]
	 */
    public function get_news_by_slug($slug) {
        //$query = $this->db->get_where($this->table_name, array('SLUG' => $slug));
        $query = $this->db->query("SELECT * FROM ARTIKEL B, PENGGUNA P WHERE slug='$slug' AND B.ID_PENGGUNA=P.ID");
        return $query->row_array();
    }

    /**
	 * Get a article by id
	 *
	 * @param	int    $id	Value for id article
	 * @return	mixed|string[]
	 */
    public function get_news_by_id($id) {
        $query = $this->db->get_where($this->table_name, array('ID' => $id));
        return $query->row_array();
    }

    /**
	 * Create new article
	 *
	 * @param	string[]    $data	Value for data field
	 * @return	bool
	 */
    public function save_news() {
        if (is_null($this->judul)|| is_null($this->id_pengguna))return false;
        if (is_null($this->slug)) $this->slug=strtolower(url_title($this->judul));
        $data = [
            "ID"=>$this->id,
            "SLUG"=>$this->slug,
            "JUDUL"=>$this->judul,
            "KONTEN"=>$this->konten,
            "ID_PENGGUNA"=>$this->id_pengguna,
            "KODE_KATEGORI"=>$this->kode_kategori,
            "ID_PERMAINAN"=>$this->id_permainan
        ];

        if (is_null($this->id)==false){
            return $this->db->insert($this->table_name, $data);
        }
        $row = $this->db->get_where($this->table_name, "ID=".$this->id)->num_rows();
        if ($row>0){
            return $this->db->where("ID",$this->id)->update($this->table_name, $data);
        }
        return $this->db->insert($this->table_name, $data);
    }

    /**
	 * Delete article by slug
	 *
	 * @param	string    $slug	New value for article
	 * @return	mixed
	 */
    public function delete_news($identifier) {
        if (is_numeric($identifier)){
            $query = "DELETE FROM ".$this->table_name." WHERE ID='".$identifier."'";
            return $this->db->query($query);
        } else {
            $query = "DELETE FROM ".$this->table_name." WHERE SLUG='".$identifier."'";
            return $this->db->query($query);
        }

    }

    /**
     * Change article category
     *
     * @param    string $slug New value for article
     * @param string $category category slug
     * @return mixed
     */
    public function set_category($slug, $category) {
        $query = "UPDATE ".$this->table_name." SET KODE_KATEGORI='".$category."' WHERE SLUG='".$slug."'";
        return $this->db->query($query);
    }

    public function get_articles_users(){
        $query = "SELECT A.SLUG, A.JUDUL, P.NAMA_LENGKAP PENGGUNA, A.NUM_LIKE, A.CREATED_AT
        FROM ARTIKEL A, PENGGUNA P WHERE A.ID_PENGGUNA=P.ID";
        $query = $this->db->query($query);
        return $query->result_array();
    }

    /**
	 * Get number of news using oracle function
	 *
	 * @return	mixed
	 */
    public function get_count_news($userId=null){
        if ($userId==null)
            return $this->db->query("SELECT JUMLAH_ARTIKEL() JUMLAH FROM DUAL")->row_array()['JUMLAH'];
        else {
            return $this->db->query("SELECT JUMLAH_ARTIKEL() JUMLAH FROM DUAL")->row_array()['JUMLAH'];
        }
    }

    /**
     * Set tag in article
     * @param $tags string|array
     * @param $article integer
     *
     * @return bool
     */
    public function set_tags($tags, $article=null){
        if (is_null($article)&&is_null($this->id)) return false;
        else if (is_null($article)) $article = $this->id;
        if (is_array($tags)){
            $query = "";
        } else {

        }
    }
}