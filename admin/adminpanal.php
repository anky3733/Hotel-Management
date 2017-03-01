
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
html {
  width: 100%;
  height: 100%;
}

body{
	background:url(bakground.jpg);
	
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

		height:90%;
		width:50%;
	    border:2px solid white;
		opacity:0.8;
		display:flex;
		justify-content:center;
		

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
<div class="outer">

<h2>Welcome Admin<br>
<a href="../registration.php">Create a new Booking click here</a>
<br>
<br>
 <?php
	  include('../include/db_con.php');
	  $sql="select * from roomdetail ";
	  $row=mysql_query($sql) or die (mysql_error($con));
	 
	  ?>
	  
	  <table border="1">
	  <?php
	  
	  while($data=mysql_fetch_array($row))
	  {
	  ?>
	  <tr>
	  <td><?php echo $data[id]; ?></td>
	  <td><?php echo $data[username]; ?></td>
	  <td><?php echo $data[checkin_date]; ?></td>
	  <td><?php echo $data[checkout_date]; ?></td>
	  <td><?php echo $data[field_1]; ?></td>
	  <td><?php echo $data[no_of_room]; ?></td>
	  <td><?php echo $data[amount]; ?></td>
	  <td><a href="update.php?id=<?php echo $data[id]; ?>">update</a></td>
	  <td><a href="delete.php?id=<?php echo $data[id]; ?>">delete</a></td>
	  </tr>
	  <?php
	  }
	  
	  
	  ?>
	  </table>
</h2>
</div>

</body>
</html>
