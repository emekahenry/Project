<?php 
  include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <thead>
            <th>serial Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Action</th>
        </thead>

        <?php 
        $i=1;
           $query=mysqli_query($connection, "SELECT * FROM users ORDER BY id DESC ");
           while($row=mysqli_fetch_array($query)) {
           

        ?>       

        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["first_name"]; ?></td>
            <td><?php echo $row["last_name"]; ?></td>
            <td><?php echo $row["gender"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><?php echo $row["phone_number"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td>
              <a style="color:green" href="update.php?id=<?php echo $row["id"] ?>">Update</a>
              <a style="color:red" href="delete.php?id=<?php echo $row["id"] ?>">Delete</a>
            </td>
        </tr>

        
        <?php 
       $i++;
          } 
        ?>



    </table>
</body>
</html>