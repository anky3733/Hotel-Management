

<html>
<head>


<style>
html {
  width: 100%;
  height: 100%;
}


body{
	background:url(images/homewall5.jpg) ;
	
	background-color:#b9e2f5;
	
	background-size: cover;
	
	background-repeat:no-repeat;
	
	
	
	margin:0;
		
}

body,html{

Min-width:1346px;
Min-height:768px;
}

h2{
   background-color:#1d9dc3;
   font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif;
   color:white;
   font-size:30px;
   font-weight:500;
   padding-left:25px;
   
}

ul {
	
	
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #1d9dc3;
    font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif;
	
}

li {
    float: left;
	display:inline;
}


li a, .dropbtn {
    
    display: inline-block;
	
    color: white;
    text-align: center;
    padding: 17px;
	
    text-decoration: none;
	
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: gray;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 21%;
    box-shadow: 0px 16px 16px 0px rgba(0,0,0,0.2);
	z-index:2;
}

.dropdown-content a {
    color: #1ecae3;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}



@font-face{
            font-family: montez;
            src: url(montez.woff);

}

@font-face{
            font-family: kg;
            src: url(kg.woff);

}

.blocks1{
          overflow:hidden;
          position:relative;
          height:85%;
		  width:47%;
		  border:1px solid white; 
		  margin:5px;
		  display:inline-block;
          vertical-align:top;
		  z-index:1;
}

.blocks1 p{
    position: absolute;
    left: 160;
    top: 50;
    padding: 10px;
    font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif;
	font-size:1.8em;
    
    color: #FFF;
    margin: 2px;
    
}

.blocks2{
          height:86.7%;
		  width:51.5%;	
          margin:0px;
		  display:inline-block;
          vertical-align:top;
          z-index:1;
}

.blocks3{
          height:48%;
		  width:100%; 
          display:inline-block;
          vertical-align:top;
		  z-index:1;
}



.blocks4{ position:relative;
          height:100%;
		  width:49.4%; 
		  border:1px solid white;
          margin-right:0px;
		  margin-top:6px;
		  display:inline-block;
          vertical-align:top;
		  z-index:1;
		  overflow:hidden;
		 
}

.blocks4 p{
    position: absolute;
    left: 30px;
    top: 190px;
    padding: 10px;
    font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif;
	font-size:30px;
    color: #FFF;
    margin: 5px;
    
}


.blocks5{ position:relative;
          height:100%;
		  width:100%; 
		  border:1px solid white;
		  margin-top:15px;
		  z-index:1;
           display:inline-block;
          vertical-align:top;
		  overflow:hidden;
		  
}

.blocks5 p{
    position: absolute;
    left: 150px;
    top: 10px;
    padding: 10px;
    font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif;
	font-size:30px;
    color: #FFF;
    margin: 5px;
    
}


.blocks1:hover img {

transform: scale(.96);

}

.blocks4:hover img {

transform: scale(.96);

}

.blocks5:hover img {

transform: scale(.96);

}

.blocks1 img {

transition: transform .25s ease;

}

.blocks4 img {

transition: transform .25s ease;

}

.blocks5 img {

transition: transform .25s ease;

}



.footer{

        background-color:#1d9dc3;
		position:relative;
	    bottom:0;
        margin:0;
		
}
.footerli{
         display: inline-block;
         color: white;
         text-align: center;
         text-decoration: none;
		 font-size:12px
	
}

.footerli a{
            display: inline-block;
            color: white;
            text-align: center;
            padding: 5px 16px;
            text-decoration: none;

}

.book:hover{
      
	  background-color:white;
	  color:#333;

}
</style>


</head>

<body >

<ul>
  
  <li><img src="images/logo.png" style="width:40px; height:40px; "></li>
  
  <li><a class="" href="homepage.php" ><span style="color:#1ecae3">Harley's</span> <span style="color:#b9e2f5">Hotel</span></a> </li>
  
 
  
  <li class="dropdown"><a  class="dropbtn" href="homepage.php">Home</a>
     
  </li>
  
  <li class="dropdown"><a class="dropbtn" href="#">Rooms & Suites</a>
    <div class="dropdown-content">
      <a href="guestroom.php">Guest Rooms</a>
      <a href="clubsuites.php">Club Suites</a>
      <a href="familysuite.php">Family Suite</a>
	  
    </div>
  
  </li>
  
  <li class="dropdown"><a class="dropbtn" href="#">Restaurents </a>
     <div class="dropdown-content">
      <a href="theburgerking.php">The Burger King</a>
      <a href="centralperk.php">Central Perk Cafe</a>
      
	  <a href="cocktailkingdom.php">Cocktail Kingdom Bar</a>
    </div>
  
  </li>
  
  <li class="dropdown"><a class="dropbtn" href="#">Funspots</a>
     <div class="dropdown-content">
	   <a href="diving.php">Scuba Diving</a>
      <a href="waterpark.php">Adventure Reef Waterpark</a>
      <a href="aquarium.php">Underwater Aquarium</a>
      <a href="nightparty.php">Mid-night Dance Party</a>
	  
    </div>
  
  </li>
  
   <li class="dropdown"><a class="dropbtn" href="#">Spa & Fitness </a>
     <div class="dropdown-content">
      <a href="fountainspa.php">The Four Fountains Spa</a>
      <a href="palmspa.php">The Palms Spa</a>
      <a href="goldgym.php">Gold Gym and Fitness Centre</a>
    </div>
  
   </li>
  
  
   <li class="dropdown"><a class="dropbtn" href="#">Events</a>
    <div class="dropdown-content">
      <a href="meetings.php">Meetings & Auctions</a>
      <a href="wedding.php">Wedding Packages</a>
      
    </div>
   
   </li>
   
   
   
   <li class="dropdown"><a class="dropbtn" href="aboutus.php">About us</a>
    
    </div>
   
   </li>
   
  <li class="dropdown"><a class="dropbtn" href="location.php">Location</a>
     
   </li>
   
  <li class="dropdown"><a class="dropbtn" href="#">Contact</a>
     
  </li>
  
  <li class="" style=" background-color:#1ecae3; float:right;"><a href="book.php"><span  style="color:white">Book Now</span></a></li>

</ul>

<div class="blocks1">
<a href="guestroom.php"><img src="images/home0.jpg" style="width:100%; height:100% "></a>
<p>Feel the Homliness</p>
</div>


<div class="blocks2">
    <div class="blocks3">
       <div class="blocks4">
          <a href="centralperk.php"><img src="images/home1.jpg" style="width:100%; height:100%; "></a>
        <p style="top: 220px; left:140px;">Breakfast at Harley's</p>
       </div>
	   <div class="blocks4">
          <img src="images/home2.jpg" style="width:100%; height:100%; ">
        <p  style="top: 10px;">Romantic Dinner</p>
       </div>
    </div>
	
	 <div class="blocks3">
        <div class="blocks5">
            <a href="nightparty.php"><img src="images/home3.jpg" style="width:100%; height:100%; "></a>
             <p>Dance until Dawn</p>
	
        </div>
	
    </div>
	
</div>

<div class="blocks2">
    <div class="blocks3">
       <div class="blocks4">
          <a href="fountainspa.php"><img src="images/home5.jpg" style="width:100%; height:100%; "></a>
        <p style="top: 10px; left: 150px;">Luxury Spa</p>
       </div>
	   <div class="blocks4">
           <a href="goldgym.php"><img src="images/home6.jpg" style="width:100%; height:100%; "></a>
        <p  style="top: 10px; left:180px;">Gym</p>
       </div>
    </div>
	
	<div class="blocks3">
        <div class="blocks5">
             <img src="images/home4.jpg" style="width:100%; height:100%; ">
             <p>Swimming Pool</p>
	
        </div>
	
    </div>
	
</div>

<div class="blocks1">
    <a href="waterpark.php"><img src="images/home7.jpg" style="width:100%; height:100% "></a>
   <p style="top:30px; left:250px;" >Adventure Reef<br> Waterpark</p>
</div>

<div class="blocks2" style="width:48%;">

	<div class="blocks3">
        <div class="blocks5" style="margin-top:5px;" >
             <a href="wedding.php"><img src="images/home11.jpg" style="width:100%; height:100%; "></a>
             <p>Beach Weddings</p>
	
        </div>
	
    </div>
	
	<div class="blocks3">
        <div class="blocks5" style="margin-top:15px; background-color:#333;" >
             
             <p>Best Rates Guaranteed</p>
			 <p style="font-size:15px; top:80px; left:20px; text-align:center;">Book with us directly and get the best available rate for any room or suite Guaranteed.</p>
	         <a href="book.php"><p class="book" style="top:150px; left:230px; text-align:center; border:2px solid white;">Book Now</p></a>
        </div>
	
    </div>
	
	
</div>


<div class="blocks2">
  
    <div class="blocks3">
       <div class="blocks4">
          <a href="aquarium.php"><img src="images/home10.jpg" style="width:100%; height:100%; "></a>
        <p style="top: 40px; left: 100px;">Aquarium</p>
       </div>
	   <div class="blocks4">
           <a href="meetings.php"><img src="images/home9.jpg" style="width:100%; height:100%; "></a>
        <p  style="top: 10px; left:100px;">Auditorium</p>
       </div>
    </div>
	
   
	   <div class="blocks3">
        <div class="blocks5" >
              <a href="meetings.php"><img src="images/home8.jpg" style="width:100%; height:100%; "></a>
             <p>Meeting & Conference Hall</p>
	
        </div>
	
    </div>
	
</div>


<div class="footer">
<ul>
 <li class="footerli"><a href="#">Terms & Condition</a></li>
 <li class="footerli"><a href="#">Copyrights</a></li>
 <li class="footerli"><a href="#">Privacy Policy</a></li>
 <li class="footerli" style="float:right;"><a href="#"><img src="images/facebook.jpg" style="width:20px; height:20px; "></a></li>
 <li class="footerli" style="float:right;"><a href="#"><img src="images/youtube.jpg" style="width:20px; height:20px; "></a></li>
 <li class="footerli" style="float:right;"><a href="#"><img src="images/instagram.jpg" style="width:20px; height:20px; "></a></li>
</ul>
</div>

</body>

</html>
<!---->
