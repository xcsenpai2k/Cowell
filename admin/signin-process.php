<?php
session_start();
if($_POST){
    $errors=[];
    if ($_POST['login-id']){
        if(false == filter_var($_POST['login-id'], FILTER_VALIDATE_EMAIL)){
            $errors['login-id'] = $_POST['login-id'];
            $errors['login-id'] .= 'is not a valid email address';
        }
    } else{
        $errors['login-id'] = "Login id is required";
    }

    if (0 === strlen($_POST['password'])){
        $errors['password'] = "Password is required";
    }
    if($errors){
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = $_POST;
        header('location: /admin/signin.php');
        exit();
    } 
    $_SESSION['user'] = 'admin';
    header('location: ../index.php');
    exit();
} else{
    header('location: signin.php');
    exit();
}