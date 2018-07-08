<?php
 session_start();
 $id=1;
 if(isset($_SESSION["ID"])){$id=$_SESSION["ID"]; $id++;}
 $_SESSION["ID"]=$id;
$file= fopen("n.txt","a");
$txt1=$_SESSION["ID"];
fwrite($file,$txt1);
$txt=$_SESSION["NOA"];
$txt1=$_SESSION["SP"];

fwrite($file,$txt);
fwrite($file,$txt1);

fclose($file);
header("Location:done.php");
//echo '<pre>';
//print_r($GLOBALS);
//echo '</pre>';

?>