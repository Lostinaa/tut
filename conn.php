<?php
$conn  = new mysqli('localhost','root','','student');
   if($conn->connect_error){
    die('connection failed:' .$conn->connect_error);
   } ?>