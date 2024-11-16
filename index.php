<?php
include("connection.php");

    if (isset($_POST['submit'])) {
       
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
         
        
        
        $sql = mysqli_query($connection, "INSERT INTO users(first_name,last_name,gender,address,phone_number,email)
         values('$first_name','$last_name','$gender','$address','$phone_number','$email')");

        if ($sql) {
            echo '<script type ="text/javascript">
            alert("Thank you; We have Received Your Message, We Will Get Back to You Shortly.")
            
            window.location.assign("index.php")</script>';
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
        <input type="text" name="first_name" placeholder="e.g John" required>
    </div>   
    <div class="row">
        <label for="">Last Name:</label>
        <input type="text" name="last_name" id="last_name" placeholder="surname" required>
    </div>      
    <div class="row">
        <label for="">Gender:</label>        
            <input type="radio" name="gender" value="male"> Male</option>
            <input type="radio" name="gender" value="female">Female</option>
    </div>    
    <div class="row">   
        <label for="">Address:</label>
        <input type="text" name="address"  placeholder="no.5" required>
    </div>   
    <div class="row">   
        <label for="">Phone Number:</label>
        <input type="tel" name="phone_number"  placeholder="telephone" required>
    </div>   
    <div class="row">
        <label for="">Email:</label>
        <input type="email" name="email" placeholder="user@mail.com">   
    </div>
    
    <button name="submit">Submit</button>
    </form>
  
</body>
</html>