
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
<form    method="post"> 
       <label> username </label>
      <input type="email" name="email">
      <label>  password</label>
      <input type="text" name="password">
       
    <input type="submit" name="submit" class="btn btn-secondary" >
     </form> 
</div>
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
     include 'conn.php';
     
     $id=$_GET['updateid'];
     
     if(isset($_POST['submit'])){
   
     

   $email=$_POST['email'];
   $pass=$_POST['password'];



    $sql = "UPDATE student SET email='$email', password=$pass WHERE email='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
      echo "updated";
    header(
      'location:update.php'); }
      else{
        die('connection failed:' .$conn->connect_error);
      }
     }
   
   
   
     ?>

</body>
</html>
 