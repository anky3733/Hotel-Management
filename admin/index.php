
<html >
<head>

<title>Untitled Document</title>
<style>
html {
  width: 100%;
  height: 100%;
}

body{
	background:url(bakground.jpg) ;
	
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
</style>
</head>

<body>
<div class="outer">
<?php 
	include('../include/db_con.php');
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
					 header('Location:adminpanal.php');
					 exit();
					 } else {
					 $error='Incorrect details !!';
					 }
					       }
		}
  
  ?>
  
  
<form action="index.php" method="POST">
	<h2 align="center" >Admin Login</h2>
        <table align="center" style="color:#1d9dc3;">
		<tr> <?php  if (isset($error)) {?>
           <?php echo $error; ?>
            <br /> <br />
           <?php } ?> </tr>
          <tr>
            <td width="113">Email:</td>
            <td width="215">
              <input name="username" type="text"  size="40" /></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td>
              <input name="password" type="password"  size="40" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
			<input type="submit" name="sub" value="Login" /></td>
            </tr>
			
       </table>
		</form>

</div>

</body>
</html>
