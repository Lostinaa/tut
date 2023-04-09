<?php
 include 'conn.php';
 if(isset($_GET['id'])){  
$id = $_GET['id'];
$sql = "DELETE FROM `student` WHERE email='$id'";
$result = mysqli_query($conn,$sql);
if($result){
 echo "deletedd";
 header('location:dis.php');
}else{
 die('connection failed:'.$conn->connect_error);
}
 }


?>