<?php

/**
 * @property  User_model user_model
 */
class User extends PT_Controller {
    public function index(){

    }

    public function me(){
        $data = new User_model();

        $data->username = "yudhaputrama";
        $data->password = password_hash("yudhaputrama", PASSWORD_BCRYPT);
        $data->email = "yudhaputrama.edu@gmail.com";

        echo $data->save();

        var_dump($data);

    }
}