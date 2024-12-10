<?php

require_once('../class/user.class.php');
$user= new User();

    $user->set('email',$_POST['email']);
    $user->set('password',$_POST['password']);

    $user->login(); 



?>

