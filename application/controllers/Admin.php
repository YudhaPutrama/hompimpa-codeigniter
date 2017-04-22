<?php
class Admin extends PT_Controller {

//    protected $need_auth = true;

    /**
     * Admin constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->need_login();
        $this->need_admin_level();
    }

    public function index(){
        $this->load->view('admin/dashboard');
    }
}