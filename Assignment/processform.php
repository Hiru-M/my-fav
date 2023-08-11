<?php
include('connection.php');
    $firstName =$_POST['firstName'];
    $lastName =$_POST['lastName'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $password =$_POST['password'];
    $user=$_POST['user'];
  
  
 $sql ="INSERT INTO registration (firstName, lastName, email,phone,password,user)
        VALUES (?, ?, ?, ?, ?, ?)";
 $stmt =mysqli_stmt_init($conn);
 if( ! mysqli_stmt_prepare($stmt,$sql)) {
    die(mysqli_error($conn));
 }
 mysqli_stmt_bind_param($stmt, "sssiss",
                       $firstName,
                       $lastName,
                       $email,
                       $phone,
                       $password,
                       $user );
mysqli_stmt_execute($stmt);

echo "Record saved.";
?>