<?php
session_start();

if(!isset($_SESSION['email']) && !isset($_SESSION['cid'])){

    header('Location:../../users/login.php?Msg=Please Login First');
  
  
    exit();
  
  }

require_once ('./class/cart.class.php');

$id= $_GET['id'];
$quantity = $_GET['quantity'];



$cart = new Cart();

$cart->set('pid',$id);

//Check if the item is already in cart
$cart->set('cid',$_SESSION['cid']);
$cart->getCartById();

// if not then i will save in cart
$cart->set('quantity',$quantity);


$cart->set('price',$_GET['price']);


//set whose cart is this
$cart->set('cid',$_SESSION['cid']);



$cart->save();



?>