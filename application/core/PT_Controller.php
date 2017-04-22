<?php

/**
 * @property  CI_Config config
 * @property  CI_Session session
 * @property  Authentication authentication
 *
 * @property Article_model article_model
 * @property User_model user_model
 * @property Game_model game_model
 * @property Gallery_model gallery_model
 */
class PT_Controller extends CI_Controller {
    /**
     * @var bool
     */
    protected $need_auth = false;

    public function __construct() {
        parent::__construct();
        if($this->need_auth){
            $this->need_login();
            $this->need_admin_level();
        }
    }

    public function need_login(){
        if ($this->authentication->is_logged()==false){
            $this->session->set_flashdata('login_error','Login terlebih dahulu untuk mengakses halaman');
            redirect($this->config->item('auth_redirect_to'));
        }
    }

    public function need_admin_level(){
        if ($this->authentication->verify_role('ADMIN')){
            $this->session->set_flashdata('login_error','Need admin level to access page');
            redirect($this->config->item('auth_redirect_to'));
        }
    }
}