<?php


require_once('../class/user.class.php');
$user= new User();

session_abort();
session_start();
$user->set('cid',$_SESSION['cid']);

$user->delete();



?>