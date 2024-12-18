<?php

require_once 'product.class.php';
require_once 'common.class.php';


class Product extends common
{

    public $pid, $name, $brand, $price, $desc, $category, $sub_category, $featured_img, $quantity;


    public function Save()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'TimelessDials');

        $sql = "insert into product (name,price,brand,description,category,sub_category,featured_img,quantity) values('$this->name','$this->price','$this->brand','$this->desc','$this->category','$this->sub_category','$this->featured_img','$this->quantity')";

        $res = mysqli_query($conn, $sql);
        if ($res) {
            header('Location:/TimelessDials/admin/watches/manage-watch.php?msg=Product Added Successfully');
            exit();
        } else {
            header('Location:/TimelessDials/admin/watches/manage-watch.php?ErrMsg="Failed to add Product"');
            exit();
        }
    }

    public function retrieve()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'TimelessDials');

        $sql = "select * from product order by pid desc ";
        $var = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        } else {
            return false;
        }
    }


    public function Edit()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'TimelessDials');

        $sql = "update product set name ='$this->name',price ='$this->price',description='$this->desc',category='$this->category',sub_category='$this->sub_category',featured_img='$this->featured_img',brand='$this->brand',quantity='$this->quantity' where pid='$this->pid'";

        $res = mysqli_query($conn, $sql);
        if ($res) {
            header('Location:/TimelessDials/admin/watches/manage-watch.php?msg="Product Edited Successfully"');
            exit();
        } else {
            header('Location:/TimelessDials/admin/watches/manage-watch.php?ErrMsg="Failed to edit Product"');
            exit();
        }
    }

    public function getById()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'TimelessDials');

        $sql = "select * from product where pid='$this->pid' ";
        $var = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            $datalist = $var->fetch_object();
            return $datalist;
        } else {
            return false;
        }
    }

    public function getProducts()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'TimelessDials');

        $sql = "select * from product order by pid desc limit 3";

        $var = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        } else {
            return false;
        }
    }
    public function getNewArrival()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'TimelessDials');

        $sql = "select * from product order by pid desc limit 3";

        $var = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        } else {
            return false;
        }
    }
    public function getProductMain()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'TimelessDials');

        $sql = "select * from product order by pid desc limit 1";

        $var = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        } else {
            return false;
        }
    }
    public function getProductsMale()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'TimelessDials');

        $sql = "select * from product where category='male' order by pid desc limit 5";

        $var = mysqli_query($conn, $sql);
        if ($var) {
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        } else {
            return false;
        }
    }
    public function getProductsFemale()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'TimelessDials');

        $sql = "select * from product where category='female' order by pid desc limit 5";

        $var = mysqli_query($conn, $sql);
        if ($var) {
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        } else {
            return false;
        }
    }

    public function getByCategory()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'TimelessDials');

        $sql = "select * from product where category='$this->category' and sub_category='$this->sub_category'";

        $var = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        } else {
            return false;
        }
    }


    public function getTotalWatch()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'TimelessDials');

        $sql = "select count(*) as total_Watch from product";

        $var = mysqli_query($conn, $sql);
        if ($var) {
            $datalist = $var->fetch_object();
            return $datalist;
        } else {
            return false;
        }
    }
    public function getTotalWatchQuantity()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'TimelessDials');

        $sql = "select SUM(quantity)  as quantity from product  ";

        $var = mysqli_query($conn, $sql);
        if ($var) {
            $datalist = $var->fetch_object();
            return $datalist;
        } else {
            return false;
        }
    }

    public function Delete()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'TimelessDials');
        $sql = "delete from product where pid = '$this->pid'";



        $res = mysqli_query($conn, $sql);

        if ($res) {
            header('Location:/TimelessDials/admin/watches/manage-watch.php?msg=Product Deleted Successfully');
            exit();
        } else {
            header('Location:/TimelessDials/admin/watches/manage-watch.php?ErrMsg="Product Deletion Failed');
            exit();
        }
    }
}
