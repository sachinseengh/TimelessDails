<?php

session_abort();
session_start();
require_once ('./class/cart.class.php');


$id = $_GET['id'];

$cart = new Cart();


$cart->set('cid',$_SESSION['cid']);

$cart->set('cart_id',$id);


$cart->increaseByOne();






?>