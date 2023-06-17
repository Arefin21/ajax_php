<?php

    $connect = mysqli_connect("localhost","root","","ajx");

    $id = $_GET['user_id'];
    $select="SELECT * FROM ajax WHERE id=$id";
    $ex = mysqli_query($connect,$select);
        $row=mysqli_fetch_array($ex);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <div class="container">
        <h1>Edit Page</h1>
       <input type="text" name="name" value="<?php echo $row['name'] ?>" placeholder="Enter your Name" id="name"><br>
       <input type="text" name="email" value="<?php echo $row['email'] ?>" placeholder="Enter your Email" id="email"><br>
       <input type="text" name="pass" value="<?php echo $row['password'] ?>" placeholder="Enter your Password" id="pass"><br>
       <button id="edit" onclick="UPDATE_DATA(<?php echo $row['id'] ?>)" >Update Data</button>
       <button class="edit" onclick="home()" >Home</button>
    </div>   
    </body>
    </html>