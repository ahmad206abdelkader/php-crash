<?php

$conn = mysqli_connect('localhost', 'root','','book_db');

if($conn->connect_error){
    die("not connected".$conn->connect_error);
}

if(isset($_POST['send'])){
$name = $_POST['name']; 
$email = $_POST['email']; 
$phone = $_POST['phone']; 
$adress = $_POST['adress']; 

$request = "insert into book_form(name, email, phone, adress) values('$name', '$email', '$phone', '$adress')";

mysqli_query($conn, $request);

header('location:home.php');
}else{
    echo 'something went wrong try again'; 
}
