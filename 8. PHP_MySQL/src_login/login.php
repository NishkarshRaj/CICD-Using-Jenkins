<?php
$i=$_POST["sapid"];
$n=$_POST["name"];
$con=mysqli_connect("localhost","root","","devops1");
$sql="select sapid,name from register";
$res=mysqli_query($con,$sql);
$p=0;
while($row=mysqli_fetch_array($res))
{
if(($row["name"]==$n)&&($row["sapid"]==$i))
{
$p=1;
}
}
if($p==1)
{
echo "Login Successful";
}
else
{
echo "Wrong credentials";
}
?>