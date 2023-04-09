
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="cruds.css">
   <title>Document</title>
</head>
<body>



<?php
 include 'conn.php';
 $sql= "SELECT * FROM `student`";
  $result=mysqli_query($conn,$sql);
  if($result){
   while ($row=mysqli_fetch_assoc($result)){
      $emaill=$row['email'];
      $passs=$row['password'];
      echo ' <table> <tr>
      <th scope="row">'.$emaill.' </th>
      <td>'.$passs.'</td>
      
      <td> <button class="one"> <a href="update.php?updateid='.$emaill.'" >update</a>
      </button>  </td>  <td>
       <button class="two"> <a href="DELETE.php?id='.$emaill.'" >delete</a>
      </button> </td> 
   </tr>   </table>' ;  
    
   } } 
?>     
</body>
</html>