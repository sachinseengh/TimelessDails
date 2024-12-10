<?php
require_once('../class/user.class.php');

$user= new User();


    $user->set('email',$_POST['email']);
    $user->set('password',$_POST['password']);
    $user->set('name',$_POST['name']);
    $user->set('phone',$_POST['phone']);
    $user->set('city',$_POST['city']);
    $user->set('address',$_POST['address']);

    $user->save(); 

    ?>