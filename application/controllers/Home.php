<?php
class Home extends PT_Controller {
    public function index(){
        $this->view_template('homepage');
    }
    public function sticky(){
        $this->load->view('sticky');
    }
}