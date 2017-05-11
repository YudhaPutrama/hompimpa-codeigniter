<?php
$config['auth']['table'] = "PENGGUNA";
$config['auth']['identifier'] = "USERNAME";
$config['auth']['password'] = "PASSWORD";
$config['auth']['session_name'] = "user_id";
$config['auth']['guest_redirect'] = "auth/login";
$config['auth']['welcome_redirect'] = "/me";
$config['auth']['role_name'] = "ROLE";
$config['auth']['roles'] = array("ADMIN","CONTRIB","MEMBER");

$config['auth_redirect_to'] = "auth/login";