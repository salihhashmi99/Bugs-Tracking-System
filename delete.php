<?php
$con=mysqli_connect("localhost","root","","buglist");

$id=$_GET['id'];


$query=$con->prepare("DELETE FROM bugs_check WHERE Bugs_id=$id");
$query->execute();

echo "<div style='background-color:blue; height:60px;border-radius:50px; width:290px; text-align:center;margin-top:290px;
margin-left:auto;margin-right:auto; '><a href='./create.html' style='font-weight: bold;font-size:20px ;text-decoration:none;
color:white;padding-top:17px;margin-left:-120px;position: absolute;'>Done Move To Home Screen</a></div>"

?>
