<?php


require_once('../../Backend/Controller/class/product.class.php');
$id = $_GET['id'];

$product = new Product();



$product->set('pid',$id);


$product->Delete();




?>