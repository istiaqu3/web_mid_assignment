<?php
session_start();


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
      .AI{
        width: 290%;
        font-size: 15px;

       }
      .PT{
        width: 290%;
        font-size: 15px;

       }

	   .FNAT{
        width: 228%;
        font-size: 15px;

       }
	   .FPN{
        width: 228%;
        font-size: 15px;

       }

	   .MPN{
        width: 228%;
        font-size: 15px;

       }

	   .MNAT{
        width: 228%;
        font-size: 15px;

       }

	    .SNAT{
        width: 228%;
        font-size: 15px;

       }
	   .SPN{
        width: 228%;
        font-size: 15px;

       }

	   .MST{
        width: 228%;
        font-size: 15px;

       }

	  .APN{
        width: 228%;
        font-size: 15px;

       }

	   .COB{
        width: 228%;
        font-size: 15px;

       }

	   .BDS{
        width: 228%;
        font-size: 15px;

       }

	   .RGN{
        width: 100%;
        font-size: 15px;

       }

	   .NAT{
        width: 310%;
        font-size: 15px;

       }

	   .CTS{
        width: 310%;
        font-size: 15px;

       }

	   .DIS{
        width: 225%;
        font-size: 15px;

       }

	   .PN{
        width: 225%;
        font-size: 15px;

       }

	   .PO{
        width: 225%;
        font-size: 15px;

       }

	   .PDIS{
        width: 225%;
        font-size: 15px;

       }

	   .PPN{
        width: 225%;
        font-size: 15px;

       }

	   .PPO{
        width: 225%;
        font-size: 15px;

       }

      .btn{
        border-style: none;
      }
    </style>
  </head>
  <body>

    <div class="mainDiv">
<form class="" action="page2.php" method="post">


      <div class="leftDiv">
        <h3>Passport Application Information</h3>
        <table>
          <tr>
            <td>
              Applying In : <span style="color:red">*</span>
            </td>
            <td>
              <select class="AI" name="AI">
                <?php if($_SESSION["AI"]!=null && $_SESSION["AI"]=="Bangladesh"){ ?>
                <option selected value="Bangladesh">Bangladesh</option>
              <?php }else{ ?>
                <option value="Bangladesh" >Bangladesh</option>
              <?php } ?>
              <?php if($_SESSION["AI"]!=null && $_SESSION["AI"]=="India"){ ?>
              <option selected value="India">India</option>
            <?php }else{ ?>
              <option value="India">India</option>
            <?php } ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              Applying Type
            </td>
            <td>
              <h4>NEW APPLICATION</h4>
            </td>
          </tr>


			<tr>
            <td>
              Passport Type : <span style="color:red">*</span>
            </td>
            <td>
              <select class="PT" name="PT">
			    <option>-SELECT-</option>
                <?php if($_SESSION["PT"]!=null && $_SESSION["PT"]=="Ordinary"){ ?>
                <option selected value="Ordinary">Ordinary</option>
              <?php }else{ ?>
                <option value="Ordinary" >Ordinary</option>
              <?php } ?>
              <?php if($_SESSION["PT"]!=null && $_SESSION["PT"]=="Official"){ ?>
                <option selected value="Official">Official</option>
              <?php }else{ ?>
                <option value="Official">Official</option>
              <?php } ?>
			  <?php if($_SESSION["PT"]!=null && $_SESSION["PT"]=="Diplomatic"){ ?>
                <option selected value="Diplomatic">Diplomatic</option>
              <?php }else{ ?>
                <option value="Diplomatic" >Diplomatic</option>
              <?php } ?>
              </select>
            </td>
          </tr>






		  <tr>
            <td>
              Delivery Type :
            </td>
            <td>
              <input  type="radio" name="DT" value="Regular">Regular</input><br>
              <input  type="radio" name="DT" value="Express">Express</input>
            </td>
          </tr>

		<table>
		   <h3>Personal Information</h3>
		 </table>
		 </table>

		 <table>
		  <tr>
            <td>Name of</br> applicant : <span style="color:red">*</span></td>
            <td>
              <?php
              if(isset($_SESSION["VNOA"]) && $_SESSION["VNOA"] !=""){?>
                 <input style="width:260%;display:inline;background-color:red" type="text" name="NOA">
                <?php }
                 else{?>
                  <input style="width:260%;display:inline;" type="text" name="NOA">
                <?php } ?>
            </td>
          </tr>
		  
		  
		  

		 <tr>
            <td>First Part(Given</br> Name) : </td>
            <td>
              <input style="width:260%;" type="text" name="FP">
			</td>
          </tr>

		<tr>
            <td>Second Part</br> (Surname): <span style="color:red">*</span></td>
            <td>
              <?php
              if(isset($_SESSION["VSP"]) && $_SESSION["VSP"] !=""){?>
                <input style="width:260%;display:inline;background-color:red" type="text" name="SP">
                <?php }
                else{?>
                  <input style="width:260%;display:inline;" type="text" name="SP">
                <?php } ?>
            </td>
          </tr>

        </table>
		<table>
		   <h3>Guardian <input type="checkbox" name="TC"><span style="color:red">"Tick"</span>only if Applicant is legally adapted</h3>
		 </table>

		 <table>

		 <tr>
            <td>Father's name: <span style="color:red">*</span></td>
            <td>
              <?php
              if(isset($_SESSION["VFN"]) && $_SESSION["VFN"] !=""){?>
                <input style="width:225%;display:inline;background-color:red" type="text" name="FN">
                <?php }
                else{?>
                  <input style="width:225%;display:inline;" type="text" name="FN">
                <?php } ?>
            </td>
          </tr>

		 <tr>
            <td>
              Father's</br> Nationality : <span style="color:red">*</span>
            </td>
            <td>
              <select class="FNAT" name="FNAT">
                <?php if($_SESSION["FNAT"]!=null && $_SESSION["FNAT"]=="BANGLADESHI"){ ?>
                <option selected value="BANGLADESHI">BANGLADESHI</option>
              <?php }else{ ?>
                <option value="BANGLADESHI" >BANGLADESHI</option>
              <?php } ?>
              <?php if($_SESSION["FNAT"]!=null && $_SESSION["FNAT"]=="INDIAN"){ ?>
                <option selected value="INDIAN">INDIAN</option>
              <?php }else{ ?>
                <option value="INDIAN">INDIAN</option>
              <?php } ?>
			  <?php if($_SESSION["FNAT"]!=null && $_SESSION["FNAT"]=="OTHERS"){ ?>
                <option selected value="OTHERS">OTHERS</option>
              <?php }else{ ?>
                <option value="OTHERS" >OTHERS</option>
              <?php } ?>
              </select>
            </td>
          </tr>

		  <tr>
            <td>
              Father's</br> Profession : <span style="color:red">*</span>
            </td>
            <td>
              <?php if(isset($_SESSION["VFPN"])&&$_SESSION["VFPN"]!=null){ ?>
              <select style="background-color:red;" class="FPN" name="FPN">
              <?php }else{ ?>
                <select class="FPN" name="FPN">
              <?php } ?>
                  <option value="-1">-SELECT-</option>
                <?php if($_SESSION["FPN"]!=null && $_SESSION["FPN"]=="GOVT. EMPLOYEE"){ ?>
                <option selected value="GOVT. EMPLOYEE">GOVT. EMPLOYEE</option>
              <?php }else{ ?>
                <option value="GOVT. EMPLOYEE" >GOVT. EMPLOYEE</option>
              <?php } ?>
              <?php if($_SESSION["FPN"]!=null && $_SESSION["FPN"]=="NON GOVT. EMPLOYEE"){ ?>
                <option selected value="NON GOVT. EMPLOYEE">NON GOVT. EMPLOYEE</option>
              <?php }else{ ?>
                <option value="NON GOVT. EMPLOYEE">NON GOVT. EMPLOYEE</option>
              <?php } ?>
			  <?php if($_SESSION["FPN"]!=null && $_SESSION["FPN"]=="OTHERS"){ ?>
                <option selected value="OTHERS">OTHERS</option>
              <?php }else{ ?>
                <option value="OTHERS" >OTHERS</option>
              <?php } ?>
              </select>
            </td>
          </tr>




		  <tr>
            <td>Mother's name: <span style="color:red">*</span></td>
            <td>
              <?php
              if(isset($_SESSION["VMN"]) && $_SESSION["VMN"] !=""){?>
                <input style="width:225%;display:inline;background-color:red" type="text" name="MN">
                <?php }
                else{?>
                  <input style="width:225%;display:inline;" type="text" name="MN">
                <?php } ?>
            </td>
          </tr>


		 <tr>
            <td>
              Mother's</br> Nationality : <span style="color:red">*</span>
            </td>
            <td>
              <select class="MNAT" name="MNAT">
                <?php if($_SESSION["MNAT"]!=null && $_SESSION["MNAT"]=="BANGLADESHI"){ ?>
                <option selected value="BANGLADESHI">BANGLADESHI</option>
              <?php }else{ ?>
                <option value="BANGLADESHI" >BANGLADESHI</option>
              <?php } ?>
              <?php if($_SESSION["MNAT"]!=null && $_SESSION["MNAT"]=="INDIAN"){ ?>
                <option selected value="INDIAN">INDIAN</option>
              <?php }else{ ?>
                <option value="INDIAN">INDIAN</option>
              <?php } ?>
			  <?php if($_SESSION["MNAT"]!=null && $_SESSION["MNAT"]=="OTHERS"){ ?>
                <option selected value="OTHERS">OTHERS</option>
              <?php }else{ ?>
                <option value="OTHERS" >OTHERS</option>
              <?php } ?>
              </select>
            </td>
          </tr>


		   <tr>
            <td>
              Mother's</br> Profession : <span style="color:red">*</span>
            </td>
            <td>
              <?php if(isset($_SESSION["VMPN"])&&$_SESSION["VMPN"]!=null){ ?>
              <select style="background-color:red;" class="MPN" name="MPN">
              <?php }else{ ?>
                <select class="MPN" name="MPN">
              <?php } ?>
                 <option value="-1">-SELECT-</option>
                <?php if($_SESSION["MPN"]!=null && $_SESSION["MPN"]=="GOVT. EMPLOYEE"){ ?>
                <option selected value="GOVT. EMPLOYEE">GOVT. EMPLOYEE</option>
              <?php }else{ ?>
                <option value="GOVT. EMPLOYEE" >GOVT. EMPLOYEE</option>
              <?php } ?>
              <?php if($_SESSION["MPN"]!=null && $_SESSION["MPN"]=="NON GOVT. EMPLOYEE"){ ?>
                <option selected value="NON GOVT. EMPLOYEE">NON GOVT. EMPLOYEE</option>
              <?php }else{ ?>
                <option value="NON GOVT. EMPLOYEE">NON GOVT. EMPLOYEE</option>
              <?php } ?>
			  <?php if($_SESSION["MPN"]!=null && $_SESSION["MPN"]=="OTHERS"){ ?>
                <option selected value="OTHERS">OTHERS</option>
              <?php }else{ ?>
                <option value="OTHERS" >OTHERS</option>
              <?php } ?>
              </select>
            </td>
          </tr>

		  <tr>
            <td>Spouse's name :</td>
            <td>
              <input style="width:225%;" type="text" name="SN">
			</td>
         </tr>

		 <tr>
            <td>
              Spouse's</br> Nationality :</span>
            </td>
            <td>
              <select class="SNAT" name="SNAT">
			   <option>-SELECT-</option>
                <?php if($_SESSION["SNAT"]!=null && $_SESSION["SNAT"]=="BANGLADESHI"){ ?>
                <option selected value="BANGLADESHI">BANGLADESHI</option>
              <?php }else{ ?>
                <option value="BANGLADESHI" >BANGLADESHI</option>
              <?php } ?>
              <?php if($_SESSION["SNAT"]!=null && $_SESSION["SNAT"]=="INDIAN"){ ?>
                <option selected value="INDIAN">INDIAN</option>
              <?php }else{ ?>
                <option value="INDIAN">INDIAN</option>
              <?php } ?>
			  <?php if($_SESSION["SNAT"]!=null && $_SESSION["SNAT"]=="OTHERS"){ ?>
                <option selected value="OTHERS">OTHERS</option>
              <?php }else{ ?>
                <option value="OTHERS" >OTHERS</option>
              <?php } ?>
              </select>
            </td>
          </tr>

		  <tr>
            <td>
              Spouse's</br> Profession :</span>
            </td>
            <td>
              <select class="SPN" name="SPN">
			    <option>-SELECT-</option>
                <?php if($_SESSION["SPN"]!=null && $_SESSION["SPN"]=="GOVT. EMPLOYEE"){ ?>
                <option selected value="GOVT. EMPLOYEE">GOVT. EMPLOYEE</option>
              <?php }else{ ?>
                <option value="GOVT. EMPLOYEE" >GOVT. EMPLOYEE</option>
              <?php } ?>
              <?php if($_SESSION["SPN"]!=null && $_SESSION["SPN"]=="NON GOVT. EMPLOYEE"){ ?>
                <option selected value="NON GOVT. EMPLOYEE">NON GOVT. EMPLOYEE</option>
              <?php }else{ ?>
                <option value="NON GOVT. EMPLOYEE">NON GOVT. EMPLOYEE</option>
              <?php } ?>
			  <?php if($_SESSION["SPN"]!=null && $_SESSION["SPN"]=="OTHERS"){ ?>
                <option selected value="OTHERS">OTHERS</option>
              <?php }else{ ?>
                <option value="OTHERS" >OTHERS</option>
              <?php } ?>
              </select>
            </td>
          </tr>

		 <tr>
            <td>
              Marital Status : <span style="color:red">*</span>
            </td>
            <td>
              <?php if(isset($_SESSION["VMST"])&&$_SESSION["VMST"]!=null){ ?>
              <select style="background-color:red;" class="MST" name="MST">
              <?php }else{ ?>
                <select class="MST" name="MST">
              <?php } ?>
                 <option value="-1">-SELECT-</option>
                <?php if($_SESSION["MST"]!=null && $_SESSION["MST"]=="MARRIED"){ ?>
                <option selected value="MARRIED">MARRIED</option>
              <?php }else{ ?>
                <option value="MARRIED" >MARRIED</option>
              <?php } ?>
              <?php if($_SESSION["MST"]!=null && $_SESSION["MST"]=="UNMARRIED"){ ?>
                <option selected value="UNMARRIED">UNMARRIED</option>
              <?php }else{ ?>
                <option value="UNMARRIED">UNMARRIED</option>
              <?php } ?>
              </select>
            </td>
          </tr>


		   <tr>
            <td>
              Applicant's</br> Profession : <span style="color:red">*</span>
            </td>
            <td>
              <?php if(isset($_SESSION["VAPN"])&&$_SESSION["VAPN"]!=null){ ?>
              <select style="background-color:red;" class="APN" name="APN">
              <?php }else{ ?>
                <select class="APN" name="APN">
              <?php } ?>
                 <option value="-1">-SELECT-</option>
                <?php if($_SESSION["APN"]!=null && $_SESSION["APN"]=="GOVT. EMPLOYEE"){ ?>
                <option selected value="GOVT. EMPLOYEE">GOVT. EMPLOYEE</option>
              <?php }else{ ?>
                <option value="GOVT. EMPLOYEE" >GOVT. EMPLOYEE</option>
              <?php } ?>
              <?php if($_SESSION["APN"]!=null && $_SESSION["APN"]=="NON GOVT. EMPLOYEE"){ ?>
                <option selected value="NON GOVT. EMPLOYEE">NON GOVT. EMPLOYEE</option>
              <?php }else{ ?>
                <option value="NON GOVT. EMPLOYEE">NON GOVT. EMPLOYEE</option>
              <?php } ?>
			  <?php if($_SESSION["APN"]!=null && $_SESSION["APN"]=="OTHERS"){ ?>
                <option selected value="OTHERS">OTHERS</option>
              <?php }else{ ?>
                <option value="OTHERS" >OTHERS</option>
              <?php } ?>
              </select>
            </td>
          </tr>

		  <tr>
            <td>
              Country Of</br> Birth : <span style="color:red">*</span>
            </td>
            <td>
              <select class="COB" name="COB">
                <?php if($_SESSION["COB"]!=null && $_SESSION["COB"]=="BANGLADESH"){ ?>
                <option selected value="BANGLADESH">BANGLADESH</option>
              <?php }else{ ?>
                <option value="BANGLADESH" >BANGLADESH</option>
              <?php } ?>
              <?php if($_SESSION["COB"]!=null && $_SESSION["COB"]=="INDIA"){ ?>
                <option selected value="INDIA">INDIA</option>
              <?php }else{ ?>
                <option value="INDIA">INDIA</option>
              <?php } ?>
			  <?php if($_SESSION["COB"]!=null && $_SESSION["COB"]=="OTHERS"){ ?>
                <option selected value="OTHERS">OTHERS</option>
              <?php }else{ ?>
                <option value="OTHERS" >OTHERS</option>
              <?php } ?>
              </select>
            </td>
          </tr>

		  <tr>
            <td>
             Birth District : <span style="color:red">*</span>
            </td>
            <td>
              <?php if(isset($_SESSION["VBDS"])&&$_SESSION["VBDS"]!=null){ ?>
              <select style="background-color:red;" class="BDS" name="BDS">
              <?php }else{ ?>
                <select class="BDS" name="BDS">
              <?php } ?>
                 <option value="-1">-SELECT-</option>
                <?php if($_SESSION["BDS"]!=null && $_SESSION["BDS"]=="DHAKA"){ ?>
                <option selected value="DHAKA">DHAKA</option>
              <?php }else{ ?>
                <option value="DHAKA" >DHAKA</option>
              <?php } ?>
              <?php if($_SESSION["BDS"]!=null && $_SESSION["BDS"]=="KUSHTIA"){ ?>
                <option selected value="KUSHTIA">KUSHTIA</option>
              <?php }else{ ?>
                <option value="KUSHTIA">KUSHTIA</option>
              <?php } ?>
			  <?php if($_SESSION["BDS"]!=null && $_SESSION["BDS"]=="OTHERS"){ ?>
                <option selected value="RAJSHAHI">RAJSHAHI</option>
              <?php }else{ ?>
                <option value="RAJSHAHI" >RAJSHAHI</option>
              <?php } ?>
              </select>
            </td>
          </tr>

		 </table>





      </div>

      <div class="rightDiv">
        <table>
          <tr>
            <td>Date of Birth : <span style="color:red">*</span></td>
            <td>
              <input style="width:100%;" type="text" name="DOB">
			</td>
          </tr>

		  <tr>
            <td>Gender :<span style="color:red">*</span></</td>
            <td>
              <input  type="radio" name="G" value="Male" checked>Male</input><br>
              <input  type="radio" name="G" value="Female">Female</input><br>
			  <input  type="radio" name="G" value="Others">Others</input><br>
              
            </td>
          </tr>

		  <tr>
            <td>Birth ID No: <span style="color:red">*</span></td>
            <td>
              <?php
              if(isset($_SESSION["VBIN"]) && $_SESSION["VBIN"] !=""){?>
                <input style="width:100%;display:inline;background-color:red" type="text" name="BIN">
                <?php }
                else{?>
                  <input style="width:100%;display:inline;" type="text" name="BIN">
                <?php } ?>
            </td>
          </tr>

		  <tr>
            <td>National ID No:</td>
            <td>
              <?php
              if(isset($_SESSION["VNIN"]) && $_SESSION["VNIN"] !=""){?>
                <input style="width:100%;display:inline;background-color:red" type="text" name="NIN">
                <?php }
                else{?>
                  <input style="width:100%;display:inline;" type="text" name="NIN">
                <?php } ?>
            </td>
          </tr>

		  <tr>
            <td>Tax ID No:</td>
            <td>
              <?php
              if(isset($_SESSION["VTIN"]) && $_SESSION["VTIN"] !=""){?>
                <input style="width:100%;display:inline;background-color:red" type="text" name="TIN">
                <?php }
                else{?>
                  <input style="width:100%;display:inline;" type="text" name="TIN">
                <?php } ?>
            </td>
          </tr>

		  <tr>
            <td>Height: <span style="color:red">*</span></td>
			<td>
              <?php
              if(isset($_SESSION["VC"]) && $_SESSION["VC"] !="" && isset($_SESSION["VI"]) && $_SESSION["VI"] !="" ){?>
                <input style="width:10%;display:inline;background-color:red" type="text" name="C">cm<input style="width:10%;display:inline;background-color:red" type="text" name="I">inch
                <?php }
                else{?>
                  <input style="width:10%;display:inline;" type="text" name="C">cm<input style="width:10%;display:inline;" type="text" name="I">inch
                <?php } ?>
            </td>
			
          </tr>


		  <tr>
            <td>
              Religion : <span style="color:red">*</span>
            </td>
            <td>
              <?php if(isset($_SESSION["VRGN"])&&$_SESSION["VRGN"]!=null){ ?>
              <select style="background-color:red;" class="RGN" name="RGN">
              <?php }else{ ?>
                <select class="RGN" name="RGN">
              <?php } ?>
                 <option value="-1">-SELECT-</option>
                <?php if($_SESSION["RGN"]!=null && $_SESSION["RGN"]=="ISLAM"){ ?>
                <option selected value="ISLAM">ISLAM</option>
              <?php }else{ ?>
                <option value="ISLAM" >ISLAM</option>
              <?php } ?>
              <?php if($_SESSION["RGN"]!=null && $_SESSION["RGN"]=="RGN"){ ?>
                <option selected value="HINDU">HINDU</option>
              <?php }else{ ?>
                <option value="HINDU">HINDU</option>
              <?php } ?>
			  <?php if($_SESSION["RGN"]!=null && $_SESSION["RGN"]=="CHRISTIAN"){ ?>
                <option selected value="CHRISTIAN">CHRISTIAN</option>
              <?php }else{ ?>
                <option value="CHRISTIAN" >CHRISTIAN</option>
              <?php } ?>
			  <?php if($_SESSION["RGN"]!=null && $_SESSION["RGN"]=="OTHERS"){ ?>
                <option selected value="OTHERS">OTHERS</option>
              <?php }else{ ?>
                <option value="OTHERS" >OTHERS</option>
              <?php } ?>
              </select>
            </td>
          </tr>


		  <tr>
            <td>Email: <span style="color:red">*</span></td>
            <td>
              <?php
              if(isset($_SESSION["VE"]) && $_SESSION["VE"] !=""){?>
                <input style="width:100%;display:inline;background-color:red" type="text" name="E">
                <?php }
                else{?>
                  <input style="width:100%;display:inline;" type="text" name="E">
                <?php } ?>
            </td>
          </tr>

		  </table>
		<table>
		   <h3>Citizenship Information</h3>
		 </table>

		<table>
		 <tr>
            <td>
             Nationality : <span style="color:red">*</span>
            </td>
            <td>
              <select class="NAT" name="NAT">
                <?php if($_SESSION["NAT"]!=null && $_SESSION["NAT"]=="BANGLADESHI"){ ?>
                <option selected value="BANGLADESHI">BANGLADESHI</option>
              <?php }else{ ?>
                <option value="BANGLADESHI" >BANGLADESHI</option>
              <?php } ?>
              <?php if($_SESSION["NAT"]!=null && $_SESSION["NAT"]=="INDIAN"){ ?>
                <option selected value="INDIAN">INDIAN</option>
              <?php }else{ ?>
                <option value="INDIAN">INDIAN</option>
              <?php } ?>
			  <?php if($_SESSION["NAT"]!=null && $_SESSION["NAT"]=="OTHERS"){ ?>
                <option selected value="OTHERS">OTHERS</option>
              <?php }else{ ?>
                <option value="OTHERS" >OTHERS</option>
              <?php } ?>
              </select>
            </td>
          </tr>


		   <tr>
            <td>
             Citizenship</br> Status : <span style="color:red">*</span>
            </td>
            <td>
              <select class="CTS" name="CTS">
                <?php if($_SESSION["NAT"]!=null && $_SESSION["NAT"]=="BIRTH"){ ?>
                <option selected value="BIRTH">BIRTH</option>
              <?php }else{ ?>
                <option value="BIRTH" >BIRTH</option>
              <?php } ?>
              <?php if($_SESSION["CTS"]!=null && $_SESSION["CTS"]=="DESCENT"){ ?>
                <option selected value="DESCENT">DESCENT</option>
              <?php }else{ ?>
                <option value="DESCENT">DESCENT</option>
              <?php } ?>
			  <?php if($_SESSION["CTS"]!=null && $_SESSION["CTS"]=="OTHERS"){ ?>
                <option selected value="OTHERS">OTHERS</option>
              <?php }else{ ?>
                <option value="OTHERS" >OTHERS</option>
              <?php } ?>
              </select>
            </td>
          </tr>


		  <tr>
            <td>Dual</br> Citizenship :<span style="color:red">*</span></</td>
            <td>
              <input  type="radio" name="G" value="Yes">Yes</input><br>
              <input  type="radio" name="G" value="No">No</input><br>
            </td>
          </tr>

		  <table>
		    <h3>Present Address</h3>
		  </table>
		  </table>
		  <table>
		  <tr>
            <td>Village/House:</td>
            <td>
              <input style="width:225%;" type="text" name="VH">
			</td>
          </tr>

		  <tr>
            <td>Road/Block/</br>Sector:</td>
            <td>
              <input style="width:225%;" type="text" name="RBS">
			</td>
          </tr>

		  <tr>
            <td>
             District : <span style="color:red">*</span>
            </td>
            <td>
              <?php if(isset($_SESSION["VDIS"])&&$_SESSION["VDIS"]!=null){ ?>
              <select style="background-color:red;" class="DIS" name="DIS">
              <?php }else{ ?>
                <select class="DIS" name="DIS">
              <?php } ?>
                 <option value="-1">-SELECT-</option>
                <?php if($_SESSION["DIS"]!=null && $_SESSION["DIS"]=="DHAKA"){ ?>
                <option selected value="DHAKA">DHAKA</option>
              <?php }else{ ?>
                <option value="DHAKA" >DHAKA</option>
              <?php } ?>
              <?php if($_SESSION["DIS"]!=null && $_SESSION["DIS"]=="KUSHTIA"){ ?>
                <option selected value="KUSHTIA">KUSHTIA</option>
              <?php }else{ ?>
                <option value="KUSHTIA">KUSHTIA</option>
              <?php } ?>
			  <?php if($_SESSION["DIS"]!=null && $_SESSION["DIS"]=="RAJSHAHI"){ ?>
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
              <?php if(isset($_SESSION["VPN"])&&$_SESSION["VPN"]!=null){ ?>
              <select style="background-color:red;" class="PN" name="PN">
              <?php }else{ ?>
                <select class="PN" name="PN">
              <?php } ?>
                 <option value="-1"></option>
                <?php if($_SESSION["PN"]!=null && $_SESSION["PN"]=="DHAKA"){ ?>
                <option selected value="DHAKA">DHAKA</option>
              <?php }else{ ?>
                <option value="DHAKA" >DHAKA</option>
              <?php } ?>
              <?php if($_SESSION["PN"]!=null && $_SESSION["PN"]=="KUSHTIA"){ ?>
                <option selected value="KUSHTIA">KUSHTIA</option>
              <?php }else{ ?>
                <option value="KUSHTIA">KUSHTIA</option>
              <?php } ?>
			  <?php if($_SESSION["PN"]!=null && $_SESSION["PN"]=="RAJSHAHI"){ ?>
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
              <?php if(isset($_SESSION["VPO"])&&$_SESSION["VPO"]!=null){ ?>
              <select style="background-color:red;" class="PO" name="PO">
              <?php }else{ ?>
                <select class="PO" name="PO">
              <?php } ?>
                 <option value="-1"></option>
                <?php if($_SESSION["PO"]!=null && $_SESSION["PO"]=="DHAKA"){ ?>
                <option selected value="DHAKA">DHAKA</option>
              <?php }else{ ?>
                <option value="DHAKA" >DHAKA</option>
              <?php } ?>
              <?php if($_SESSION["PO"]!=null && $_SESSION["PO"]=="KUSHTIA"){ ?>
                <option selected value="KUSHTIA">KUSHTIA</option>
              <?php }else{ ?>
                <option value="KUSHTIA">KUSHTIA</option>
              <?php } ?>
			  <?php if($_SESSION["PO"]!=null && $_SESSION["PO"]=="RAJSHAHI"){ ?>
                <option selected value="RAJSHAHI">RAJSHAHI</option>
              <?php }else{ ?>
                <option value="RAJSHAHI" >RAJSHAHI</option>
              <?php } ?>
              </select>
            </td>
          </tr>

		 </table>



		 <table>
		    <h3>Permanent Address</h3>
		  </table>
		  </table>
		  <table>
		  <tr>
		    <td>
			<input type="checkbox" name="Same">Same as above

			</td>
		  </tr>


		  <tr>
            <td>Village/House:</td>
            <td>
              <input style="width:225%;" type="text" name="PVH">
			</td>
          </tr>

		  <tr>
            <td>Road/Block/</br>Sector:</td>
            <td>
              <input style="width:225%;" type="text" name="PRBS">
			</td>
          </tr>

		  <tr>
            <td>
             District : <span style="color:red">*</span>
            </td>
            <td>
              <?php if(isset($_SESSION["VPDIS"])&&$_SESSION["VPDIS"]!=null){ ?>
              <select style="background-color:red;" class="PDIS" name="PDIS">
              <?php }else{ ?>
                <select class="PDIS" name="PDIS">
              <?php } ?>
                 <option value="-1">-SELECT-</option>
                <?php if($_SESSION["PDIS"]!=null && $_SESSION["PDIS"]=="DHAKA"){ ?>
                <option selected value="DHAKA">DHAKA</option>
              <?php }else{ ?>
                <option value="DHAKA" >DHAKA</option>
              <?php } ?>
              <?php if($_SESSION["PDIS"]!=null && $_SESSION["PDIS"]=="KUSHTIA"){ ?>
                <option selected value="KUSHTIA">KUSHTIA</option>
              <?php }else{ ?>
                <option value="KUSHTIA">KUSHTIA</option>
              <?php } ?>
			  <?php if($_SESSION["PDIS"]!=null && $_SESSION["PDIS"]=="RAJSHAHI"){ ?>
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
              <?php if(isset($_SESSION["VPPN"])&&$_SESSION["VPPN"]!=null){ ?>
              <select style="background-color:red;" class="PPN" name="PPN">
              <?php }else{ ?>
                <select class="PPN" name="PPN">
              <?php } ?>
                 <option value="-1"></option>
                <?php if($_SESSION["PPN"]!=null && $_SESSION["PPN"]=="DHAKA"){ ?>
                <option selected value="DHAKA">DHAKA</option>
              <?php }else{ ?>
                <option value="DHAKA" >DHAKA</option>
              <?php } ?>
              <?php if($_SESSION["PPN"]!=null && $_SESSION["PPN"]=="KUSHTIA"){ ?>
                <option selected value="KUSHTIA">KUSHTIA</option>
              <?php }else{ ?>
                <option value="KUSHTIA">KUSHTIA</option>
              <?php } ?>
			  <?php if($_SESSION["PPN"]!=null && $_SESSION["PPN"]=="RAJSHAHI"){ ?>
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
              <?php if(isset($_SESSION["VPPO"])&&$_SESSION["VPPO"]!=null){ ?>
              <select style="background-color:red;" class="PPO" name="PPO">
              <?php }else{ ?>
                <select class="PPO" name="PPO">
              <?php } ?>
                 <option value="-1"></option>
                <?php if($_SESSION["PPO"]!=null && $_SESSION["PPO"]=="DHAKA"){ ?>
                <option selected value="DHAKA">DHAKA</option>
              <?php }else{ ?>
                <option value="DHAKA" >DHAKA</option>
              <?php } ?>
              <?php if($_SESSION["PPO"]!=null && $_SESSION["PPO"]=="KUSHTIA"){ ?>
                <option selected value="KUSHTIA">KUSHTIA</option>
              <?php }else{ ?>
                <option value="KUSHTIA">KUSHTIA</option>
              <?php } ?>
			  <?php if($_SESSION["PPO"]!=null && $_SESSION["PPO"]=="RAJSHAHI"){ ?>
                <option selected value="RAJSHAHI">RAJSHAHI</option>
              <?php }else{ ?>
                <option value="RAJSHAHI" >RAJSHAHI</option>
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
              <input class="btn" type="submit" name="SC" value="SAVE NOW & CONTINUE IN FUTURE">
              <input class="btn" type="submit" name="Save" value="SAVE & NEXT">
            </td>
          </tr>
        </table>
      </div>
    </form>

    </div>

  </body>
</html>
