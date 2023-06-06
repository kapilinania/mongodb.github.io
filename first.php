//insert data is here

  //create database
  $db = $con->cm3;
  echo "<br>Database Created Successfully";

  //create table
  $tbl = $db->subject;
  echo "<br> Table create successfully";

  //insert value is here
  $tbl->insertOne(["Language" => "PHP"]);
  $tbl->insertOne(["Database" => "kapilMongoDB"]);
  $tbl->insertOne(["FrameWork" => "Larawel"]);
  echo "<br>Data Inserted";
  $collection = $db->subject;
  echo "<br>Collection selected succsessfully";
  $cursor = $collection->find();
  echo $cursor;
  // for($i=0; $i<=10; $i++){
  //   echo "<br>".$cursor["Language"];
  // }
