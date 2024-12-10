<?php


session_abort();
session_start();
require_once './class/cart.class.php';

$cart = new Cart();


$cart->set('cid',$_SESSION['cid']);
$items = $cart->getCart();


$total = $cart->totalAmount();
$cid = $_SESSION['cid'];

$name = $_GET['fullname'];
$email = $_GET['email'];
$address = $_GET['address'];
$phone = $_GET['phone'];

$payment = $_GET['payment_type']; // Default to 'COD'
if(isset($_GET['payment_type']) && !empty($_GET['payment_type'])){
    $payment = $_GET['payment_type']; // Assign payment type directly from GET
}

$res;

foreach($items as $item){

$conn = mysqli_connect('localhost','root','','TimelessDails');
$order_date= date('y-m-d H:i:s');

$sql = "insert into orders(cid,customer_name,product,quantity,size,price,total,delivery_address,phone,email,order_date,payment) values('$cid','$name','".$item['product_name']."','".$item['quantity']."','".$item['size']."','".$item['product_price']."','".$item['total']."','$address','$phone','$email','$order_date',$payment)";


$res = mysqli_query($conn,$sql);



}

if($res){
    header('Location: /TimelessDails/thankyou.php?msg=' . urlencode("Order placed Successfully"));
    exit();
}else{
    header('Location: /TimelessDails/checkout.php?ErrMsg=' . urlencode("Something Went Wrong"));
    exit();
}






?>