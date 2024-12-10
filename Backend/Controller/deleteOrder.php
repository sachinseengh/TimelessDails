<?php

require_once ('./class/order.class.php');
session_abort();
session_start();

$oid = $_GET['id'];


$order = new Order();

$order->set('oid',$oid);


$order->delete();



?>