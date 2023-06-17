<?php

    $connect = mysqli_connect("localhost","root","","ajx");

    $user_id = $_POST['user_id'];

    $delete= "DELETE  FROM ajax WHERE id=$user_id";
    $query = mysqli_query($connect,$delete);
        if($query){
            echo "Delete Confirm";
        }else{
            echo "Failed";
        }
    ?>