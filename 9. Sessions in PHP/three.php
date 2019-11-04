<?php
$m=$_POST['m'];
$e=$_POST['e'];
session_start();
$sap=$_SESSION['sap'];
$n=$_SESSION['n'];
$b=$_SESSION['b'];
$s=$_SESSION['s'];


echo "Your Name is: ".$n."</br>";
echo "Your SAP ID is: ".$sap."</br>";
echo "Your Branch is: ".$b."</br>";
echo "Your Semester is: ".$s."</br>";
echo "Your Mobile number is: ".$m."</br>";
echo "Your Email is: ".$e."</br>";


session_destroy();

?>
