<!-- 
Home page for logged in user showing the amount of drops...currency used on our website which can be furthur used to get discount in booking appointments or acquiring blood from blood banks in case of emergency. 
 -->
<?php 
session_start();
if ($_SESSION['varname']) {
  # code...
$name = $_SESSION['varname'];
require 'dbconnect.php';
$q1= "SELECT id from user_details WHERE name='$name'";
$res1=(mysql_query($q1));
$row=mysql_fetch_array($res1);
 $_SESSION['varname2']= $row['id'];
 // echo $_SESSION['varname2'];
$user=$name;
}
else{
  header("Location:index.php");
}
?>










<html>
  <head>
    <title>Bloodline Website</title>
    <meta name="viewport">
		
	<link href="home.css" rel="stylesheet">

  </head>
  <body>
    <div class="main-page">
    <div class="header">
      <div class="site-logo float-left">
      <img src="https://s24.postimg.org/3nykwrpp1/blood_icon.png" alt="site-logo">
      </div>
      <div class="site-name float-left">
        <h1>
        <img src="https://s27.postimg.org/ci81wzgmb/shifa.png">
        </h1>
      </div>
      <div class="user">
	  <img src="https://s23.postimg.org/dkn01o6ej/user.png">
	  
<div class="dropdown">
  <button class="dropbtn"><?php echo $user?>  </button>
  <div class="dropdown-content">
    <a href="logout.php?logout">Sign Out</a>
    <a >100 Drops</a>
  </div>
</div>
	  </div>
      </div><br>	
      <div class="title">
        <a href="#">Home</a>
        <a href="#about_section">About Us</a>
        <a href="#services_section">Services</a>
        <a href="#activity">Recent Activities</a>
        <a href="#info">The Inside Story</a>
        <a href="#contactus_section" class="no-border">Contact Us</a>
      </div>
      <div class="emergency">
        <img src="https://s23.postimg.org/mhrf1264b/user_telephone.png">
          <p>Emergency Contact No:  1234567890</p>
        </div>
      
      <br>
        <div class="welcome-info">
        <div class="image">
       <img class="myslides" src="https://s24.postimg.org/etsvxxxd1/image.jpg">
          <img class="myslides" src="https://s30.postimg.org/4rznia4yp/image.jpg">
          
          <img class="myslides" src="https://s28.postimg.org/eyhi4gvh9/image.jpg">
          <img class="myslides" src="https://s24.postimg.org/kqvdsq7f9/image.jpg">
          <img class="myslides" src="https://s27.postimg.org/hfiv1wk1f/image.jpg">
          <img class="myslides" src="https://s27.postimg.org/cohu79v37/image.jpg">
        </div>
        
        <div class="facts">
          <h1>Facts</h1>
          <div class="facts-ul">
          <marquee height="350px" behavior="scroll" direction="up" scrollamount="3">
          <ul>
            <li>
            Every year our nation requires about 5 Crore units of blood, out of which only a meager 2.5 Crore units of blood are available.
            </li>
            <li>
            Every two seconds someone needs blood.
            </li>
            <li>The average red blood cell transfusion is approximately 3 pints.</li>
            <li>
            A single car accident victim can require as many as 100 units of blood.</li>
            <li>
            Blood makes up about 7 percent of your body's weight.</li>
            <li>
            If 50 people donate, they could provide enough blood to take care of victims of a major car accident.</li>
            <li>
            Type O negative blood (red cells) can be transfused to patients of all blood types. It is always in great demand and often in short supply.</li>
            <li>
            Type AB positive plasma can be transfused to patients of all other blood types. AB plasma is usually in short supply.</li>
            
            
          </ul>
          </marquee>
          </div>
          </div>
        </div>
      <div class="find-and-donate" id="find-and-donate">
        <div class="find float-left">
        <a href="http://localhost/blood/require_blood.php"><img src="https://s29.postimg.org/npd7m7bbb/find_donor.jpg"></a>
          </div>
        <div class="donate float-right">
          <a href="http://localhost/blood/donate_blood.php"><img src="https://s30.postimg.org/z5u3mk4b5/become_donor.jpg"></a>
          
        </div>
        <div class="book">
          <a href="http://localhost/blood/book_appointment.php"><img src="https://s30.postimg.org/yzrac4535/appointment.png"></a>
        </div>
      </div>
      
      <div class="activities">
        <div class="recent-activities float-left" id="activity">  
          <img src="https://s24.postimg.org/7k0m4m451/Screen_Shot_2017_01_21_at_4_44_24_AM.png">
        </div>
            </div>
        <div class="info" id="info">
          <h1>The Inside Story</h1>
          <div class="information">
          <a href="#">The need of donating Blood?</a><br>
          <a href="#">Who needs Blood?</a>
          <br>
          <a href="#">Eligibility Criteria to be a donor</a><br>
          <a href="#">A few facts about human blood</a><br>
          <a href="#">About your blood group</a><br>
          <a href="#">Blood diseases and disorders</a><br>
          <a href="#">Preventing blood diseases</a><br>
          <a href="#">Know your nearby blood banks</a><br>
          <a href="#">Know your nearby hospitals</a>
          </div>
          <img src="https://s29.postimg.org/k1wv4d4jb/drop.png">
        </div>
  
      
          <div class="footer-section">
          <div class="down-title">
            <div id="about_section" >
              <h1>Rules Are For Fools<br>
We're Driven By Values</h1>
              <p>We believe values are more important than rules. At Shifa our values are not just principles for our products or our company but they in many ways define who we are as people.</p>
              <p>We will always strive for greatness. To be the best in the world at whatever it is we do. We do this not for want of rewards and recognitions but it is because we expect it of ourselves.</p>
              <p>The promise and the premise on which our values stand, drives us towards doing great.</p>
            </div>
            
            
          </div>
          <div class="footer">
            <div class="copyright float-left">
              <p>&copy;Copyright BloodLine Team.</p></div>
            <div class="about-us float-right">
              <a href="#">About Us</a>
              <a href="#">Contact Us</a>
              <a href="#">Services</a>
              <a href="#">Blog</a>
            </div>
          </div>
    </div>
	
	
	<script>var myIndex=0;
carousal();
function carousal(){
  var i;
  var x=document.getElementsByClassName("myslides");
  for(i=0;i<x.length;i++)
    {
      x[i].style.display="none";
    }
  myIndex++;
  if(myIndex>x.length)
    {
      myIndex=1;
    }
  x[myIndex-1].style.display = "block";  
    setTimeout(carousal, 2000);
	
	
	
}
</script>
  </body>
</html>