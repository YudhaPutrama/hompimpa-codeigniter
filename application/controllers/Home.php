<?php
class Home extends PT_Controller {
    public function index(){
        $this->view_template('homepage');
    }
    public function sticky(){
        $this->load->view('sticky');
    }
    public function login(){
        $this->authentication->set_auth(5);
        redirect("home/test_guest");
    }

    public function test_guest(){
        $this->need_login();
        echo "This is private data";
    }
    public function logout(){
        $this->authentication->clear_auth();
        $this->authentication->guest_redirect_to();
    }
}