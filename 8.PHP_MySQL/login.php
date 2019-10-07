<?php
$i=$_POST["sapid"];
$n=$_POST["name"];
$con=mysqli_connect("localhost","root","","devops1");
$sql="select sapid,name from register";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
if(($row["name"]==$n)&&($row["sapid"]==$i))
{
echo "Successful Login";
}
else
{
echo "Wrong credentials";
}
?>