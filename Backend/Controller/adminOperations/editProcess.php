<?php

require_once('../class/admin.class.php');
$admin= new Admin();


$admin->set('username',$_COOKIE['username']);
$admin->set('password',$_POST['password']);

    $admin->edit(); 






?>