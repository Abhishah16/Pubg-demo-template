<?php
$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$phone=$_POST["phone"];
$subject=$_POST["subject"];
$con=mysqli_connect("localhost","root","scott","pubg");
if(!$con)
{
die('could nont connect: '.mysqli_error());
}
$chk=mysqli_query($con,"insert into pubg2(name,email,pass,phone,subject) values
('$name','$email','$pass','$phone','$subject')");
if ($chk==1)
{
    echo "data inserted";
    echo "<br/>";
}
else
{
    echo " data not inserted ";
}


mysqli_close($con);

?>