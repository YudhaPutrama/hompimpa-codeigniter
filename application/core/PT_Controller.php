<?php

/**
 * @property  CI_Config config
 */
class PT_Controller extends CI_Controller {
    protected function view($view, $data = array()) {
        if (isset($data['title'])=== FALSE){
            $data['title'] = "Hompimpa";
        }
        $this->load->view('templates/header.php');
        $this->load->view($view, $data);
        $this->load->view('templates/footer.php');
    }
}