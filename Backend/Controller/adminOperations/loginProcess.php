<?php

require_once('../class/admin.class.php');
$admin= new Admin();

    $admin->set('email',$_POST['email']);
    $admin->set('password',$_POST['password']);

    $admin->login(); 



?>

