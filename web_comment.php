<?php
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,"kanika");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];





if(isset($_POST['button']))
{
$sql= "INSERT INTO web_comments(id,Name,Email,Phone_number,message,status,date) VALUES (null,'$name','$email','$phone','$message','unread',CURRENT_TIMESTAMP)";

if (mysqli_query($con,$sql))
{
header("location:index.php");	

}
else
{
die(Error .mysqli_error());
echo('error sending comment, please try again');	
}
}
mysqli_close();
?>