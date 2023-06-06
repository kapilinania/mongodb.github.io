<?php

require 'vendor/autoload.php';
$con = new MongoDB\Client("mongodb://localhost:27017");
echo "connection Successful";
 //create database
 $db = $con->activity;
 echo "<br>Database Created fromData Successfully";
 $tbl = $db->stuData;
 echo "<br> Table create successfully";
 



?>