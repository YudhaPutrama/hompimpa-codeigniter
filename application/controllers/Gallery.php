<?php
class Gallery extends PT_Controller {
    public function index(){
        $dump[] = array(
            'NAMA_FILE'=>'images5.jpg',
            'JUDUL'=>'Cantik'
        );
        $gambar = $this->db->get('GAMBAR')->result_array();

        $this->set_data('galleries',$gambar);
        $this->load->view('gallery', $this->data);
    }

    public function detail($id){

    }


    public function like($id){

    }

    public function comment($id){

    }

    public function like_ajax($id){

    }

    public function comment_ajax($id){

    }
}