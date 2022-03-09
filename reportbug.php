<?php

$con=mysqli_connect("localhost","root","","buglist");

if(isset($_POST['reportbug'])){
$bug=$_POST['bug'];
$reportername=$_POST['reportername'];
$severity=$_POST['bugseverity'];
$bugtype=$_POST['bugtype'];
$reportedat=date("Y-m-d")." ".date("h:i");
$status="reported";
$query=$con->prepare("INSERT INTO bugs_check(Bugs,Bugs_Types,Reported_By,Date_of_Report,Bugs_Status,Bugs_Saverity) VALUES(?,?,?,?,?,?)");
$query->bind_param("ssssss",$bug,$bugtype,$reportername,$status,$severity,$reportedat);
$query->execute();

$query->close();

echo "<div style='background-color:blue; height:60px;border-radius:50px; width:250px; text-align:center;margin-top:290px;
margin-left:auto;margin-right:auto'><a href='./bugslist.php' style='font-weight: bold;font-size:20px ;text-decoration:none;
color:white;padding-top:18px;margin-left:-84px;position: absolute;'>Move To Homepage</a></div>";

}


?>