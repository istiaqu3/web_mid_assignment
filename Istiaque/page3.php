<?php
session_start();
//echo '<pre>';print_r($GLOBALS);echo '</pre>';
if(isset($_POST["EN"]) && isset($_POST["EDIS"]) && isset($_POST["EPN"]) && isset($_POST["EPO"]) && isset($_POST["ECNo"])&& isset($_POST["RLN"])&& isset($_POST["PassNo"]) && isset($_POST["MOBNo"])){






$_SESSION["EN"]=$_POST["EN"];
$_SESSION["VEN"]="";

$_SESSION["EDIS"]=$_POST["EDIS"];
$_SESSION["VEDIS"]="";

$_SESSION["EPN"]=$_POST["EPN"];
$_SESSION["VEPN"]="";

$_SESSION["EPO"]=$_POST["EPO"];
$_SESSION["VEPO"]="VEPO";

$_SESSION["ECNo"]=$_POST["ECNo"];
$_SESSION["VECNo"]="";

$_SESSION["RLN"]=$_POST["RLN"];
$_SESSION["VRLN"]="";

$_SESSION["PassNo"]=$_POST["PassNo"];

$_SESSION["MOBNo"]=$_POST["MOBNo"];



}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .leftDiv{
        float: left;
        width: 50%;
        height: 100%;
      }
      .rightDiv{
        width: 50%;
        height: 100%;
        float: right;
      }
      .mainDiv{
      }
      .AMO{
        width: 40%;
        font-size: 15px;

       }

	   .NOB{
        width: 260%;
        font-size: 15px;

       }

	   .NOBR{
        width: 260%;
        font-size: 15px;

       }




      .btn{

		 border-style: none;
		 width: 23%;
         position: absolute;
         left:    1;
         bottom:   0;
        }

	   .btn2{

		 border-style: none;
		 width: 23%;
         position: absolute;
         right:    0;
         bottom:   0;
        }



    </style>
  </head>
  <body>

    <div class="mainDiv">
<form class="" action="check.php" method="post">


      <div class="leftDiv">
        <h3>Payment Information</h3>
        <table>
          <tr>
            <td>Payment Type :<span style="color:red">*</span></</td>
            <td>
              <input  type="radio" name="P" value="Online">Online</input><br>
              <input  type="radio" name="P" value="Non-Online">Non-Online</input><br>
            </td>
          </tr>


		  </table>
		  <table>
		  <tr>
		    <td>
			<input type="checkbox" name="SkipPay">Skip Payment

			</td>
		  </tr>
		  </table>

		  <table>

		 <tr>
            <td>
              Amount :<span style ="color:red">*</span>
			 </td>
			<td>
			   <select class="AMO" name="AMO">
                <?php if($_SESSION["AMO"]!=null && $_SESSION["AMO"]=="BDT"){ ?>
                <option selected value="BDT">BDT</option>
              <?php }else{ ?>
                <option value="BDT" >BDT</option>
              <?php } ?>
              <?php if($_SESSION["AMO"]!=null && $_SESSION["AMO"]=="USD"){ ?>
                <option selected value="USD">USD</option>
              <?php }else{ ?>
                <option value="USD">USD</option>
              <?php } ?>


			</td>
			<td>
			  <input style="width:40%;" type="text" name="inamo">
			</td>
          </tr>


		  <tr>
            <td>
              Date Of Payment:<span style ="color:red">*</span>
			 </td>
            <td>
              <input style="width:260%;" type="text" name="DOPAY">
			</td>
         </tr>

		 <tr>
            <td>
              Receipt No:<span style ="color:red">*</span>
			 </td>
            <td>
              <input style="width:260%;" type="text" name="RCPTNO">
			</td>
         </tr>



		 <tr>
            <td>
              Name Of Bank:
            </td>
            <td>
              <select class="NOB" name="NOB">
			  <option>-SELECT-</option>
                <?php if($_SESSION["NOB"]!=null && $_SESSION["NOB"]=="SHONALI BANK"){ ?>
                <option selected value="SHONALI BANK">SHONALI BANK</option>
              <?php }else{ ?>
                <option value="SHONALI BANK" >SHONALI BANK</option>
              <?php } ?>
              <?php if($_SESSION["NOB"]!=null && $_SESSION["NOB"]=="DHAKA BANK"){ ?>
                <option selected value="DHAKA BANK">DHAKA BANK</option>
              <?php }else{ ?>
                <option value="DHAKA BANK">DHAKA BANK</option>
              <?php } ?>
			  <?php if($_SESSION["NOB"]!=null && $_SESSION["NOB"]=="NOB"){ ?>
                <option selected value="OTHERS">OTHERS</option>
              <?php }else{ ?>
                <option value="OTHERS" >OTHERS</option>
              <?php } ?>
              </select>
            </td>
          </tr>

		  <tr>
            <td>
              Name Of Branch:
            </td>
            <td>
              <select class="NOBR" name="NOBR">
			  <option></option>
                <?php if($_SESSION["NOBR"]!=null && $_SESSION["NOBR"]=="DHAKA"){ ?>
                <option selected value="DHAKA">DHAKA</option>
              <?php }else{ ?>
                <option value="SHONALI BANK" >SHONALI BANK</option>
              <?php } ?>
              <?php if($_SESSION["NOBR"]!=null && $_SESSION["NOBR"]=="KUSHTIA"){ ?>
                <option selected value="KUSHTIA">KUSHTIA</option>
              <?php }else{ ?>
                <option value="KUSHTIA">KUSHTIA</option>
              <?php } ?>
			  <?php if($_SESSION["NOBR"]!=null && $_SESSION["NOBR"]=="NOBR"){ ?>
                <option selected value="OTHERS">OTHERS</option>
              <?php }else{ ?>
                <option value="OTHERS" >OTHERS</option>
              <?php } ?>
              </select>
            </td>
          </tr>

		  </table>






      </div>

      <div class="rightDiv">


		 <table>

		 <tr>





		 </tr>

          <tr>
              <td></td>
              <td>
                <button class="btn" name="btn">
                  <a style="text-decoration:none;" href="page2.php">PREVIOUS PAGE</a>
              </button>
                <button class="btn2" name="btn2">
                  <a style="text-decoration:none;" href="check.php">SAVE & NEXT</a>
              </button>

              </form>
              </td>
		  </tr>

    </div>

  </body>
</html>
