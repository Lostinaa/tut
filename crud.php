<?php
include 'conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="cruds.css">
</head>
    
<body> 
<div class="main">
<div class="logo">  <img src="resmax.png " /> </div>
<form action="crud.php"    method="post"> 
   
       <label> username </label> <input type="email" name="email">
      <label>  password</label>
      <input type="text" name="password">
       
    <input type="submit" class="btn btn-primary" >
     </form> 
     <div class="txt">
                    
                    <a href="#" > forgot password </a>
                    <a href="#" >sign in with company or school </a> 
                    </div>
     </div>
     <footer class="foot">
                        <p>copyright &copy; all right reserved</p>
                        <div >
                            <a href="#"> terms of use </a> | <a href="#"> privacy policy </a>
                        </div>
                    </footer> 
     <?php 
     
   $email=$_POST['email'];
   $pass=$_POST['password'];



    $sql = "insert into `student` (email,password)
    values(' $email',' $pass')";
    $result=mysqli_query($conn,$sql);
    if($result){
      echo "data entered"; }
      else{die('connection failed:' .$conn->connect_error);
      }
    
   
   
   
     ?>

</body>
</html>
