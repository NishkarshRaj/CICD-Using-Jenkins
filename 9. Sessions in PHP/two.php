<?php
$b=$_POST['b'];
$s=$_POST['s'];
session_start();
$_SESSION['b']=$b;
$_SESSION['s']=$s;
?>


<html>
<style>
body {background-color:lightblue;}
h2 {text-align:center;}
</style>
<form action="three.php" method="post">
<center>
<table>
<tr>
<td>Email</td>
<td><input type="text" name="e"></td>
</tr>
<tr>
<td>Mobile Number:</td>
<td><input type="text" name="m"></td>
</tr>
<tr>
<td><input type="submit" value="Submit"></td>
</tr>
</table>
</center>
</form>
</html>