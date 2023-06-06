<?php

require 'vendor/autoload.php';
$con = new MongoDB\Client("mongodb://localhost:27017");
echo "connection Successful";
 //create database
 $db = $con->activity;
 echo "<br>Database Created fromData Successfully";
 $tbl = $db->stuData;
 echo "<br> Table create successfully";
 //insert value is here
 
 //$tbl->insertOne(["Language" => "PHP"]);
 $insertManyResult = $tbl->insertMany([
    [
        'username' => 'admin',
        'email' => 'admin@example.com',
        'name' => 'Admin User',
    ],
    [
        'username' => 'test',
        'email' => 'test@example.com',
        'name' => 'Test User',
    ],
    [
        'username'=> 'kapil inania',
        'email' => 'kapil@gmail.com',
        'name' => 'kapil user',
    ],

]);

?>