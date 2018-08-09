<?php
 $query = require '../core/bstrap.php';
 $username=$_POST["username"];
 $password=$_POST["password"];
 $user = $app['database']->login($username);
//die(var_dump($user));
 if( !empty($user)){
     $user=$user[0];
     if(password_verify($password,$user->password)){
         $_SESSION['username']=$user->username;
         $_SESSION['id']=$user->id;
         $_SESSION['permission']=$user->permission;
         $_SESSION['company']=$user->id_firmy;
     }
 }
 if(isset($_SESSION['username'])){
     header("Location: http://example2.com/");
 }
 else
 {
     $_SESSION=array();
     echo "<script> alert('Login lub hasło jest nieprawidłowe');</script>";
     header( "refresh:0;url=/login" );
     die();
 }

