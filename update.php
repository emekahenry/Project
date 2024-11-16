<?php
include("connection.php");
 $id = $_GET["id"];

  $select=mysqli_query($connection, "SELECT * FROM users WHERE id='$id' ");
   $row=mysqli_fetch_array($select); 

    if (isset($_POST['submit'])) {
       
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        
        
        $sql = mysqli_query($connection, "UPDATE users SET 
        first_name = '$first_name', last_name='$last_name', gender='$gender', address='$address', 
        phone_number='$tel', email='$email' WHERE id='$id'" ) ;

        if ($sql) {
            echo '<script type ="text/javascript">
            alert("Record Updated Successfully.")
            
            window.location.assign("tables.php")</script>';
        }

    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My First WebSite</title>
</head>
<body>

<a href="tables.php">Click here to go to the users table</a>


    <form id="theform" action="" method="post">

    <div class="row">
        <label for="">First Name:</label>
        <input type="text" name="first_name" value="<?php echo $row["first_name"] ?>" placeholder="e.g John" required>
    </div>   
    <div class="row">
        <label for="">Last Name:</label>
        <input type="text" name="last_name" value="<?php echo $row["last_name"] ?>" placeholder="surname" required>
    </div>      
    <div class="row">
        <label for="">Gender:</label>        
            <input type="radio" name="gender" value="male" required> Male</option>
            <input type="radio" name="gender" value="female" required>Female</option>
    </div>    
    <div class="row">   
        <label for="">Address:</label>
        <input type="text" name="address"  value="address" <?php echo $row["address"] ?> placeholder="no.5" required>
    </div>   
    <div class="row">   
        <label for="">Phone Number:</label>
        <input type="tel" name="tel" value="<?php echo $row["phone_number"] ?>"  placeholder="telephone" required>
    </div>   
    <div class="row">
        <label for="">Email:</label>
        <input type="email" name="email" value="<?php echo $row["email"] ?>"  placeholder="user@mail.com">   
    </div>
    
    <button name="submit">Submit</button>
    </form>

  
</body>
</html>