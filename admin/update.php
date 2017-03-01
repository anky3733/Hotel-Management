<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<style type="text/css">
	html {
  width: 100%;
  height: 100%;
}

body{
	background:url(../images/bakground.jpg) ;
	
	background-color:lightblue;
	
	background-size: cover;
	
	background-repeat:no-repeat;
	
	margin:0;
	
	    display:flex;
		justify-content:center;
		align-items:center;
}
.outer{
	   position:absolute;
        background-color:white;

		height:50%;
		width:50%;
	    border:2px solid white;
		opacity:0.8;
		display:flex;
		justify-content:center;
		align-items:center;

}	
	
h2{

   font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif;
   color:#1d9dc3;
   font-size:30px;
   font-weight:500;
   text-align:center;

}	

a {
    text-decoration: none;
}
a:link, a:visited {
    color:#1ecae3;
	
}		

	</style>
	

     
</head>

<body>
<?php
include('../include/db_con.php');
session_start();
if(isset($_POST['sub']))
{
$username=$_POST['username'];
$roomtype=$_POST['field_1'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$room_nos=$_POST['room_nos'];
$amount=$_POST['roomprice'];

$checkroom= "select count(*) from roomdetail where room_type='".$roomtype."' ";
$check=mysql_query($checkroom) or die (mysql_error($con));
$roomcount=mysql_fetch_array($check);
 $checkcount=$roomcount[0];
if($checkcount>=10)
{
?> <script>alert("Sorry Rooms Are not Available :( please try another Option !!");</script>
<?php }
else{
$s1="UPDATE roomdetail set username='".$username."',checkin_date='".$startdate."',checkout_date='".$enddate."',room_type='".$roomtype."',no_of_room='".$room_nos."',amount='".$amount."' where id='".$id."'";
mysql_query($s1) or die (mysql_error($con));
header("location:success.php");
}
}
?>
<div class="outer">
<div id="contenar">
<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
$getdata= "select * from roomdetail where id='".$id."' ";
$check1=mysql_query($getdata) or die (mysql_error($con));
$room=mysql_fetch_array($check1);
}
?>
	<div id="r">
	<form action="update.php" method="POST">
	<h2 align="center" id="h">Book Room</h2>
	<h3> Welcome <?php session_start(); if(isset($_SESSION['username'])){ echo $_SESSION['username']; } if(isset($_GET['id']))?> !!!</h3>
        <table >
		
          <tr>
            <td width="113">Check in Date</td>
            <td width="215">
			<?php if(isset($_GET['id'])){ ?>
			 <input name="id" type="hidden"  value="<?php if(isset($_GET['id'])){ echo $_GET['id']; }  ?>" /> <?php } ?>
              <input name="startdate1" type="date"  value="<?php if(isset($_POST['startdate1'])){ echo $_POST['startdate1']; } if(isset($_GET['id'])){ echo $room['checkin_date']; }  ?>" /></td>
          </tr>
          <tr>
            <td>Check out Date</td>
            <td>
              <input name="enddate1" type="date" value="<?php if(isset($_POST['enddate1'])){ echo $_POST['enddate1']; }if(isset($_GET['id'])){ echo $room['checkout_date']; }  ?> " onchange='this.form.submit()' /></td>
          </tr>
			
       </table>
		</form>
		<form action="update.php" method="POST">
        <table >
		
          <tr>
            <td width="113"></td>
            <td width="215">
              <input name="startdate" type="hidden" value=" <?php if(isset($_POST['startdate1'])){ echo $_POST['startdate1'];  } if(isset($_GET['id'])){ echo $room['checkin_date']; }?> " /></td>
          </tr>
          <tr>
            <td></td>
            <td><input name="username" type="hidden" value="<?php session_start(); if(isset($_SESSION['username'])){ echo $_SESSION['username']; } if(isset($_GET['id'])){ echo $room['username']; }  ?>"  />
              <input name="enddate" type="hidden" value=" <?php if(isset($_POST['enddate1'])){ echo $_POST['enddate1']; } if(isset($_GET['id'])){ echo $room['checkout_date']; }?> "  /></td>
          </tr>
		  <tr>
            <td>Room Type </td>
            <td>
              <select class="text_select" id="field_1" name="field_1" >  
<option value="00">- Select -</option>   
<?php if(isset($_POST['startdate1'])){
$paymentDate = $_POST['startdate1'];
$contractDateBegin = '2013-12-20';
$contractDateEnd ='2014-03-25';

if (($paymentDate >= $contractDateBegin) && ($paymentDate <= $contractDateEnd))
{
 $s2="select * from roomtype where room_seson ='high season' ";
$s3=mysql_query($s2);
}
else
{
$s2="select * from roomtype where room_seson='low season' ";
$s3=mysql_query($s2);
}


?>
<?php while($catdata=mysql_fetch_array($s3)) { ?>  <option value="<?php echo $catdata['room_price']; ?>"><?php echo $catdata['room_type']; ?></option>
           <?php } ?>
		   <?php } ?>
           </select></td>
          </tr>
		  <tr>
            <td>Price per Room</td>
            <td>
             <span id="a1"  ></span>$
           </td>
          </tr>
		   <tr>
            <td>No. of Guest per Room</td>
            <td>
              <input name="guest" type="text " size="10"/></td>
          </tr>
		  <tr>
            <td>No. of Rooms </td>
            <td>
              <input name="room_nos" id="room_nos" type="text " size="10" onChange="gettotal1()" /></td>
          </tr>
		  <tr>
            <td>Total Amount To Pay</td>
            <td>
             <input type="text" name="roomprice" id="total1"  size="10px" readonly="" />
           </td>
          </tr>
		  
          <tr>
            <td colspan="2" align="center">
			<input type="submit" name="sub" value="Pay & Book" /></td>
            </tr>
			
       </table>
		</form>
		
		<script language="javascript" type="text/javascript">
function notEmpty(){

var e = document.getElementById("field_1");
var strUser = e.options[e.selectedIndex].value;
 var strUser=document.getElementById('a1').innerHTML=strUser;




}
notEmpty()
    
    document.getElementById("field_1").onchange = notEmpty;


   function gettotal1(){
      var gender1=document.getElementById('a1').innerHTML;
      var gender2=document.getElementById('room_nos').value;
      var gender3=parseFloat(gender1)* parseFloat(gender2);
			
      document.getElementById('total1').value=gender3;
	
   }
			</script>
 
		
	</div>
</div>
</div>
</body>
</html>