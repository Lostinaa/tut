<?php

                                                                  class database{
                                                 private $host="localhost";
private $user="root";
 private $password="";
 private $dbname="student";
  protected $conn;


  public function __construct{

  
$dsn=("mysql:host=, host.$host,dbname.$dbname");
                                                   $pdo= new PDO($dsn,$password,$user);
$stmt=$pdo->query("SELECT * FROM  student");
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['email'];
}

  }
}



?>