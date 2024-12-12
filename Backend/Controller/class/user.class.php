<?php

require_once('user.class.php');
require_once('common.class.php');

class User extends common
{
    public $cid, $email, $password, $name, $phone, $city, $address;

    public function save()
    {

        $conn  = new mysqli("localhost", "root", "", "timelessdials");
        $sql = "insert into customer(email,password,name,phone,city,address) values('$this->email','$this->password','$this->name','$this->phone','$this->city','$this->address')";


        $res = mysqli_query($conn, $sql);

        if ($res) {
            header('Location: /TimelessDials/user/login.php?Msg=' . urlencode("Registered Successfully, Now you can log in"));
            exit();
        } else {
            header('Location: /TimelessDials/users/register.php?ErrMsg=' . urlencode("Registration Failed"));
            exit();
        }
    }

    //this is used for retrieving cid at login(line 68) and again in profile for details
    public function retrieve()
    {

        $conn  = new mysqli("localhost", "root", "", "timelessdials");
        $sql = " select * from customer  where email ='$this->email' or cid='$this->cid'";

        $res = mysqli_query($conn, $sql);

        if ($res->num_rows > 0) {
            $row = mysqli_fetch_assoc($res);
            return $row;
        } else {
            return false;
        }
    }
    public function retrieveAll()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'timelessdials');

        $sql = "select * from customer ";
        $var = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        } else {
            return false;
        }
    }

    public function login()
    {
        $conn  = new mysqli("localhost", "root", "", "timelessdials");

        $sql = "select * from customer where email = '$this->email' and password ='$this->password'";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {


            session_start();
            $data = $this->retrieve();
            $this->cid = $data['cid'];

            $_SESSION['email'] = $this->email;
            $_SESSION['cid'] = $this->cid;
            // Set a cookie that lasts for 1 days
            setcookie("email", $this->email, time() + (24 * 60 * 60), "/"); // expires in 1 day
            setcookie("cid", $this->cid, time() + (24 * 60 *  60), "/"); // expires in 1 day


            header('Location: /TimelessDials/shop.php');
            exit();
        } else {
            header('Location: /TimelessDials/users/login.php?ErrMsg=' . urlencode("Incorrect Credentials"));
            exit();
        }
    }

    public function edit()
    {
        $conn  = new mysqli("localhost", "root", "", "TimelessDials");


        $sql = "update customer set password ='$this->password',phone='$this->phone',address ='$this->address',city='$this->city' where cid='$this->cid'";


        $res = mysqli_query($conn, $sql);

        if ($res) {
            header('Location: /TimelessDials/users/profile.php?Msg=' . urlencode("Details Updated"));
            exit();
        } else {
            header('Location: /TimelessDials/users/edit.php?Msg=' . urlencode("Failed to Update"));
            exit();
        }
    }

    public function delete()
    {
        $conn  = new mysqli("localhost", "root", "", "TimelessDials");



        $sql1 = "delete from orders where cid='$this->cid'";
        $sql2 = "delete from cart where cid='$this->cid'";
        $sql3 = "delete from customer where cid='$this->cid'";


        $res1 = mysqli_query($conn, $sql1);
        $res2 = mysqli_query($conn, $sql2);

        if ($res1 && $res2) {
            $res3 = mysqli_query($conn, $sql3);
        }



        if ($res3) {
            session_start();
            session_unset();
            session_destroy();

            session_abort();
            setcookie('email', '', time() - 3600, '/');
            setcookie('cid', '', time() - 3600, '/');
            header('Location: /TimelessDials/users/login.php?Msg=' . urlencode("Account deleted"));
            exit();
        } else {
            header('Location: /TimelessDials/users/profile.php?Msg=' . urlencode("Failed to delete account"));
            exit();
        }
    }
    //this will be used by admin
    public function deleteCustomer()
    {
        $conn  = new mysqli("localhost", "root", "", "TimelessDials");



        $sql1 = "delete from orders where cid='$this->cid'";
        $sql2 = "delete from cart where cid='$this->cid'";
        $sql3 = "delete from customer where cid='$this->cid'";


        $res1 = mysqli_query($conn, $sql1);
        $res2 = mysqli_query($conn, $sql2);

        if ($res1 && $res2) {
            $res3 = mysqli_query($conn, $sql3);
        }



        if ($res3) {
            session_start();
            session_unset();
            session_destroy();

            session_abort();
            setcookie('email', '', time() - 3600, '/');
            setcookie('cid', '', time() - 3600, '/');

            header('Location: /TimelessDials/dashboard/manage-customer.php?Msg=' . urlencode("Account deleted"));
            exit();
        } else {
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


        setcookie('email', '', time() - 3600, '/');
        setcookie('cid', '', time() - 3600, '/');


        header('Location: /TimelessDials/users/login.php?Msg=' . urlencode("Logout Successfully"));
        exit();
    }
}
