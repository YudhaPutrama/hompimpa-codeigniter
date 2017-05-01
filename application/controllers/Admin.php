<?php

/**
 * @property  Tag_model tag_model
 * @property  Category_model category_model
 */
class Admin extends PT_Controller {

//    protected $need_auth = true;

    /**
     * Admin constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->need_login();
        $this->need_admin_level();
    }

    public function index(){
        $this->load->view('admin/dashboard', $this->data);
    }

    //Notification
    public function notification(){
        $this->load->view('admin/notification', $this->data);
    }

    //Article
    public function article(){
        $this->set_data('articles',$this->article_model->get_articles_users());
        $this->load->view('admin/article', $this->data);
    }

    //Article New
    public function article_new(){
//        var_dump($this->input->post());
//        var_dump($this->authentication->get_user()['ID']);
        $article = new Article_model();
        $article->judul = $this->input->post('judul');
        $article->slug = url_title($article->judul);
        $article->id_pengguna = $this->authentication->get_user()['ID'];
        $article->konten = $this->input->post('konten');
        $article->kode_kategori = $this->input->post('kategori');
        $article->id_permainan = $this->input->post('permainan');
        if($article->save_news()){
            $this->set_data('message', 'Berhasil menambahkan');
        }
//        var_dump($article);
        $this->set_data('tags',$this->tag_model->get());
        $this->set_data('categories',$this->category_model->get());
        $this->set_data('games',$this->game_model->get());
        $this->load->view('admin/article-new', $this->data);
    }

    //Article View
    public function article_view(){
        $this->load->view('admin/article', $this->data);
    }

    //Article Update
    public function article_update(){
        $this->load->view('admin/article', $this->data);
    }

    //Article Delete
    public function article_delete(){
        $this->load->view('admin/article', $this->data);
    }

    //Category
    public function category(){
        $this->load->view('admin/article', $this->data);
    }

    //Category New
    public function category_new(){
        $this->load->view('admin/article', $this->data);
    }

    //Category View
    public function category_view(){
        $this->load->view('admin/article', $this->data);
    }

    //Category Update
    public function category_update(){
        $this->load->view('admin/article', $this->data);
    }

    //Category Delete
    public function category_delete(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function tag(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function tag_new(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function tag_view(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function tag_update(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function tag_delete(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function game(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function game_score(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function game_new(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function game_view(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function game_update(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function game_delete(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function user(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function user_role(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function user_new(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function user_view(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function user_update(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function user_delete(){
        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function ranking(){
        $this->load->view('admin/article', $this->data);
    }

}