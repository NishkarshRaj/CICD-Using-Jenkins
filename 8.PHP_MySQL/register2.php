<?php
$i=$_POST["sapid"];
$n=$_POST["name"];
$b=$_POST["branch"];
$g=$_POST["sapid"];
$m=$_POST["mno"];
$e=$_POST["email"];
$con=mysqli_connect("localhost","root","","devops1");
$sql="insert into register values ($i,'$n','$b','$g','$m','$e')";
mysqli_query($con,$sql);
echo "Successfully Registered";
?>