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
        $sql= "SELECT JUMLAH_ARTIKEL_PENGGUNA('".$this->session->userdata('id_pengguna')."') JUMLAH FROM DUAL";
        //echo $sql;
        $num=[
            'article'=> $this->db->query($sql)->row_array()['JUMLAH'],
            'like'=>'0',
            'comment'=>'0'
        ];
        //var_dump($num);
        $this->set_data('num',$num);
        $user = $this->authentication->get_user();
        $this->set_data('user', $user);
        $a = new UserItem();
        $this->set_data('news',$this->berita_model->get_profil());
        $this->set_data('upload_error', $this->session->flashdata('upload_error'));
        $this->set_data('upload_success', $this->session->flashdata('upload_success'));
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

    public function upload(){
        var_dump($_FILES);
        $config['upload_path']          = './public/images/avatar/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        $filename='photo-profil';
        if ( ! $this->upload->do_upload($filename))
        {
            $this->session->set_flashdata('upload_error', $this->upload->display_errors());
            redirect('/me');
        }
        else
        {
            $uploaddata = $this->upload->data();
            $sql = "UPDATE PENGGUNA SET AVATAR='".$uploaddata['file_name']."' WHERE USERNAME='".$this->session->userdata('user_id')."'";
            $this->db->query($sql);
            //echo $sql;
            //die();
            $this->session->set_flashdata('upload_success', $uploaddata);
            redirect('/me');
        }
    }

    public function article(){
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
        $this->set_data('upload_error', $this->session->flashdata('upload_error'));
        $this->set_data('upload_success', $this->session->flashdata('upload_success'));
        $this->load->view('profile-article',$this->data);
    }

    public function post_article(){

        $config['upload_path']          = './public/images/gallery/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 500;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;
        $this->load->library('upload',$config);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('konten','Konten','required');
        $this->form_validation->set_rules('kategori','Kategori','required');
        if($this->form_validation->run()){
            if($this)
            $judul = $this->input->post('judul');
            $konten = $this->input->post('konten');
            $kategori = $this->input->post('kategori');
            $data = [
                'SLUG' => url_title($judul),
                'JUDUL' => $judul,
                'KONTEN' => $konten,
                'KODE_KATEGORI'=>$kategori,
                'ID_PENGGUNA'=> intval($this->session->userdata('id_pengguna'))
            ];
            $filename='gambar';
            if ($this->upload->do_upload($filename)){
                $uploaddata = $this->upload->data();
                $data['GAMBAR'] = $uploaddata['file_name'];
            }
            $this->db->insert('ARTIKEL', $data);
        } else {
        }
        redirect('/me/artikel');
    }

    public function setting(){
        $this->load->view('setting',$this->data);
    }

    public function update_profil(){
        $fullname = $this->input->post('fullname');
        $biodata = $this->input->post('biodata');
        $kelamin = $this->input->post('jenis_kelamin');
        $data = [
            'NAMA_LENGKAP' => $fullname,
            'BIODATA' => $biodata,
            'JENIS_KELAMIN' => $kelamin
        ];
        $this->db->where('ID', $this->session->userdata('id_pengguna'))->update('PENGGUNA', $data);
        redirect('/setting');
    }
}