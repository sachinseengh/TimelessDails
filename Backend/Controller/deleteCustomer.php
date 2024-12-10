<?php

require_once ('./class/user.class.php');

session_abort();
session_start();



$cid = $_GET['id'];


$user = new User();

$user->set('cid',$cid);

$user->deleteCustomer();




?>