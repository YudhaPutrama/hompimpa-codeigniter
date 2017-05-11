<?php
class Game extends Pt_Controller {
    public function index(){
        $this->load->view('play', $this->data);
    }

    public function play($id){
        $row = $this->db->where('ID',$id)->get('PERMAINAN')->row_array();
        //var_dump($row);
        if($row==null){
            $this->session->set_flashdata('error', 'Permainan tidak ditemukan');
            redirect('/article');
        }
        $this->set_data('gamedata',$row);
        $this->load->view('play',$this->data);
    }
}