<?php

require_once('cart.class.php');
require_once('common.class.php');

class Cart extends common{
    public $featured_img,$pid,$quantity,$name,$price,$cart_id,$cid;

    public function save() {
        $conn = mysqli_connect('localhost','root','','TimelessDials');
        $sql = "insert into cart (pid,quantity,price,cid) values('$this->pid','$this->quantity','$this->price','$this->cid')";

       

        $res = mysqli_query($conn,$sql);
        if($res){
            header('Location: /TimelessDials/index.php?Msg=' . urlencode("Product Added Successfully"). '&action=openCart');

            exit();
        }else{
            header("Location: /TimelessDials/index.php?id=" . $this->pid . "&ErrMsg=" . urlencode("Failed to add Product"). '&action=openCart');
            exit();
        }

    }

public function retrieve(){
    $conn = mysqli_connect('localhost','root','','TimelessDials');

    $sql = "SELECT  cart.cart_id As cartId, cart.quantity AS quantity ,cart.total AS total ,cart.size AS size, product.pid AS pid, product.name AS product_name,  product.price AS product_price,  product.featured_img FROM  cart INNER JOIN  product ON  cart.pid = product.pid  where cid = '$this->cid'";


    $res = mysqli_query($conn,$sql);


    if($res){
        $datalist = $res->fetch_all(MYSQLI_ASSOC);
        
        return $datalist;
    }else{
        
        return false;
    }
}

public function deleteById(){
    $conn = mysqli_connect('localhost','root','','TimelessDials');

    $sql = "delete from cart where pid='$this->pid' && cid='$this->cid' ";

    echo $sql;
    $res = mysqli_query($conn,$sql);


    if($res){
            header('Location: /TimelessDials/cart.php?Msg=' . urlencode("Product Deleted Successfully"). '&action=openCart');
            exit();
        }else{
            header("Location: /TimelessDials/cart.php?id=" . $this->pid . "&ErrMsg=" . urlencode("Failed to delete Product"). '&action=openCart');
            exit();
        }
}

public function totalAmount(){
    $conn = mysqli_connect('localhost','root','','TimelessDials');

    $sql = "select sum(total) as total from cart where cid='$this->cid' ";
    $res = mysqli_query($conn,$sql);


    if($res){
        $row = mysqli_fetch_assoc($res);
    
        $total = $row['total'];  

        return $total;
            
        }else{
            return fasle;
        }
}


public function getCart(){
    $conn = mysqli_connect('localhost','root','','TimelessDials');

    $sql = "SELECT  cart.cart_id AS cartId, cart.quantity AS quantity,cart.size AS size,cart.total As total, product.pid AS pid, product.name AS product_name,  product.price AS product_price,  product.featured_img FROM  cart INNER JOIN  product ON  cart.pid = product.pid  where cid='$this->cid'";

    $res = mysqli_query($conn,$sql);


    if($res){
        $row = $res->fetch_all(MYSQLI_ASSOC);

        return $row;
            
        }else{
            return fasle;
        }
}

public function getCartById(){
    $conn = mysqli_connect('localhost','root','','TimelessDials');

    $sql = "Select * from cart where pid=$this->pid and cid=$this->cid";

    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)>0){
        header('Location: /TimelessDials/index.php?Msg=' . urlencode("Product Already in Cart"). '&action=openCart');

        exit();
    }
    }


public function increaseByOne(){
    $conn = mysqli_connect('localhost','root','','TimelessDials');

    $sql = "Update cart set quantity = quantity + 1 where cart_id = '$this->cart_id' && cid='$this->cid'" ;

    $res = mysqli_query($conn,$sql);


    if($res){
        
        header('Location: /TimelessDials/cart.php?Msg=' . urlencode("Cart Updated"));
        exit();
            
        }else{
            return fasle;
        }
}

public function decreaseByOne(){
    $conn = mysqli_connect('localhost','root','','TimelessDials');

    $sql = "Update cart set quantity = quantity - 1 where quantity>1 and cart_id = '$this->cart_id' and cid='$this->cid'" ;

    $res = mysqli_query($conn,$sql);


    if($res){
        
        header('Location: /TimelessDials/cart.php?Msg=' . urlencode("Cart Updated"));
        exit();
            
        }else{
            return fasle;
        }
}







}

?>