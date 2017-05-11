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

    public function update(){
        
    }

    public function me(){
        $this->load->model('berita_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('berita', 'Berita', 'required');
        if($this->form_validation->run()){
            $data = array(
                'USERNAME_PENGGUNA'=>$this->session->userdata('user_id'),
                'BERITA' => $this->input->post('berita')
            );
            $this->berita_model->insert($data);
        }
        
        $user = $this->authentication->get_user();
        $this->set_data('user', $user);
        $a = new UserItem();
        $this->set_data('news',$this->berita_model->get_profil());
        $this->load->view('profile',$this->data);
    }

    public function view($username){
        $user = $this->user_model->get_by_username('YUDHAPUTRAMA');
        var_dump($user);
    }

    public function logout(){
        $this->authentication->clear_auth();
        var_dump($this->session->userdata());
        if ($this->authentication->is_guest()){
            $this->set_data('login_message','Berhasil keluar');
            redirect('/auth/login');
        } else {
            redirect('/me');
        }
    }

}