<?php

    $connect = mysqli_connect("localhost","root","","ajx");

    $select= "SELECT * FROM ajax";
    $ex = mysqli_query($connect,$select);
    while($row=mysqli_fetch_array($ex)){?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><button onclick="Delete(<?php echo $row['id']?>)">Delete</button></td>
            <td><button onclick="Edit(<?php echo $row['id']?>)">Edit</button></td>
        </tr>

<?php } ?>