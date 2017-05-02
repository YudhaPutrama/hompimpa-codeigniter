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
    public function article_view($slug){
        $article = $this->article_model->get_news_by_slug($slug);
        $this->set_data('article', $article);
        $this->load->view('admin/article-edit', $this->data);
    }

    //Article Update
    public function article_update($slug){

        redirect('admin/article');
    }

    //Article Delete
    public function article_delete($slug){
        $this->article_model->delete_news($slug);
        redirect('/admin/article');
    }

    //Category
    public function category(){
        $this->set_data('categories', $this->category_model->get_all());
//        var_dump($this->category_model->get_all());
        $this->load->view('admin/category', $this->data);
    }

    //Category New
    public function category_new(){
        $data = array(
            'nama'=>$this->input->post('nama_kategori'),
            'kode'=>url_title($this->input->post('nama_kategori'))
        );
        $category = new Category_model();
        $category->kode_kategori = $data['kode'];
        $category->nama_kategori = $data['nama'];
        $category->save();
        redirect('admin/category');
    }

    //Category View
    public function category_view(){
        $this->load->view('admin/article', $this->data);
    }

    //Category Update
    public function category_update(){
        redirect('admin/category');
    }

    //Category Delete
    public function category_delete(){
        redirect('admin/category');
    }

    //Article
    public function tag(){
        $this->load->view('admin/tag', $this->data);
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
        $this->load->view('admin/game', $this->data);
    }

    //Article
    public function game_score(){
        $this->load->view('admin/game', $this->data);
    }

    //Article
    public function game_new(){
        $this->load->view('admin/game', $this->data);
    }

    //Article
    public function game_view(){
        $this->load->view('admin/game', $this->data);
    }

    //Article
    public function game_update(){
        $this->load->view('admin/game', $this->data);
    }

    //Article
    public function game_delete(){
        $this->load->view('admin/game', $this->data);
    }

    //User List
    public function user(){
        $this->load->view('admin/article', $this->data);
    }

    //User
    public function user_role(){
        $this->load->view('admin/role', $this->data);
    }


    //User
    public function user_view(){
        $this->load->view('admin/article', $this->data);
    }

    //User
    public function user_update(){
        redirect('/admin/user');
    }

    //User
    public function user_delete(){
        redirect('/admin/user');
    }

    //user
    public function ranking(){
        $this->load->view('admin/ranking', $this->data);
    }

}