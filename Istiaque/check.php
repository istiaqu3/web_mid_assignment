<?php

session_start();
if(isset($_POST["AMO"]) && isset($_POST["inamo"]) && isset($_POST["DOPAY"]) && isset($_POST["RCPTNO"]) && isset($_POST["NOB"])&&isset($_POST["NOBR"])){
	
	
	
	$_SESSION["AMO"]=$_POST["AMO"];
	$_SESSION["DOPAY"]=$_POST["DOPAY"];
	$_SESSION["RCPTNO"]=$_POST["RCPTNO"];
	$_SESSION["NOB"]=$_POST["NOB"];
	$_SESSION["NOBR"]=$_POST["NOBR"];
	$_SESSION["inamo"]=$_POST["inamo"];
	
	
	
}

$noa = $_SESSION["NOA"];
$array=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","j","k","l","","m","n","o","p","q","r","s","t","u","v","w","x","y","z","-","'");
$notLetter=true;
if($noa != null){
  for($i=0;$i<strlen($noa);$i++){
    if(!in_array($noa[$i],$array)){
      $notLetter=false;break;

    }
  }
}else{$_SESSION["VNOA"]="NOT VALID"; header("Location:Index.php");}
if($notLetter==false){
  $_SESSION["VNOA"]="NOT VALID";
  header("Location:Index.php");
}


$sp = $_SESSION["SP"];
$array=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","j","k","l","","m","n","o","p","q","r","s","t","u","v","w","x","y","z","-","'");
$notLetter=true;
if($sp != null){
  for($i=0;$i<strlen($sp);$i++){
    if(!in_array($sp[$i],$array)){
      $notLetter=false;break;

    }
  }
}else{$_SESSION["VSP"]="NOT VALID"; header("Location:Index.php");}
if($notLetter==false){
  $_SESSION["VSP"]="NOT VALID";
  header("Location:Index.php");
}


$fn = $_SESSION["FN"];
$array=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","j","k","l","","m","n","o","p","q","r","s","t","u","v","w","x","y","z","-","'");
$notLetter=true;
if($fn != null){
  for($i=0;$i<strlen($fn);$i++){
    if(!in_array($fn[$i],$array)){
      $notLetter=false;break;

    }
  }
}else{$_SESSION["VFN"]="NOT VALID"; header("Location:Index.php");}
if($notLetter==false){
  $_SESSION["VFN"]="NOT VALID";
  header("Location:Index.php");
}




$fpn = $_SESSION["FPN"];
 if($fpn == "-1"){
   $_SESSION["VFPN"]="NOT VALID";
   header("Location:Index.php");
 }
 
 
 $mn = $_SESSION["MN"];
$array=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","j","k","l","","m","n","o","p","q","r","s","t","u","v","w","x","y","z","-","'");
$notLetter=true;
if($mn != null){
  for($i=0;$i<strlen($mn);$i++){
    if(!in_array($mn[$i],$array)){
      $notLetter=false;break;

    }
  }
}else{$_SESSION["VMN"]="NOT VALID"; header("Location:Index.php");}
if($notLetter==false){
  $_SESSION["VMN"]="NOT VALID";
  header("Location:Index.php");
}




$mpn = $_SESSION["MPN"];
 if($mpn == "-1"){
   $_SESSION["VMPN"]="NOT VALID";
   header("Location:Index.php");
 }

 $mst = $_SESSION["MST"];
 if($mst == "-1"){
   $_SESSION["VMST"]="NOT VALID";
   header("Location:Index.php");
 }
 
 $apn = $_SESSION["APN"];
 if($apn == "-1"){
   $_SESSION["VAPN"]="NOT VALID";
   header("Location:Index.php");
 }
 
 $bds = $_SESSION["BDS"];
 if($bds == "-1"){
   $_SESSION["VBDS"]="NOT VALID";
   header("Location:Index.php");
 }
 
 
 
 
 $bin = $_SESSION["BIN"];
$array=array("0","1","2","3","4","5","6","7","8","9");
$notLetter=true;
if($bin != null && strlen($bin)>=14){
  for($i=0;$i<strlen($bin);$i++){
    if(!in_array($bin[$i],$array)){
      $notLetter=false;break;

    }
  }
}else{$_SESSION["VBIN"]="NOT VALID"; header("Location:Index.php");}
if($notLetter==false){
  $_SESSION["VBIN"]="NOT VALID";
  header("Location:Index.php");
}

$nin = $_SESSION["NIN"];
$array=array("0","1","2","3","4","5","6","7","8","9");
$notLetter=true;
if($nin != null && strlen($nin)>=14){
  for($i=0;$i<strlen($nin);$i++){
    if(!in_array($nin[$i],$array)){
      $notLetter=false;break;

    }
  }
}else{$_SESSION["VNIN"]="NOT VALID"; header("Location:Index.php");}
if($notLetter==false){
  $_SESSION["VNIN"]="NOT VALID";
  header("Location:Index.php");
}

$tin = $_SESSION["TIN"];
$array=array("0","1","2","3","4","5","6","7","8","9");
$notLetter=true;
if($tin != null && strlen($tin)>=14){
  for($i=0;$i<strlen($tin);$i++){
    if(!in_array($tin[$i],$array)){
      $notLetter=false;break;

    }
  }
}else{$_SESSION["VTIN"]="NOT VALID"; header("Location:Index.php");}
if($notLetter==false){
  $_SESSION["VTIN"]="NOT VALID";
  header("Location:Index.php");
}

$c = $_SESSION["C"];
$array=array("0","1","2","3","4","5","6","7","8","9");
$notLetter=true;
if($c != null && strlen($c)<=3){
  for($i=0;$i<strlen($c);$i++){
    if(!in_array($c[$i],$array)){
      $notLetter=false;break;

    }
  }
}else{$_SESSION["VC"]="NOT VALID"; header("Location:Index.php");}
if($notLetter==false){
  $_SESSION["VC"]="NOT VALID";
  header("Location:Index.php");
}
 
 $in = $_SESSION["I"];
$array=array("0","1","2","3","4","5","6","7","8","9");
$notLetter=true;
if($in != null && strlen($in)<=3){
  for($i=0;$i<strlen($in);$i++){
    if(!in_array($in[$i],$array)){
      $notLetter=false;break;

    }
  }
}else{$_SESSION["VI"]="NOT VALID"; header("Location:Index.php");}
if($notLetter==false){
  $_SESSION["VI"]="NOT VALID";
  header("Location:Index.php");
}
 
 
 
 
 

 $email = $_SESSION["E"];
 if (empty($_POST["E"])) {
 $_SESSION["VE"] = "NOT VALID";
 header("Location:Index.php");
  } else {
    $email = test_input($_POST["E"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION["VE"] = "NOT VALID"; 
	  }
	header("Location:Index.php");
  }
  
  
  $rgn = $_SESSION["RGN"];
 if($rgn == "-1"){
   $_SESSION["VRGN"]="NOT VALID";
   header("Location:Index.php");
 }
  
 $dis = $_SESSION["DIS"];
 if($dis == "-1"){
   $_SESSION["VDIS"]="NOT VALID";
   header("Location:Index.php");
 }
$pn = $_SESSION["PN"];
 if($pn == "-1"){
   $_SESSION["VPN"]="NOT VALID";
   header("Location:Index.php");
 }
 
 $po = $_SESSION["PO"];
 if($po == "-1"){
   $_SESSION["VPO"]="NOT VALID";
   header("Location:Index.php");
 }

 $pdis = $_SESSION["PDIS"];
 if($pdis == "-1"){
   $_SESSION["VPDIS"]="NOT VALID";
   header("Location:Index.php");
 }
$ppn = $_SESSION["PPN"];
 if($ppn == "-1"){
   $_SESSION["VPPN"]="NOT VALID";
   header("Location:Index.php");
 }
 
 $ppo = $_SESSION["PPO"];
 if($ppo == "-1"){
   $_SESSION["VPPO"]="NOT VALID";
   header("Location:Index.php");
 }
 
 
 
 
 
  $en = $_SESSION["EN"];
$array=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","j","k","l","","m","n","o","p","q","r","s","t","u","v","w","x","y","z","-","'");
$notLetter=true;
if($en != null){
  for($i=0;$i<strlen($en);$i++){
    if(!in_array($en[$i],$array)){
      $notLetter=false;break;

    }
  }
}else{$_SESSION["VEN"]="NOT VALID"; header("Location:Index.php");}
if($notLetter==false){
  $_SESSION["VEN"]="NOT VALID";
  header("Location:Index.php");
}
 
 
 
 $edis = $_SESSION["EDIS"];
 if($edis == "-1"){
   $_SESSION["VEDIS"]="NOT VALID";
   header("Location:Index.php");
 }
$epn = $_SESSION["EPN"];
 if($epn == "-1"){
   $_SESSION["VEPN"]="NOT VALID";
   header("Location:Index.php");
 }
 
 $epo = $_SESSION["EPO"];
 if($epo == "-1"){
   $_SESSION["VEPO"]="NOT VALID";
   header("Location:Index.php");
 }
 
 
$ecno = $_SESSION["ECNo"];
$array=array("0","1","2","3","4","5","6","7","8","9","+","-");
$notLetter=true;
if($ecno != null && strlen($ecno)<=14){
  for($i=0;$i<strlen($ecno);$i++){
    if(!in_array($ecno[$i],$array)){
      $notLetter=false;break;

    }
  }
}else{$_SESSION["VECNo"]="NOT VALID"; header("Location:Index.php");}
if($notLetter==false){
  $_SESSION["VECNo"]="NOT VALID";
  header("Location:Index.php");
}
$rln = $_SESSION["RLN"];
 if($rln == "-1"){
   $_SESSION["VRLN"]="NOT VALID";
   header("Location:Index.php");
 }


 else {header("Location:page4.php");}
//
 ?>
