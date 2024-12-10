<?php

require_once ('./class/order.class.php');

$oid = $_POST['oid'];
$status = $_POST['status'];

$order = new Order();

$order->set('oid',$oid);
$order->set('status',$status);

$order->edit();



?>