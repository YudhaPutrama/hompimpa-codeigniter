<?php
class Game extends Pt_Controller {
    public function index(){
        $this->load->view('play', $this->data);
    }

    public function play($slug){
        $this->set_data('gamesfile',$slug);
        $this->load->view('play',$this->data);
    }
}