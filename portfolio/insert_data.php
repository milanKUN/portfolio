<?php
include 'config.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=mysqli_real_escape_string($con,$_POST["name"]);
    $name=str_replace("<","&lt;",$name);
    $name=str_replace(">","&gt;",$name);
    $email=mysqli_real_escape_string($con,$_POST["email"]);
    $email=str_replace("<","&lt;",$email);
    $email=str_replace(">","&gt;",$email);
    $phone=mysqli_real_escape_string($con,$_POST["phone"]);
    $phone=str_replace("<","&lt;",$phone);
    $phone=str_replace(">","&gt;",$phone);
    $massage=mysqli_real_escape_string($con,$_POST["massage"]);
    $massage=str_replace("<","&lt;",$massage);
    $massage=str_replace(">","&gt;",$massage);
    $sql="INSERT INTO `contact`(`name`, `email`, `phone`, `massage`) VALUES ('$name','$email','$phone','$massage')";
    if(mysqli_query($con,$sql)){
        header("loaction:index.php");
    } 
}
?>