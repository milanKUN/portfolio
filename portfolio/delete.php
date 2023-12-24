<?php
include 'config.php';
$id = $_GET['id'];
    $delete = mysqli_query($con,"DELETE FROM `contact` WHERE `id` = $id");
    if($delete){
    header("location:show_massage.php");
    }
