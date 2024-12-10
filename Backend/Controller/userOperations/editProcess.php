<?php

require_once('../class/user.class.php');
    

    session_abort();
    session_start();

    $user= new User();
    $user->set('cid',$_SESSION['cid']);
    $user->set('email',$_SESSION['email']);
    $user->set('password',$_POST['password']);
    $user->set('name',$_POST['name']);
    $user->set('phone',$_POST['phone']);
    $user->set('city',$_POST['city']);
    $user->set('address',$_POST['address']);


    $user->edit(); 






?>