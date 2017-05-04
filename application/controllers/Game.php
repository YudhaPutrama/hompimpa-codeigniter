<?php
class Game extends Pt_Controller {
    public function index(){
        $this->load->view('play');
    }

    public function view($slug){
        $this->load->view('game/play');
    }
}