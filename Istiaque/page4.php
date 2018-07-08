<?php
session_start();
//echo '<pre>';print_r($GLOBALS);echo '</pre>';


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
<form class="" action="t.php" method="post">


      <div class="leftDiv">
       <h3>Personal Information summary</h3>
		   
		   
		   <table>
              
              <tr>
               <td>Name Of Applicant:</td>
               <td><?php echo $_SESSION["NOA"]; ?></td>
              </tr>
              <tr></tr>
			  
			  <tr>
                <td>Second Part(Surname): </td>
                <td><?php echo $_SESSION["SP"]; ?></td>
               </tr>
			   <tr></tr>
			   
			   <tr>
               <td>First Part(Given Name):</td>
               <td><?php echo $_SESSION["FP"]; ?></td>
              </tr>
              <tr></tr>
			  
			  <tr>
                <td>Gender: </td>
                <td><?php echo $_SESSION["G"]; ?></td>
               </tr>
			   <tr></tr>
			   <tr>
               <td>Nationality:</td>
               <td><?php echo $_SESSION["NAT"]; ?></td>
              </tr>
              <tr></tr>
			  
			  <tr>
                <td>Date of Birth: </td>
                <td><?php echo $_SESSION["DOB"]; ?></td>
               </tr>
			   <tr></tr>
			   
			   <tr>
               <td>Place of Birth:</td>
               <td><?php echo $_SESSION["VH"]; ?></td>
              </tr>
              <tr></tr>
			  
			  <tr>
                <td>Father's Name: </td>
                <td><?php echo $_SESSION["FN"]; ?></td>
               </tr>
              <tr></tr>
		      <tr>
                <td>Mother's Name: </td>
                <td><?php echo $_SESSION["MN"]; ?></td>
               </tr>
			   <tr></tr>
			   <tr>
               <td>Spouse's Name:</td>
               <td><?php echo $_SESSION["SN"]; ?></td>
              </tr>
              <tr></tr>
			  
			  <tr>
                <td>National ID No.: </td>
                <td><?php echo $_SESSION["NIN"]; ?></td>
               </tr>
			   <tr></tr>
			   
			   <tr>
               <td>Birth ID No.:</td>
               <td><?php echo $_SESSION["BIN"]; ?></td>
              </tr>
              <tr></tr>
			  
			  <tr>
                <td>Old Passport No.: </td>
                <td><?php echo $_SESSION["PassNo"]; ?></td>
               </tr>
              
		   
		   </table>



         	<p style="color:red">Reminder: Bring old passport during collection of MRP; No correction after handover of delivery slip without fee.</p>


      </div>


      <div class="rightDiv">
         
		 
		   <h3>Passport Information summary</h3>
            <table>
               
              <tr>
               <td>Applying In:</td>
               <td><?php echo $_SESSION["AI"]; ?></td>
              </tr>
              <tr></tr>
			  
			  <tr>
                <td>Passport Type: </td>
                <td><?php echo $_SESSION["PT"]; ?></td>
               </tr>
			   <tr></tr>
			   
			   <tr>
               <td>Application Type:</td>
               <td><?php echo "NEW"; ?></td>
              </tr>
		   </table>
		   
		   
		   <h3>Contact Information summary</h3>
            <table>
               
              <tr>
               <td>Mobile No:</td>
               <td><?php echo $_SESSION["MOBNo"]; ?></td>
              </tr>
              <tr></tr>
			  
			  <tr>
                <td>Present Address: </td>
                <td><?php echo $_SESSION["DIS"]; ?></td>
               </tr>
			   <tr></tr>
			   
			   <tr>
               <td>Permanent Address:</td>
                <td><?php echo $_SESSION["PDIS"]; ?></td>
              </tr>
			  <tr></tr>
			   
			   <tr>
               <td>Email:</td>
               <td><?php echo $_SESSION["E"]; ?></td>
              </tr>
		   </table>
		   
		   
		   <h3>Payment Information summary</h3>
            <table>
               
              <tr>
               <td>Payment Amount:</td>
               <td><?php echo "(" ?><?php  echo $_SESSION["AMO"];?><?php echo ")" ?>
			   <?php echo $_SESSION["inamo"]; ?></td>
              </tr>
              <tr></tr>
			  
			  <tr>
                <td>Payment Date: </td>
                <td><?php echo $_SESSION["DOPAY"]; ?></td>
               </tr>
			   <tr></tr>
			   
			   <tr>
               <td>Receipt No:</td>
               <td><?php echo $_SESSION["RCPTNO"]; ?></td>
              </tr>
			  <tr></tr>
			  
			  <tr>
                <td>Bank Name: </td>
                <td><?php echo $_SESSION["NOB"]; ?></td>
               </tr>
			   <tr></tr>
			   
			   <tr>
               <td>Bank Branch:</td>
               <td><?php echo $_SESSION["NOBR"]; ?></td>
              </tr>
		   </table>
		  

		    <table>

		      <tr>





		       </tr>

              <tr>
               <td></td>
               <td>
                 <button class="btn" name="btn">
                  <a style="text-decoration:none;" href="page3.php">PREVIOUS PAGE</a>
                 </button>
                 <input type="Submit" class="btn2" name="btn2">
                  <a style="text-decoration:none;">SAVE</a>
                 </input>

              </form>
              </td>
		  </tr>

    </div>

  </body>
</html>
