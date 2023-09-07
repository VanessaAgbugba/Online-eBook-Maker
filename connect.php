<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

//Database connection
$conn = new mysqli('localhost', 'root', '', 'capstone');
if($conn->connect_error){
    die('Connection faiiled : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("intert into registration(fullname, email, passowrd)
    values(?, ?, ?)");
    $stmt->bind_param("sss", $fullname, $email, $password);
    $stmt->execute();
    echo "Registration Successful";
    $stmt->close();
    $conn->close();
}
?>