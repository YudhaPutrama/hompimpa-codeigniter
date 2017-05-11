<?php

/**
 * Author : Kurniawan Yudha Putrama
 * Email : kurniawan.yudha.p@gmail.com
 * Date : 18 April 2017
 *
 */


class Authentication {
    /**
     * @var PT_Controller
     */
    private $CI;

    /**
     * @var array
     */
    private $config;

    /**
     * Authentication constructor.
     */
    public function __construct() {
        $this->CI = &get_instance();
//        var_dump($this->CI->config->item('auth'));
        $this->config = $this->CI->config->item('auth');
    }


    /**
     * Check authentication with identifier and password
     *
     * @param string $identifier
     * @param string $password
     * @return bool
     * @internal param string $username
     */
    public function check_auth($identifier, $password){
        $userdata = $this->CI->db->get_where($this->config['table'], array($this->config['identifier']=>$identifier))->row_array();
        if ($userdata==NULL){
            return false;
        }
        return password_verify($password, $userdata[$this->config['password']]);
    }

    /**
     * Login via identifier
     *
     * @return void
     */
    public function set_auth($id){
        $this->CI->session->set_userdata($this->config['session_name'],$id);
    }

    /**
     * Clear user session data
     *
     * @return void
     */
    public function clear_auth(){
        $this->CI->session->unset_userdata($this->config['session_name']);
    }

    /**
     * Get has user session
     *
     * @return bool
     */
    public function is_logged(){
        return $this->CI->session->has_userdata($this->config['session_name']);
    }


    public function is_guest(){
        return !$this->is_logged();
    }

    /**
     * Get user data
     *
     * @return array
     */
    public function get_user(){
        if ($this->is_logged()===false){
            return null;
        }
        $userid = $this->CI->session->userdata($this->config['session_name']);
//        var_dump($this->CI->session->get_userdata());
//        var_dump($this->config['session_name']);
//        var_dump($userid);
//        die();
        $query = $this->CI->db->get_where($this->config['table'], array($this->config['identifier']=>$userid));
        return $query->row_array();
    }

    /**
     * Login via identifier and check password
     *
     * @param $identifier
     * @param $password
     * @return mixed
     */
    public function login($identifier, $password){
        if ($this->is_logged()) return false;
        if ($this->check_auth($identifier, $password)){
            $this->set_auth($identifier);
            $user = $this->get_user();
            $this->CI->session->set_userdata('id_pengguna',$user['ID']);
            $this->CI->session->set_userdata('username',$user['USERNAME']);
            $this->CI->session->set_userdata('role',$user['ROLE']);
            redirect($this->config['welcome_redirect']);
        } else {
            $this->clear_auth();
        }
        $this->CI->session->set_flashdata('login_error','Username / Password salah');
        redirect($this->config['guest_redirect']);
    }

    /**
     * If not logged in redirect to other page with 401 (unauthorized) code
     *
     * @param $destination
     */
    public function guest_redirect_to($destination=null){

        if ($destination==null) $destination = $this->config['guest_redirect'];
//        echo "TES";
        if ($this->is_logged()==false){
            echo $destination;
            redirect($destination);
        }
    }

    /**
     * Get User Role
     *
     * @return int
     */
    public function get_role(){
        $user =  $this->get_user();
        return $user[$this->config['role_name']];
    }

    /**
     * Verify user role
     *
     * @param $role
     * @return bool
     */
    public function verify_role($role){
        $user = $this->get_user();
        $userrole = $this->config['roles'][$user['ROLE']];
//        var_dump($user);
//        echo $role;
//        echo $userrole;
//        die();
        return $userrole==$role;
    }
}