<?php

/**
 * @property  News_model news_model
 * @property  CI_Form_validation form_validation
 * @property  CI_Input input
 */
class Article extends PT_Controller {

    /**
     *  List of articles
     */
    public function index(){
        $data['title'] = 'News archive';
        $data['news'] = $this->news_model->get_all_news();

        $this->view_template('news/index',$data);
    }

    /**
     * View article detail
     *
     * @param null $slug
     */
    public function view($slug = NULL){
        $data['news_item'] = $this->news_model->get_all_news($slug);
        if (empty($data['news_item'])){
                show_404();
        }

        $data['title'] = $data['news_item']['TITLE'];
        $this->load->view('artikel/detail');
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
            $data['news_item'] = $this->news_model->get_news_by_slug($slug);
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
            if($this->news_model->update_news($slug, $data)) redirect('/article');
            $this->view_template('news/edit');
        }
    }

    /**
     * @param $slug
     */
    public function delete($slug){
        if($slug!=NULL) $this->news_model->delete_news($slug);
        redirect('/article');
    }

    /**
     *
     */
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a news item';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->view_template('news/create');
        }
        else
        {
             $slug = url_title($this->input->post('title'), 'dash', TRUE);
             $data = array(
                 'TITLE' => $this->input->post('title'),
                 'SLUG' => $slug,
                 'TEXT' => $this->input->post('content'),
             );
            $this->news_model->set_news($data);
            redirect('/article');
        }
    }


}