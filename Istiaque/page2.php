<?php
session_start();
//echo '<pre>';print_r($GLOBALS);echo '</pre>';
if(isset($_POST["AI"]) && isset($_POST["NOA"]) && isset($_POST["E"]) && isset($_POST["SP"]) && isset($_POST["FN"]) && isset($_POST["FPN"]) && isset($_POST["MN"])&& isset($_POST["MPN"])&&isset($_POST["MST"]) && isset($_POST["APN"]) && isset($_POST["BDS"]) && isset($_POST["BIN"])&&isset($_POST["NIN"]) && isset($_POST["TIN"])&& isset($_POST["C"])&&isset($_POST["I"])&& isset($_POST["RGN"])&& isset($_POST["DIS"])&&isset($_POST["PN"]) && isset($_POST["PO"])&& isset($_POST["PDIS"])&&isset($_POST["PPN"]) && isset($_POST["PPO"])){

$_SESSION["NOA"] = $_POST["NOA"];
$_SESSION["VNOA"]="";


$_SESSION["SP"]=$_POST["SP"];
$_SESSION["VSP"]="";

$_SESSION["FN"] = $_POST["FN"];
$_SESSION["VFN"]="";

$_SESSION["FPN"] = $_POST["FPN"];
$_SESSION["VFPN"]="";

$_SESSION["MN"] = $_POST["MN"];
$_SESSION["VMN"]="";

$_SESSION["MPN"] = $_POST["MPN"];
$_SESSION["VMPN"]="";

$_SESSION["MST"] = $_POST["MST"];
$_SESSION["VMST"]="";

$_SESSION["APN"] = $_POST["APN"];
$_SESSION["VAPN"]="";

$_SESSION["BDS"] = $_POST["BDS"];
$_SESSION["VBDS"]="";

$_SESSION["BIN"] = $_POST["BIN"];
$_SESSION["VBIN"]="";

$_SESSION["NIN"] = $_POST["NIN"];
$_SESSION["VNIN"]="";

$_SESSION["TIN"] = $_POST["TIN"];
$_SESSION["VTIN"]="";

$_SESSION["C"] = $_POST["C"];
$_SESSION["VC"]="";

$_SESSION["I"] = $_POST["I"];
$_SESSION["VI"]="";

$_SESSION["RGN"] = $_POST["RGN"];
$_SESSION["VRGN"]="";

$_SESSION["E"]=$_POST["E"];
$_SESSION["VE"]="";

$_SESSION["DIS"]=$_POST["DIS"];
$_SESSION["VDIS"]="";

$_SESSION["PN"]=$_POST["PN"];
$_SESSION["VPN"]="";

$_SESSION["PO"]=$_POST["PO"];
$_SESSION["VPO"]="";

$_SESSION["PDIS"]=$_POST["PDIS"];
$_SESSION["VPDIS"]="";

$_SESSION["PPN"]=$_POST["PPN"];
$_SESSION["VPPN"]="";

$_SESSION["PPO"]=$_POST["PPO"];
$_SESSION["VPPO"]="";

$_SESSION["FP"]=$_POST["FP"];
$_SESSION["G"]=$_POST["G"];


$_SESSION["NAT"]=$_POST["NAT"];

$_SESSION["VH"]=$_POST["VH"];
$_SESSION["RBS"]=$_POST["RBS"];
$_SESSION["DIS"]=$_POST["DIS"];
$_SESSION["PDIS"]=$_POST["PDIS"];


$_SESSION["SN"]=$_POST["SN"];
$_SESSION["DOB"]=$_POST["DOB"];
$_SESSION["AI"]=$_POST["AI"];
$_SESSION["PT"]=$_POST["PT"];


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
      .ECOUN{
        width: 275%;
        font-size: 15px;

       }

	   .EDIS{
        width: 260%;
        font-size: 15px;

       }

	   .EPN{
        width: 260%;
        font-size: 15px;

       }

	   .EPO{
        width: 260%;
        font-size: 15px;

       }

	   .RLN{
        width: 260%;
        font-size: 15px;

       }

	   .RIR{
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
<form class="" action="page3.php" method="post">


      <div class="leftDiv">
        <h3>Application Contact Information</h3>
        <table>
          <tr>
            <td>
              Office No :
			 </td>
            <td>
              <input style="width:260%;" type="text" name="OfficeNo">
			</td>
         </tr>

		 <tr>
            <td>
              Residence No :
			 </td>
            <td>
              <input style="width:260%;" type="text" name="RSDNo">
			</td>
          </tr>


		  <tr>
            <td>
              Mobile No :
			 </td>
            <td>
              <input style="width:260%;" type="text" name="MOBNo">
			</td>
         </tr>




		<table>
		   <h3>Emergency Contact Person's Details</h3>
		 </table>
		 </table>

		 <table>
		  <tr>
            <td>Name : <span style="color:red">*</span></td>
            <td>
               <?php
              if(isset($_SESSION["VEN"]) && $_SESSION["VEN"] !=""){?>
                <input style="width:275%;display:inline;background-color:red" type="text" name="EN">
                <?php }
                else{?>
                  <input style="width:275%;display:inline;" type="text" name="EN">
                <?php } ?>
			</td>
          </tr>


		 <tr>
            <td>
              Country : <span style="color:red">*</span>
            </td>
            <td>
                <select class="ECOUN" name="ECOUN">
              
                <?php if($_SESSION["ECOUN"]!=null && $_SESSION["ECOUN"]=="BANGLADESH"){ ?>
                <option selected value="BANGLADESH">BANGLADESH</option>
              <?php }else{ ?>
                <option value="BANGLADESH" >BANGLADESH</option>
              <?php } ?>
              <?php if($_SESSION["ECOUN"]!=null && $_SESSION["ECOUN"]=="INDIA"){ ?>
                <option selected value="INDIA">INDIA</option>
              <?php }else{ ?>
                <option value="INDIA">INDIA</option>
              <?php } ?>
			  <?php if($_SESSION["ECOUN"]!=null && $_SESSION["ECOUN"]=="OTHERS"){ ?>
                <option selected value="OTHERS">OTHERS</option>
              <?php }else{ ?>
                <option value="OTHERS" >OTHERS</option>
              <?php } ?>
              </select>
            </td>
          </tr>


		  </table>
		  <table>
		  <tr>
		    <td>
			<input type="checkbox" name="SameAsPer">Same as permanent address

			</td>
		  </tr>
          <tr>
		    <td>
			<input type="checkbox" name="SameAsPre">Same as present address

			</td>
		  </tr>
		  </table>

		  <table>

		  <tr>
            <td>Village/House:</td>
            <td>
              <input style="width:260%;" type="text" name="EVH">
			</td>
          </tr>

		  <tr>
            <td>Road/Block/</br>Sector:</td>
            <td>
              <input style="width:260%;" type="text" name="ERBS">
			</td>
          </tr>

		  <tr>
            <td>
             District : <span style="color:red">*</span>
            </td>
            <td>
              <?php if(isset($_SESSION["VEDIS"])&&$_SESSION["VEDIS"]!=null){ ?>
              <select style="background-color:red;" class="EDIS" name="EDIS">
              <?php }else{ ?>
                <select class="EDIS" name="EDIS">
              <?php } ?>
                 <option value="-1">-SELECT-</option>
                <?php if($_SESSION["EDIS"]!=null && $_SESSION["EDIS"]=="DHAKA"){ ?>
                <option selected value="DHAKA">DHAKA</option>
              <?php }else{ ?>
                <option value="DHAKA" >DHAKA</option>
              <?php } ?>
              <?php if($_SESSION["EDIS"]!=null && $_SESSION["EDIS"]=="KUSHTIA"){ ?>
                <option selected value="KUSHTIA">KUSHTIA</option>
              <?php }else{ ?>
                <option value="KUSHTIA">KUSHTIA</option>
              <?php } ?>
			  <?php if($_SESSION["EDIS"]!=null && $_SESSION["EDIS"]=="RAJSHAHI"){ ?>
                <option selected value="RAJSHAHI">RAJSHAHI</option>
              <?php }else{ ?>
                <option value="RAJSHAHI" >RAJSHAHI</option>
              <?php } ?>
              </select>
            </td>
          </tr>


		  <tr>
            <td>
             Police Station: <span style="color:red">*</span>
            </td>
            <td>
              <?php if(isset($_SESSION["VEPN"])&&$_SESSION["VEPN"]!=null){ ?>
              <select style="background-color:red;" class="EPN" name="EPN">
              <?php }else{ ?>
                <select class="EPN" name="EPN">
              <?php } ?>
                 <option value="-1"></option>
                <?php if($_SESSION["EPN"]!=null && $_SESSION["EPN"]=="DHAKA"){ ?>
                <option selected value="DHAKA">DHAKA</option>
              <?php }else{ ?>
                <option value="DHAKA" >DHAKA</option>
              <?php } ?>
              <?php if($_SESSION["EPN"]!=null && $_SESSION["EPN"]=="KUSHTIA"){ ?>
                <option selected value="KUSHTIA">KUSHTIA</option>
              <?php }else{ ?>
                <option value="KUSHTIA">KUSHTIA</option>
              <?php } ?>
			  <?php if($_SESSION["EPN"]!=null && $_SESSION["EPN"]=="RAJSHAHI"){ ?>
                <option selected value="RAJSHAHI">RAJSHAHI</option>
              <?php }else{ ?>
                <option value="RAJSHAHI" >RAJSHAHI</option>
              <?php } ?>
              </select>
            </td>
          </tr>


		  <tr>
            <td>
             Post Office: <span style="color:red">*</span>
            </td>
            <td>
              <?php if(isset($_SESSION["VEPO"])&&$_SESSION["VEPO"]!=null){ ?>
              <select style="background-color:red;" class="EPO" name="EPO">
              <?php }else{ ?>
                <select class="PO" name="EPO">
              <?php } ?>
                 <option value="-1"></option>
                <?php if($_SESSION["EPO"]!=null && $_SESSION["EPO"]=="DHAKA"){ ?>
                <option selected value="DHAKA">DHAKA</option>
              <?php }else{ ?>
                <option value="DHAKA" >DHAKA</option>
              <?php } ?>
              <?php if($_SESSION["EPO"]!=null && $_SESSION["EPO"]=="KUSHTIA"){ ?>
                <option selected value="KUSHTIA">KUSHTIA</option>
              <?php }else{ ?>
                <option value="KUSHTIA">KUSHTIA</option>
              <?php } ?>
			  <?php if($_SESSION["EPO"]!=null && $_SESSION["EPO"]=="RAJSHAHI"){ ?>
                <option selected value="RAJSHAHI">RAJSHAHI</option>
              <?php }else{ ?>
                <option value="RAJSHAHI" >RAJSHAHI</option>
              <?php } ?>
              </select>
            </td>
          </tr>

          <tr>
            <td>
              Contact No:<span style="color:red">*</span>
			 </td>
            <td>
              <?php
              if(isset($_SESSION["VECNo"]) && $_SESSION["VECNo"] !=""){?>
                <input style="width:260%;display:inline;background-color:red" type="text" name="ECNo">
                <?php }
                else{?>
                  <input style="width:260%;display:inline;" type="text" name="ECNo">
                <?php } ?>
			</td>
         </tr>

		 <tr>
            <td>
              Email:
			 </td>
            <td>
              <input style="width:260%;" type="text" name="EEm">
			</td>
         </tr>

		 <tr>
            <td>
             Relationship: <span style="color:red">*</span>
            </td>
            <td>
              <?php if(isset($_SESSION["VRLN"])&&$_SESSION["VRLN"]!=null){ ?>
                <select style="background-color:red;" class="RLN" name="RLN">
              <?php }else{ ?>
                <select class="RLN" name="RLN">
              <?php } ?>
                 <option value="-1">-SELECT-</option>
                <?php if($_SESSION["RLN"]!=null && $_SESSION["RLN"]=="FATHER"){ ?>
                <option selected value="FATHER">FATHER</option>
              <?php }else{ ?>
                <option value="FATHER" >FATHER</option>
              <?php } ?>
              <?php if($_SESSION["RLN"]!=null && $_SESSION["RLN"]=="MOTHER"){ ?>
                <option selected value="MOTHER">MOTHER</option>
              <?php }else{ ?>
                <option value="MOTHER">MOTHER</option>
              <?php } ?>
			  <?php if($_SESSION["RLN"]!=null && $_SESSION["RLN"]=="BROTHER"){ ?>
                <option selected value="BROTHER">BROTHER</option>
              <?php }else{ ?>
                <option value="BROTHER" >BROTHER</option>
              <?php } ?>
			  <?php if($_SESSION["RLN"]!=null && $_SESSION["RLN"]=="OTHER"){ ?>
                <option selected value="OTHER">OTHER</option>
              <?php }else{ ?>
                <option value="OTHER" >OTHER</option>
              <?php } ?>
              </select>
            </td>
          </tr>



		 </table>





      </div>

      <div class="rightDiv">


		  <table>
		    <h3>Old Passport Information</h3>
		  </table>
		  <table>
		  <tr>
            <td>Passport No:</td>
            <td>
              <input style="width:260%;" type="text" name="PassNo">
			</td>
          </tr>

		  <tr>
            <td>Place Of Issue:</td>
            <td>
              <input style="width:260%;" type="text" name="POI">
			</td>
          </tr>

		  <tr>
            <td>Date Of Issue:</td>
            <td>
              <input style="width:260%;" type="text" name="DOI">
			</td>
          </tr>

		  <tr>
            <td>
             Re-Issue</br>Reason :
            </td>
            <td>
              <select class="RIR" name="RIR">
			    <option>-SELECT-</option>
                <?php if($_SESSION["RIR"]!=null && $_SESSION["RIR"]=="EXPIRED"){ ?>
                <option selected value="EXPIRED">EXPIRED</option>
              <?php }else{ ?>
                <option value="EXPIRED" >EXPIRED</option>
              <?php } ?>
              <?php if($_SESSION["RIR"]!=null && $_SESSION["RIR"]=="LOST"){ ?>
                <option selected value="LOST">LOST</option>
              <?php }else{ ?>
                <option value="LOST">LOST</option>
              <?php } ?>
			  <?php if($_SESSION["RIR"]!=null && $_SESSION["RIR"]=="OTHERS"){ ?>
                <option selected value="OTHERS">OTHERS</option>
              <?php }else{ ?>
                <option value="OTHERS" >OTHERS</option>
              <?php } ?>
              </select>
            </td>
          </tr>




		 </table>

		 <table>

		 <tr>





		 </tr>

            <tr>
              <td></td>
              <td>
                <button class="btn" name="btn">
                  <a style="text-decoration:none;" href="Index.php">PREVIOUS PAGE</a>
              </button>
                <button class="btn2" name="btn2">
                  <a style="text-decoration:none;" href="page3.php">SAVE & NEXT</a>
              </button>

              </form>
              </td>
			 </tr>

    </div>

  </body>
</html>
