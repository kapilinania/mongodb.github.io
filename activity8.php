<?php
error_reporting(0);
require 'vendor/autoload.php';
$con = new MongoDB\Client("mongodb://localhost:27017");
//echo "connection Successful";
 //create database
 $db = $con->csvdata;
 //echo "<br>Database Created fromData Successfully";
 $tbl = $db->stuData;
 //echo "<br> Table create successfully";
//crateing write object

 $data = $tbl->find();
    

//   foreach($data as $value)
//   {
    
//      echo  " Name is ".$value['name']." Email is <br/>".$value['email'];
//   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0"> 
<thead>
	<tr>
    <th>ID</th>
	 <th>Name</th>
	 <th>Course</th>
	 <th>lab</th>
	 <th>Registration</th>

	</tr>
</thead>

<tbody>
       <tr>
     
	 <?php foreach ($data as $value){ ?>

    <td> <?php echo $value['_id']; ?> </td>
	 <td> <?php echo $value['name']; ?> </td>
	 <td> <?php echo $value['course']; ?> </td>
	 <td> <?php echo $value['lab']; ?> </td>
	 <td> <?php echo $value['registration']; ?> </td>
	  
      </tr>
	<?php } ?>
</tbody>
</table>
</body>
</html>