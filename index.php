<?php
include "config.php";
if(isset($_POST['submit'])){
  $first_name=$_POST['fname'];
  $last_name=$_POST['lname'];
  $email=$_POST['id'];
  $address=$_POST['address'];
  $gender=$_POST['gender'];
  
  
  $sql="INSERT INTO `tbl_student` (`firstname`,`lastname`,`email`,`gender`,`address`)VALUES('$first_name','$last_name','$email','$gender','$address')";
  $result=mysqli_query($conn,$sql);
  if($result==TRUE)
    echo "Records Inserted";
}
?>
<!doctype html>
<html lang="en">
  <head>
   <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <form method="POST" action="index.php">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">First name</label>
        <input type="text" name="fname" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
       </div>
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Last name</label>
        <input type="text" name="lname" class="form-control" id="exampleInputEmailexampleInputEmail1" aria-describedby="emailHelp">
       </div>
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ID</label>
        <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
       </div>
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Gender</label>
        <input type="text" name="gender" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
       </div>
      
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Address</label>
        <input type="text" name="address" class="form-control" id="exampleInputPassword1">
      </div>
      
      <button type="submit" name="submit" class="mb-btn btn-primary btn ">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  </body>
</html>