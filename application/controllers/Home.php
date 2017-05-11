<?php
class Home extends PT_Controller {

    public function index(){

        $this->set_data('posts', $this->article_model->get_all_news(2));
        $this->load->view('home',$this->data);
    }

    public function contact(){

    }
}