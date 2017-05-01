<?php

/**
 * @property  CI_DB_query_builder db
 */
class User_model extends PT_Model {
    protected $table_name = "PENGGUNA";

    public $id;
    public $username;
    public $password;
    public $email;
    public $nama_lengkap;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $biodata;
    public $avatar;
    public $role;
    public $facebook_id;
    public $twitter_id;

    public function save(){
        $data = [
            "USERNAME" => $this->username,
            "PASSWORD" => $this->password,
            "EMAIL" => $this->email,
            "NAMA_LENGKAP" => $this->nama_lengkap,
            "TEMPAT_LAHIR" => $this->tempat_lahir,
            "TANGGAL_LAHIR" => $this->tanggal_lahir,
            "BIODATA" => $this->biodata,
            "AVATAR" => $this->avatar,
            "ROLE" => $this->role,
            "FACEBOOK_ID" => $this->facebook_id,
            "TWITTER_ID" => $this->twitter_id
        ];
        $data = array_filter($data, function($value) { return $value !== null; });
//        $query = "INSERT INTO PENGGUNA (USERNAME, PASSWORD, EMAIL) VALUES ('".$username."','".$password."','".$email."')";
//        return $this->db->query($query);
        if ($this->id==null){
            try{
                $this->db->insert($this->table_name,$data);
            } catch (Exception $e){
                var_dump($e);
            }

            return true;
        } else {
            $query = $this->db->where("ID",$this->id);
            return $query->update($this->table_name,$data);
        }
    }

    public function get($id=null){
        if ($id==null){
            return $this->db->get($this->table_name)->result_array();
        } else {
            $query = $this->db->where('ID',$id)->get($this->table_name);
            return $query->row_array();
        }
    }

    public function get_by_username($username){
        $query = $this->db->where('USERNAME',$username)->get($this->table_name);
        return $query->row_array();
    }

    public function change_password($id, $password)
    {
        $data = [
            "PASSWORD" => password_hash($password, PASSWORD_BCRYPT)
        ];
        $query = $this->db->where("ID", $id);
        return $query->update($this->table_name, $data);
    }

    /**
     * Get number of news using oracle function
     *
     * @return	mixed
     */
    public function get_count_user($userId=null){
        if ($userId==null)
            return $this->db->query("SELECT JUMLAH_PENGGUNA() JUMLAH FROM DUAL")->row_array()['JUMLAH'];
        else {
            return $this->db->query("SELECT JUMLAH_PENGGUNA() JUMLAH FROM DUAL")->row_array()['JUMLAH'];
        }
    }

}