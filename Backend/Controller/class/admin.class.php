<?php
require_once('user.class.php');
require_once('common.class.php');

class Admin extends common {
    public $cid,$email,$password,$name,$phone,$city,$address;

    public function save(){


    }

    public function retrieve(){

        $conn  = new mysqli("localhost","root","","TimelessDails");
        $sql ="select * from admin where username ='$this->email'";
       
        $res = mysqli_query($conn,$sql);

        if($res->num_rows>0){
        $row = mysqli_fetch_assoc($res);
        return $row;
        }else{
            return false;
        }
    }
   
    public function login(){
        $conn  = new mysqli("localhost","root","","TimelessDails");

        $sql ="select * from admin where username = '$this->email' and password ='$this->password'";
        $res = mysqli_query($conn,$sql);

         if(mysqli_num_rows($res)>0){

          session_start();
          $_SESSION['username']= $this->email;
          setcookie("username",$this->email, time() + (24 * 60 * 60), "/");
    

            header('Location: /TimelessDails/dashboard/');
            exit();
        }else{
            header('Location: /TimelessDails/users/adminlogin.php?ErrMsg=' . urlencode("Incorrect Credentials"));
            exit();
        }
    }

    public function edit(){

    
        $conn  = new mysqli("localhost","root","","TimelessDails");

        
        $sql ="update admin set password ='$this->password' where username='$this->email'";

    
        $res = mysqli_query($conn,$sql);

        if($res){
            header('Location: /TimelessDails/users/adminLogin.php?Msg=' . urlencode("Password Updated"));
            exit();
        }else{
            header('Location: /TimelessDails/users/adminEdit.php?Msg=' . urlencode("Failed to Update"));
            exit();
        }

    }

    public function delete(){
        $conn  = new mysqli("localhost","root","","TimelessDails");

        
        $sql ="delete from customer where email='$this->email'";
    
        $res = mysqli_query($conn,$sql);


        if($res){
            header('Location: /TimelessDails/users/login.php?Msg=' . urlencode("Account deleted"));
            exit();
        }else{
            header('Location: /TimelessDails/users/profile.php?Msg=' . urlencode("Failed to delete account"));
            exit();
        }

    }
    public function deleteCustomer(){
        $conn  = new mysqli("localhost","root","","TimelessDails");

        
        $sql ="delete from customer where email='$this->email'";
    
        $res = mysqli_query($conn,$sql);


        if($res){
            header('Location: /TimelessDails/dashboard/manage-customer.php?Msg=' . urlencode("Account deleted"));
            exit();
        }else{
            header('Location: /TimelessDails/dashboard/manage-customer.php?Msg=' . urlencode("Failed to delete account"));
            exit();
        }

    }

}








?>