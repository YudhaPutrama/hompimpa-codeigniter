<?php

/**
 * @property  CI_Pagination pagination
 */
class Article extends PT_Controller {

    /**
     *  List of articles
     */
    public function index($page=null){
        $this->load->library('pagination');

        $config['base_url'] = base_url('/article');
        $config['total_rows'] = $this->article_model->get_count_news();
//        $config['total_rows'] = 200;
        $config['per_page'] = 15;
        $config['full_tag_open'] = '<div class="ui buttons">';
        $config['full_tag_close'] = '</div>';
        $config['cur_tag_open'] = '<button class="blue ui button">';
        $config['cur_tag_close'] = '</button>';
        $config['num_tag_open'] = '<button class="ui button">';
        $config['num_tag_close'] = '</button>';
        $config['use_global_url_suffix'] = FALSE;


        $this->pagination->initialize($config);

        if (is_null($page)){
            $this->set_data('posts', $this->article_model->get_all_news($config['per_page']));
        } else {
            $this->set_data('posts', $this->article_model->get_all_news($config['per_page'],$page));
        }
        $this->set_data('page_max',$this->article_model->get_count_news());
        //var_dump($this->article_model->get_count_news());
        $this->load->view('article/list', $this->data);
    }

    /**
     * View article detail
     *
     * @param null $slug
     */
    public function view($slug = NULL){
        $article = $this->article_model->get_news_by_slug($slug);
        if (empty($article)) show_404();
        $this->get_userdata();
        $this->set_data('post', $article);
        $this->set_data('comments', []);
        //var_dump($this->data['post']);
        $this->load->view('article/detail',$this->data);
    }

    /**
     * Edit a article
     * @param $slug
     */
    public function edit($slug){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $data['news_item'] = $this->article_model->get_news_by_slug($slug);
            if (empty($data['news_item'])){
                    show_404();
            }


            $data['title'] = $data['news_item']['TITLE'];

            $this->view_template('news/edit',$data);

        }
        else
        {
            $slug = url_title($this->input->post('title'), 'dash', TRUE);

            $data = array(
                'TITLE' => $this->input->post('title'),
                'TEXT' => $this->input->post('content')
            );
            if($this->article_model->update_news($slug, $data)) redirect('/article');
            $this->view_template('news/edit');
        }
    }

    /**
     * @param $slug
     */
    public function delete($slug){
        if($slug!=NULL) $this->article_model->delete_news($slug);
        redirect('/article');
    }

    /**
     *
     */
    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a news item';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Text', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->view_template('news/create');
        } else {
             $slug = url_title($this->input->post('title'), 'dash', TRUE);
             $data = array(
                 'TITLE' => $this->input->post('title'),
                 'SLUG' => $slug,
                 'TEXT' => $this->input->post('content'),
             );
            $this->article_model->set_news($data);
            redirect('/article');
        }
    }

    public function search($key){

    }
    public function count(){
        var_dump($this->article_model->get_count_news());
    }
}