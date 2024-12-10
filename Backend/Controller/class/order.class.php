<?php

require_once ('order.class.php');
require_once('common.class.php');


class Order extends common{
// class Order {

    public  $oid,$cid,$pid,$status,$customer_name,$product,$quantity,$price,$total,$delivery_address,$phone,$email,$order_date;

public function save(){

}
    public function retrieve(){

        $conn =mysqli_connect('localhost','root','','TimelessDails');
        $sql = "select * from orders order by order_date desc";


        $res = mysqli_query($conn,$sql);

        if($res){
            $datalist =$res->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        }else{
            return false;
        }




    }


    public function retrieveOne(){

        $conn =mysqli_connect('localhost','root','','TimelessDails');
        $sql = "select * from orders where cid='$this->cid' order by order_date desc";


        $res = mysqli_query($conn,$sql);

        if($res){
            $datalist =$res->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        }else{
            return false;
        }
    }
    //it is used for updating the order status
    public function retrieveOneOrder(){

        $conn = mysqli_connect('localhost', 'root', '', 'TimelessDails');
        
        // Use $this->oid to reference the class property
        $sql = "SELECT * FROM orders WHERE oid = $this->oid";
    
        $res = mysqli_query($conn, $sql);
    
        if ($res) {
            // Use fetch_assoc() to fetch a single row as an associative array
            $datalist = $res->fetch_assoc();
            return $datalist;
        } else {
            return false;
        }
    }


    public function edit(){
        $conn = mysqli_connect('localhost', 'root', '', 'TimelessDails');
    
        $sql ="update orders set status= '$this->status' where oid='$this->oid'";

        
        $res = mysqli_query($conn,$sql);

        if($res){
            header('Location: /TimelessDails/dashboard/manage-orders.php?Msg=' . urlencode("Order Status Updated"));
            exit();
        }else{
            header('Location: /TimelessDails/dashboard/manage-orders.php?ErrMsg=' . urlencode("Failed to Update Status"));
        }
    
    }
    public function Delete(){
        $conn = mysqli_connect('localhost', 'root', '', 'TimelessDails');
    
        $sql ="delete from orders where oid='$this->oid'";

    
        $res = mysqli_query($conn,$sql);

        if($res){
            header('Location: /TimelessDails/dashboard/manage-orders.php?Msg=' . urlencode("Order Deleted Successfully"));
            exit();
        }else{
            header('Location: /TimelessDails/dashboard/manage-orders.php?ErrMsg=' . urlencode("Failed to delete order"));
        }
    
    }
    
    
}



?>