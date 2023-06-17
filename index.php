<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="container">
        <h1>PHP AJAX CRUD OPERATION</h1>
       <input type="text" name="name" placeholder="Enter your Name" id="name"><br>
       <input type="text" name="email" placeholder="Enter your Email" id="email"><br>
       <input type="text" name="pass"placeholder="Enter your Password" id="pass"><br>
       <button class="btn"> Insert Data </button><br><br>
       <button class="read"> Read Data </button>
       <h1>Read Data From Database</h1>
       <table>
        <thead>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>Delete</th>
                <th>Edit</th>
                <tbody id="tbody">
                    
                </tbody>
        </thead>
       </table>
    </div>
    

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
   <script src="ajax.js"></script>


</body>
</html>