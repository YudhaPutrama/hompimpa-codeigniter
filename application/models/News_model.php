<?php

/**
 * @property  CI_DB_query_builder db
 */
class News_model extends PT_Model {
    
    /**
	 * Get some articles
	 *
	 * @param	integer $limit	Limit result of data
	 * @return	mixed
	 */
    public function get_all_news($limit = 0) {
        $query = $this->db->get("NEWS");
        // $query = $this->db->query("SELECT * FROM news");
        return $query->result_array();

        
    }

    /**
	 * Get detail of article by slug
	 *
	 * @param	string    $slug	Value for slug article
	 * @return	mixed|string[]
	 */
    public function get_news_by_slug($slug) {
        $query = $this->db->get_where('NEWS', array('SLUG' => $slug));
        // $query = $this->db->query("SELECT * FROM NEWS WHERE slug='".$slug."'");
        return $query->row_array();
    }

    /**
	 * Get a article by id
	 *
	 * @param	int    $id	Value for id article
	 * @return	mixed|string[]
	 */
    public function get_news_by_id($id) {
        $query = $this->db->get_where('NEWS', array('ID' => $id));
        return $query->row_array();
    }

    /**
	 * Create new article
	 *
	 * @param	string[]    $data	Value for data field
	 * @return	bool
	 */
    public function set_news($data) {
//        $query =  $this->db->query("INSERT INTO NEWS(TITLE, SLUG, TEXT) VALUES('"
//            .$data['TITLE']."','"
//            .$data['SLUG']."','"
//            .$data['TEXT']."')");
        $query = $this->db->insert('NEWS', $data);
        return $query;
    }

    /**
	 * Update article data
	 *
	 * @param	string    $slug	New value for article
     * @param	string[]    $data	New value for article
	 * @return	bool
	 */
    public function update_news($slug, $data){

//        $query = "UPDATE NEWS SET "
//            ."TITLE='".$data['TITLE']."',"
//            ."TEXT='".$data['TEXT']."' "
//            // ."SLUG='".$data['SLUG']."' "
//            ."WHERE SLUG='".$slug."'";
//        return $this->db->query($query);
        $query = $this->db->where('SLUG', $slug);
        return $query->update('NEWS', $data);
    }

    /**
	 * Delete article by slug
	 *
	 * @param	string    $slug	New value for article
	 * @return	mixed
	 */
    public function delete_news($slug) {
        $query = "DELETE FROM NEWS WHERE SLUG='".$slug."'";
        return $this->db->query($query);
    }

    /**
     * Change article category
     *
     * @param    string $slug New value for article
     * @param string $category category slug
     * @return mixed
     */
    public function set_category($slug, $category) {

    }

    /**
	 * Get number of news using oracle function
	 *
	 * @return	mixed
	 */
    public function get_count_news(){
        return $this->db->query("SELECT SUM_NEWS FROM DUAL");
    }
}