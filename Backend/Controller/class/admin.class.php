<?php
require_once('user.class.php');
require_once('common.class.php');

class Admin extends common {
    public $cid,$username,$password,$name,$phone,$city,$address;

    public function save(){


    }

    public function retrieve(){

        $conn  = new mysqli("localhost","root","","TimelessDials");
        $sql ="select * from admin where username ='$this->username'";
       

    
        $res = mysqli_query($conn,$sql);

        if($res->num_rows>0){
        $row = mysqli_fetch_assoc($res);
        return $row;
        }else{
            return false;
        }
    }
   
    public function login(){
        $conn  = new mysqli("localhost","root","","TimelessDials");

        $sql ="select * from admin where username = '$this->username' and password ='$this->password'";
        $res = mysqli_query($conn,$sql);

         if(mysqli_num_rows($res)>0){

          session_start();
          $_SESSION['username']= $this->username;
          setcookie("username",$this->username, time() + (24 * 60 * 60), "/");
    

            header('Location: /TimelessDials/admin/watches/index.php');
            exit();
        }else{
            header('Location: /TimelessDials/admin/index.php?ErrMsg=' . urlencode("Incorrect Credentials"));
            exit();
        }
    }

    public function edit(){

    
        $conn  = new mysqli("localhost","root","","TimelessDials");

        
        $sql ="update admin set password ='$this->password' where username='$this->username'";


        $res = mysqli_query($conn,$sql);

        if($res){
            $this->logout();
            header('Location: /TimelessDials/admin/index.php?Msg=' . urlencode("Password Updated"));
            
            exit();
        }else{
            header('Location: /TimelessDials/admin/index.php.php?Msg=' . urlencode("Failed to Update"));
            exit();
        }

    }

    public function delete(){
        $conn  = new mysqli("localhost","root","","TimelessDials");

        
        $sql ="delete from customer where username='$this->username'";
    
        $res = mysqli_query($conn,$sql);


        if($res){
            header('Location: /TimelessDials/users/login.php?Msg=' . urlencode("Account deleted"));
            exit();
        }else{
            header('Location: /TimelessDials/users/profile.php?Msg=' . urlencode("Failed to delete account"));
            exit();
        }

    }
    public function deleteCustomer(){
        $conn  = new mysqli("localhost","root","","TimelessDials");

        
        $sql ="delete from customer where username='$this->username'";
    
        $res = mysqli_query($conn,$sql);


        if($res){
            header('Location: /TimelessDials/dashboard/manage-customer.php?Msg=' . urlencode("Account deleted"));
            exit();
        }else{
            header('Location: /TimelessDials/dashboard/manage-customer.php?Msg=' . urlencode("Failed to delete account"));
            exit();
        }

    }

    public function logout()
    {

        session_start();
        session_unset();
        session_destroy();

        session_abort();


        setcookie('username', '', time() - 3600, '/');
        

        header('Location: /TimelessDials/index.php?Msg=' . urlencode("Logout Successful!"));
        exit();
    }

}








?>