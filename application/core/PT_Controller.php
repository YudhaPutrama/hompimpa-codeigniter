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
    }

    public function need_login(){
        if ($this->authentication->is_logged()==false){
            redirect($this->config->item('auth_redirect_to'));
        }
    }


    protected function view_template($view, $data = array()) {
        if (isset($data['title'])=== FALSE){
            $data['title'] = "Hompimpa";
        }
        $this->load->view('templates/header.php',$data);
        $this->load->view($view, $data);
        $this->load->view('templates/footer.php');
    }
}