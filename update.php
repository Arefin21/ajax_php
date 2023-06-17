<?php

$connect = mysqli_connect("localhost","root","","ajx");

    $name=$_GET['name'];
    $email=$_GET['email'];
    $pass=$_GET['pass'];
    $id=$_GET['user_id'];

    $update = "UPDATE ajax SET name='$name',email='$email',password='$pass'  WHERE id = $id";
    $ex = mysqli_query($connect,$update);

    if($ex){
        echo "Update Data Successfully";
    }else{
        echo "Update Data Failed";
    }
?>