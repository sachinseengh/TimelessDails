<?php

require_once('../class/admin.class.php');
$admin= new Admin();

    $admin->set('username',$_POST['email']);
    $admin->set('password',$_POST['password']);

    $admin->login(); 



?>

