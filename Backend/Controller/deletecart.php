<?php

session_abort();
session_start();
require_once ('./class/cart.class.php');

$cart = new Cart();



$cart->set('cid',$_SESSION['cid']);

$id = $_GET['id'];
$cart->set('pid',$id);


$cart->deleteById();


?>