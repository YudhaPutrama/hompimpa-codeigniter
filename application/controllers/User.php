<?php

/**
 * @property  User_model user_model
 */
class User extends PT_Controller {
    /**
     * User constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->need_login();
    }

    public function index(){

    }

    public function me(){
        $user = $this->authentication->get_user();
        $data = [
            'user' => $user
        ];

        $this->load->view('profile',$data);
    }

    public function view($username){
        $user = $this->user_model->get_by_username('YUDHAPUTRAMA');
        var_dump($user);
    }

    public function logout(){
        $this->authentication->clear_auth();
        var_dump($this->session->userdata());
        if ($this->authentication->is_guest()){
            redirect('/auth/login');
        } else {
            redirect('/me');
        }
    }

}