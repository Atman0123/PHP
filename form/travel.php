<?php
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

$conn = mysqli_connect($server,$username,$password);
if(!$conn)
    {
        die("connection to this data basr fail due to ". mysqli_connect_error());
    }
    //echo "Success conect to db";
    $name = $_POST['name'];
    $gender = $_POST['gender'];;
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];    
    $sql= " INSERT INTO `trip`.`trip` ( `Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `dt`)
     VALUES ('$name', '$age','$gender', '$email', '$phone', '$desc', current_timestamp());";
     //echo $sql; 
    //  INSERT INTO `trip` (`sno`, `Name`, `age`, `gende`, `email`, `phone`, `other`, `dt`) 
    //  VALUES ('1', 'abc', '22', 'male', 'abc@gmail.com', '9999999999', 'hippo', current_timestamp());
     if($conn->query($sql)==true){
         //echo "Successfuly inserted";
         $insert = true;
     }
     else{
         echo "Error: $sql <br> $conn ->error";
     }
     $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2|Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="ig.png" alt="IIT">
    <div class="container">
    <h3>Welcome to IIT Kharagpur US Trip form</h3>
    <p>Enter your detail and submit this form to cnofirm your 
    participation in the trip</P>
   <?php
   if($insert==true){
   echo "<p class='submitmsg'> Thaks for submiting your form.We are happy to see you 
        for joining us for US trip </p>";

    }
    ?>
    <form action="travel.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter other infomation"></textarea>
        <button class="btn">Submit</button>
    </form>
    </div>
    <script src="index.js"></script>
   
</body>
</html>