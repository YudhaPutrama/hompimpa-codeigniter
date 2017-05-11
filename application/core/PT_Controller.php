<?php

/**
 * @property  CI_Config config
 * @property  CI_Session session
 * @property  CI_Input input
 * @property  CI_Form_validation form_validation
 * @property  Authentication authentication
 *
 * @property Article_model article_model
 * @property User_model user_model
 * @property Game_model game_model
 * @property Gamesession_model gamesession_model
 * @property Gallery_model gallery_model
 * @property Tag_model tag_model
 * @property Category_model category_model
 */
class PT_Controller extends CI_Controller {
    /**
     * @var bool
     */
    protected $need_auth = false;

    /**
     * Passsing data into view
     * @var array
     */
    protected $data = array();
    /**
     * PT_Controller constructor.
     */
    public function __construct() {
        parent::__construct();
        if($this->need_auth){
            $this->need_login();
            $this->need_admin_level();
        }
        $this->get_userdata();
        $this->set_data('notifications',[]);
        $this->set_data('top_categories',[]);
        $this->set_data('top_games',[]);
    }

    public function need_login(){
        if ($this->authentication->is_logged()==false){
            $this->session->set_flashdata('login_error','Login terlebih dahulu untuk mengakses halaman');
            redirect($this->config->item('auth_redirect_to'));
        }
    }

    public function need_admin_level(){
        if ($this->authentication->verify_role('ADMIN')==false){
            $this->session->set_flashdata('login_error','Need admin level to access page');
            redirect($this->config->item('auth_redirect_to'));
        }
    }

    public function get_userdata(){
        if ($this->authentication->is_logged())
            $this->set_data('user',$this->authentication->get_user());
    }

    /**
     * Set data for passwing value to view
     * @param $key
     * @param $value
     */
    public function set_data($key, $value){
        $this->data[$key] = $value;
    }
}