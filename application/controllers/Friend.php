<?php
/**
 * Created by PhpStorm.
 * User: Chevalier
 * Date: 4/18/2017
 * Time: 1:13 PM
 */
class Friend extends PT_Controller {

    public function index(){
        $this->set_data('friends', []);
        $this->set_data('ofriends', []);
        $this->load->view('friend-list', $this->data);
    }
}