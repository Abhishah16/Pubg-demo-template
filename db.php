<html>
<body>
<?php
// DATABASE INFO - DONT CHANGE
$server = "localhost";
$user = "root";
$pass = "root";
$database = "pubg";
$conn = mysqli_connect($server,$user,$pass,$database);
if (!$conn)
{"No Connection";}
// GET USER INO AND SAVE TO DATABASE
$n = $_POST["name"];
$a = $_POST["add"];
$b = $_POST["email"];
$c = $_POST["rpass"];
$d = $_POST["phone"];
$e = $_POST["subject"];
$sql = "INSERT INTO `users` ( `username`, `password`, `email`, `gender`) 
VALUES ('$n', '$a', '$b' , '$c','$d','$e')";
if (mysqli_query($conn,$sql)) 
else
{echo "Sorry could not save to database".mysqli_error($conn);}
?>
</body>
</html>