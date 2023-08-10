<?php
    $firstName =$_POST['firstName'];
    $lastName =$_POST['lastName'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $password =$_POST['password'];
  
   $host ='localhost';
   $dbname ='form';
   $username = "root";
   $password ="";

   $conn = mysqli_connect($host, $username,$password,$dbname);

   if(mysqli_connect_errno()){
    die("Connection error: " . mysqli_connect_error());
   }
 $sql ="INSERT INTO registration (firstName, lastName, email,phone,password)
        VALUES (?, ?, ?, ?, ?)";
 $stmt =mysqli_stmt_init($conn);
 if( ! mysqli_stmt_prepare($stmt,$sql)) {
    die(mysqli_error($conn));
 }
 mysqli_stmt_bind_param($stmt, "sssis",
                       $firstName,
                       $lastName,
                       $email,
                       $phone,
                       $password );
mysqli_stmt_execute($stmt);

echo "Record saved.";
?>