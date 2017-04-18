<?php
class User_model extends CI_Model {


    public function create_user($username, $email, $password){
        $query = "INSERT INTO PENGGUNA (USERNAME, PASSWORD, EMAIL) VALUES ('".$username."','".$password."','".$email."')";
        return $this->db->query($query);
    }

    public function get_user_data(){

    }

    public function set_user_data(){

    }

    public function login_user($username, $password){

    }
}