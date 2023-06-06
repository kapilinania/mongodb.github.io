<?php
error_reporting(0);
require 'vendor/autoload.php';
$con = new MongoDB\Client("mongodb://localhost:27017");
echo "connection Successful";
 //create database
 $db = $con->activity;
 echo "<br>Database Created fromData Successfully";
 $tbl = $db->stuData;
 echo "<br> Table create successfully";
//crateing write object
 $data = $tbl->find();

 foreach($data as $value)
 {
    echo  " Name is ".$value['name']." Email is <br/>".$value['email'];

 }




?>