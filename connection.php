<?php
  require 'vendor/autoload.php';
  $con = new MongoDB\Client("mongodb://localhost:27017");
  //echo "connection Successful";
  //connection code is over 
  //insert data is here

  //create database
  $db = $con->fromData;
  //echo "<br>Database Created fromData Successfully";
  $tbl = $db->stuDeatil;
  //echo "<br> Table create successfully";
  //insert value is here

  //echo "<br>Data Inserted";
  if(isset($_POST["submit"])){
    $email_id = $_POST['email'];
    $password = $_POST['password'];

  $tbl->insertOne(["emailid" =>$email_id, "password"=>$password]);
  //echo "data is inserted";
}
else{
  //echo "Data Not Inserted";
}



 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="container mt-5">
            <div class="row">
                <div class="col-8">
                <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" >Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-8 mx-auto">
            <h3 class="mx-auto">Data is here</h3>
            <table class="table mt-5">
              <thead>
                <tr>
                  <th scope="col">Email Id</th>
                  <th scope="col">Password</th>
                  <th scope="col">Action</th>
                  
                </tr>
              </thead>
              <tbody>
            <?php 
              //select db database
              $selectDb = $con->fromData;
              //select the collection
              $selectColection = $selectDb->stuDeatil;
              //find the title of the document
              $curser  = $selectColection->find();
              foreach($curser as $value){
                //echo $value['password']."<br>";
              
            ?>
          
                <tr>
                  
                  <td><?php echo $value['emailid']  ?></td>
                  <td><?php echo $value['password']  ?></td>
                  <td><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>