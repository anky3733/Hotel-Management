<!DOCTYPE html>
<html>
<head>
<script>
     
        function signup()
      {

          var alt="";
          var x=document.forms["signupform"]["firstname"].value;
          if (x==null || x=="")
            {
              alt +="First name must be filled out\n";
              
            
            }
         var y=document.forms["signupform"]["lastname"].value;
         if (y==null || y=="")
            {
              
              alt += "Last name must be filled out\n";
              
            }
			var x=document.forms["signupform"]["daytimephone"].value;
          if (x==null || x=="")
            {
              alt +="First name must be filled out\n";
              
            
            }
          var z=document.forms["signupform"]["email"].value;
          var atpos=z.indexOf("@");
          var dotpos=z.lastIndexOf(".");
              
           if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length)
              {
             alt += "Not a valid e-mail address\n";
             
              }
         
          var v=document.forms["signupform"]["password1"].value; 
         
          if (v==null || v=="")
            {
              alt += "password must be filled out\n";
                 
            }
         var t=document.forms["signupform"]["password2"].value; 
         if (t==null || t=="")
            {
              alt += "confirm password must be filled out\n";
                
            }
			 if (v != t)
            {
              alt += "password  doesn't  match\n";
                 
            }
          if((document.forms["signupform"]["usertype1"].checked==false)&& (document.forms["signupform"]["usertype2"].checked==false))
      
            {
               alt += "payment type  must be filled out\n";
                     
            }
   
        if (alt != "")
             {
               alert(alt);
              return false;
             }
			 else {
			 	form.Submit()
			 }
}

     </script>

<style>

html {
  width: 100%;
  height: 100%;
}


body{
       background: url(images/bakground.jpg);
	   
	   background-color:black;
	   background-size: cover;
	   
	   background-repeat: no-repeat;
	  
	   margin: 0;
	   
	   
    }

@font-face {
            font-family: montez;
            src: url(montez.woff);
}

a {
    text-decoration: none;
}
a:link, a:visited {
    color:#1ecae3;
	
}




h1{
    position:relative;
    color:#1d9dc3;
	text-align:center;
	font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif;
	opacity:1;
    
	
}


a{
    
    font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif;

}

h2{
   background-color:#1d9dc3;
   font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif;
   color:white;
   font-size:30px;
   font-weight:500;
   padding-left:25px;
   
}

.outer{
        position:absolute;
		background-color:white;
		top:10%;
		left:10%;
		height:100%;
		width:75%;
	    border:2px solid white;
		opacity:0.9;
		display:flex;
		justify-content:center;
		align-items:center;


}

.login{
         height:85%;
         width:45%;
         margin:1%;
         background-color:transparent;
         display:inline-block;
		 opacity:0.9;
}

.signup{
         height:85%;
         width:45%;
         margin:1%;
         background-color:transparent;
         display:inline-block;
		 opacity:0.9;
		 
}

form{
     position:relative;
     font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif;

     color:#1d9dc3;
	 z-index:2;
	 opacity:1;
}

td {
    
    padding-bottom: 1em;
	padding-left:1em;
}

hr{
   width:0px;
   height:70%;
   border-color:#1d9dc3;
}
</style>
</head>
<body >

<h2>Login & Sign up <a href="homepage.php" style="float:right; color:white;">Back</a></td></h2>

<div class="outer">
<?php 
include('include/db_con.php');
if(isset($_POST['Submit']))
{
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$phone=$_POST['daytimephone'];
$email=$_POST['email'];
$pass=$_POST['password1'];
$city=$_POST['city'];
$country=$_POST['country'];
$intr=$_POST['usertype'];

$s1="INSERT INTO users (first_name,last_name,day_phone,user_name,user_password,city,country,payment_type)VALUES('".$fn."','".$ln."','".$phone."','".$email."','".$pass."','".$city."','".$country."','".$intr."')";
mysql_query($s1) or die (mysql_error($con));
}
?>

 
	    <div class="login">
	     <?php 
	include('include/db_con.php');
	session_start();
		if (isset($_POST['username'],$_POST['password']))
			   {
                $username=$_POST['username'];
                $password=$_POST['password'];
  
                   if (empty($username) || empty($password))
                   {
                      $error = 'Hey All fields are required!!';
                    }
                     
					 else {  
					 $login="select * from users where user_name='".$username."' and user_password ='".$password."'";
					 $result=mysql_query($login);
					 print_r($result);
				
					 
					if(mysql_fetch_array($result)){
				 $_SESSION['logged_in']='true';
				 $_SESSION['username']=$username;
					 header('Location:registration.php');
					 exit();
					 } else {
					 $error='Incorrect details !!';
					 }
					       }
		}
  
  ?>
	       <h1 >Login</h1>
	 
	        <form action="book.php" method="POST">
	
        <table style="padding-top:4em;" >
		<tr> <?php  if (isset($error)) {?>
           <?php echo $error; ?>
            <br />
           <?php } ?> </tr>
          <tr>
            <td width="113">Email:</td>
            <td width="215">
              <input name="username" type="text"  size="35" /></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td>
              <input name="password" type="password"  size="35" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
			<input type="submit" name="sub" value="Login" />  
            </tr>
			
			
			
       </table>
		</form>
		
	   </div>

      <hr >
	   <div class="signup">
	       <h1 >Sign up </h1>
	    <form method="POST" name="signupform" action="book.php" onSubmit="return signup();" >    
  <table> 

		 <tr>
		<td >FirstName:</td>
		<td><input name="firstname" type="text" id="firstname" size="35" />
		
		</td>
	</tr>
	<tr>
		<td >LastName:</td>
		<td><input name="lastname" type="text" id="lastname" size="35"  />
		
		</td>
	</tr>
	<tr>
		<td >Phone:</td>
		<td><input name="daytimephone" type="text" id="daytimephone" size="35"  />
		
		</td>
	</tr>
	<tr>
		<td >E-mail:</td>
		<td><input name="email" type="text" id="email" size="35"  />
		
		</td>
	</tr>
	
	<tr>
		<td >Password:</td>
		<td><input name="password1" type="password" id="password1" size="35" />
		
		</td>
	</tr>
	<tr>
		<td >Confirm Password:</td>
		<td><input name="password2" type="password" id="password2" size="35" />
		
		</td>
	</tr>
    <br>
	<tr>
		<td >City/State:</td>
		<td><input name="city" type="text" id="city" size="35"  />
		</td>
	</tr>
    <br>
	<tr>
		<td >Country:</td>
		<td><input name="country" type="text" id="country" size="35" />
		
		</td>
	</tr>
    <br>
	<tr>
		<td>Payment Type:</td>
		<td><input type="radio" name="usertype" id="usertype1" value="cash" />Cash
		<input type="radio" name="usertype" id="usertype2" value="paypal" />Paypal/CreditCard
		</td>
	</tr>
	<tr>
	<td align="center" colspan="2"><input type="submit" name="Submit" value="Submit" />
		<input type="reset" name="reset" value="Reset"  /></td></tr>
   
   </table>
	    </form>     
	         
	   </div>

</div>

</body>
</html>

