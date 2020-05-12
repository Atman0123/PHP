<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "brm_db";

$conn = mysqli_connect($server,$username,$password,$database);


// if(!$conn)
//     {
//         die("connection to this data basr fail due to ". mysqli_connect_error());
//     }
  

$title = $_POST['title'];
$price = $_POST['price'];
$author = $_POST['author'];
$sql= "INSERT INTO `book` (`title`, `price`, `author`)
VALUES ('$title', '$price', '$author')";
$result = mysqli_query($conn,$sql);
if($result){
    echo "Inserted";
     
}
else
{
    
    echo "insertion failed";
}
?>
<head>
    
    <title>Insertion</title>
    <h1>Book Recored </h1>
</head>
<body>
Do you inset more record?
<a href="insertform.php">Click Here</a>
</body>
</html>
