<?php

require_once('../class/admin.class.php');
$admin= new Admin();


$admin->set('email','sachinseengh@gmail.com');
$admin->set('password',$_POST['password']);

    $admin->edit(); 






?>