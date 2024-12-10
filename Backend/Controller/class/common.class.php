<?php

abstract class Common
{
    abstract function save();
    abstract function retrieve();
    // abstract function edit();
    // abstract function delete();
    

    public function set($key, $value){
        $this->$key = $this->validate($value);
    }

    public function validate($value){
        $val = htmlspecialchars($value);
        $conn = mysqli_connect('localhost', 'root', '', 'nepalifootprints');
        $newValue = $conn->real_escape_string($val);
        return $newValue;
    }

    public function select($sql){
        $conn = mysqli_connect('localhost', 'root', '', 'nepalifootprints');
        $var = $conn->query($sql);
        if($var->num_rows > 0){
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        }
        else{
            return false;
        }
    }



}


?> 