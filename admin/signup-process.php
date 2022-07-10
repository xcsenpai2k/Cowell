<?php
session_start();
require '../connect.php';
if($_POST)
{
    $error = [];
    if(strlen($_POST['fullName']) == 0 )
    {
        $error['fullName'] = "first name is required";
    }

    if(strlen($_POST['email']) == 0)
    {
        $error['email'] = "email is required";
    } 
    if(strlen($_POST['address']) == 0)
    {
        $error['address'] = "address is required";
    } 
    if(strlen($_POST['password']) == 0)
    {
        $error['password'] = "password is required";
    } 
    else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = "email not true";
    }

    if($error)
    {
        $_SESSION['error'] = $error;
        $_SESSION['old'] = $_POST;
        header(('location: /admin/signup.php'));
        exit();
    }
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $sql = "insert into users (fullName, email, password, birthday, address)
    values('$fullName','$email','$password','$birthday','$address')"; 
    $conn->exec($sql);
}
else {
    header('location: /admin/signup.php');
    exit();
}