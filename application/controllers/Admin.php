<?php

/**
 * @property  Tag_model tag_model
 * @property  Category_model category_model
 * @property  CI_Upload upload
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
        $this->set_data('categories', $this->category_model->get_other());
//        var_dump($this->category_model->get_other());
//        var_dump($this->category_model->get_all());
        $this->load->view('admin/category', $this->data);
    }

    //Category New
    public function category_new(){
        $data = array(
            'NAMA_KATEGORI'=>$this->input->post('nama_kategori'),
            'KODE_KATEGORI'=>strtolower(url_title($this->input->post('nama_kategori')))
        );

        $te = $this->category_model->tambah($data);
//        var_dump($te);
        redirect('admin/category');
    }

    //Category View
    public function category_view(){
        $this->load->view('admin/article', $this->data);
    }

    //Category Update
    public function category_update($kode){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run()==true){
            $data = array(
                'KODE_KATEGORI' => $this->input->post('kode'),
                'NAMA_KATEGORI' => $this->input->post('nama')
            );
            $this->category_model->update($kode, $data);
            redirect('admin/category');
        }
        $this->set_data('category', $this->category_model->get($kode));
        $this->load->view('admin/category-edit', $this->data);
    }

    //Category Delete
    public function category_delete($kode){
        $category = new Category_model();
        $category->kode_kategori = $kode;
        $category->delete();
        redirect('admin/category');
    }

    //Article
    public function comment(){
        $this->load->view('admin/comment', $this->data);
    }

    //Article
    public function tag(){
        $this->set_data('tags', $this->tag_model->get());
        $this->load->view('admin/tag', $this->data);
    }

    //Article
    public function tag_new(){
        $data = array(
            'NAMA_TAG'=>$this->input->post('nama'),
            'KODE_TAG'=>strtolower(url_title($this->input->post('nama')))
        );

        $te = $this->tag_model->tambah($data);
        redirect('admin/tag');
//        $this->load->view('admin/tag', $this->data);
    }

    //Article
    public function tag_update($kode){
//        redirect('admin/tag');
//        echo $kode;
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run()==true){
            $data = array(
                'KODE_TAG' => $this->input->post('kode'),
                'NAMA_TAG' => $this->input->post('nama')
            );
            $this->tag_model->update($data['KODE_TAG'], $data);
            redirect('admin/tag');
        }
        $this->set_data('tag', $this->tag_model->get($kode));
        $this->load->view('admin/tag-edit', $this->data);
    }

    //Article
    public function tag_delete($kode){
        $tag = new Tag_model();
        $tag->kode_tag = $kode;
        $tag->remove();
        redirect('admin/tag');
//        $this->load->view('admin/article', $this->data);
    }

    //Article
    public function game(){
        $this->set_data('games', $this->game_model->get());
        $this->load->view('admin/game', $this->data);
    }

    //Article
    public function game_score(){
        $this->load->view('admin/game-score', $this->data);
    }

    //Article
    public function game_new(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama','Nama','required');
        if ($this->form_validation->run()==true){
            $this->load->library('upload');
            if ($this->upload->do_upload('gambar') && $this->upload->do_upload('script')){
                redirect('admin/game');
            } else {
                $this->set_data('message', 'Error upload data');
            }
        }
        $this->load->view('admin/game-new', $this->data);
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
        redirect('admin/tag');
//        $this->load->view('admin/game', $this->data);
    }

    //User List
    public function user(){
        $this->set_data('members',[]);
        $this->load->view('admin/user', $this->data);
    }

    //User
    public function user_role(){
        $this->set_data('roles',[]);
        $this->load->view('admin/role', $this->data);
    }


    //User
    public function user_view(){
        $this->load->view('admin/user-detail', $this->data);
    }

    //User
    public function user_update(){
        redirect('admin/user');
//        redirect('/admin/user');
    }

    //User
    public function user_delete(){
        redirect('/admin/user');
    }

    //user
    public function ranking(){
        $this->set_data('rankings',[]);
        $this->load->view('admin/ranking', $this->data);
    }

}