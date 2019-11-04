<?php
$con=mysqli_connect("localhost","root","","devops1");
$sql="select sapid,name,branch from register";
$res=mysqli_query($con,$sql);

echo "<table border='2'><tr><th>SAP ID</th><th>Name</th><th>Branch</th></tr>";

while($row=mysqli_fetch_array($res))
{
echo "<tr><td>".$row["sapid"]."</td><td>".$row["name"]."</td><td>".$row["branch"]."</td></tr>";
}
echo "</table>";
?>