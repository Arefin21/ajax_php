<?php

    $connect = mysqli_connect("localhost","root","","ajx");

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $insert = "INSERT INTO ajax(name,email,password)VALUES('$name','$email','$pass')";
    $query  = mysqli_query($connect,$insert);

    if($query){
        echo "Data insert Successfully";
    }else{
        echo "Data insert Failed";
    }

?>
