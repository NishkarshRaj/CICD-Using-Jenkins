<?php
$sap=$_POST['sap'];
$n=$_POST['n'];
session_start();
$_SESSION['sap']=$sap;
$_SESSION['n']=$n;
?>

<html>
<style>
body {background-color:lightblue;}
h2 {text-align:center;}
</style>
<form action="two.php" method="post">
<center>
<table>
<tr>
<td>Branch</td>
<td><input type="text" name="b"></td>
</tr>
<tr>
<td>Semester</td>
<td><input type="text" name="s"></td>
</tr>
<tr>
<td><input type="submit" value="Next>>"></td>
</tr>
</table>
</center>
</form>
</html>