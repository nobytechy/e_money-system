<!DOCTYPE html>
 <html>
 <head>
 <title>e-Mukando</title>
 <script>
var myVar;

function my() {
    myVar = setTimeout(showPage,2000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
   border: 3px solid #EEB00D;
  margin: -75px 0 0 -75px;
 
  border-radius: 50%;
 
  background-image:url('images/logo.png');
  width:250px;
  height: 250px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
}
</style>
 <?php 
include"design.php";
include"social.php";
?>
 </head>
<body onload="my()" style="background-color:#2B3A39;">
<center><div id="loader"></div></center>

<div class="container animate-bottom" id="myDiv" style="background-color:#EEB00D;box-shadow: 0px 3px 3px 0px #EEB00D">
<div class="row ">
<div class="col-sm-12"><?php include"main_nav.php";?></div>
</div>
<div class="row" style="height:420px;background-image:linear-gradient(#EEB00D 5%, #2B3A39);">
<div class="col-sm-12" style="margin-top:80px">
	<div class="jumbotron" style="margin:5px;background-color:transparent;">
<h2 class="text-center color-1">Welcome to e-Mukando</h2>
<center><div style="width:30%;"><marquee scrolldelay="300"><span id="name">Join Today & Enjoy</span></marquee></div></center>
<h3 class="text-center color-2"><span style="color:#0A7C8B">-</span>Maround<span style="color:#0A7C8B">-</span>Group Savings<span style="color:#0A7C8B">-</span></h3>
	<center><a href="registration.php"><button class="btn btn-1">
Click Here to Register Now</button></a></center>
</div>
</div>
</div>

<!-- second row start here-->
<div class="row" style="background-color:#FFFFFF;">
<div class="col-sm-8">
<h3 style="color: #000;padding:3px">What is e-Mukando</h3>
<span id="name"><strong>Connect with others on e-Mukando using your smartphone or laptop</strong></span>
<img class="img-responsive img-circle" src="images/trade.gif" width="105" height="105">
<p class="text-justify">Informal group savings locally known as <strong>‘mukando’ or ‘maround’</strong> are common across in many parts of the world and throughout Zimbabwe.They typically consist of a group of members who each contribute regularly into a cash pool that members borrow from on a rotating basis. While the practice is widespread,savings clubs or mukando face security risks in handling cash and difficulties in tracking contributions and withdrawals from members,which is the reason why this system was developed.All members can check the group’s account activity at any time and be able to trace transactions mae on their phones or laptops</p>	
<p class="text-justify">Anyone with an econet line can join and participate on <strong>e-Mukando</strong>.This service is targeted at the formal sector,self employed,informal sector entrepreneurs,street vendors and anyone who believe in "kukandirana".</p>
<h3 style="color:#000;"><strong>How It Works</strong></h3>
<div class="col-sm-12">
	<h3 class="text-center"><strong>
Service Process
</strong></h3>
<div class="col-sm-3 change">
<h5 class="text-center text-primary" style="background-color:#FFFFFF;padding:3px"><strong>REGISTRATION</strong></h5>
<center><strong>STAGE-1</strong><img class="img-responsive img-circle" style="border:2px solid #337AB7" src="images/arrow.png" width="55" height="55"></center>
<p class="text-center"><strong>Upon registration provide us with real information for your registration to be fast and successfull.</strong></p>	
</div>

<div class="col-sm-3 change">	
<h5 class="text-center text-primary" style="background-color:#FFFFFF;padding:3px"><strong>CONFIRMATION</strong></h5>
<center><strong>STAGE-2</strong><img class="img-responsive img-circle" style="border:2px solid #337AB7" src="images/arrow.png" width="55" height="55"></center>
<p class="text-center"><strong>The Adminstration and Security Team will confirm your details to ensure safety to our registered members</strong></p>
</div>

<div class="col-sm-3 change">
<h5 class="text-center text-primary" style="background-color:#FFFFFF;padding:3px"><strong>FEEDBACK</strong></h5>
<center><strong>STAGE-3</strong><img class="img-responsive img-circle" style="border:2px solid #337AB7" src="images/arrow.png" width="55" height="55"></center>
<p class="text-center"><strong>You will receive a call or text when your details are correct and successfully confirmed by the team</strong></p>
</div>
<div class="col-sm-3 change">
<h5 class="text-center" style="background-color:#FFFFFF;padding:3px;color:#2CC76A"><strong>START</strong></h5>
<center><strong>FINAL STAGE</strong><img class="img-responsive img-circle" src="images/tick.png" width="55" height="55"></center>
<p class="text-center"><strong>You can now login using your pin and start Mukando with others using a default system money.</strong></p>
</div>
</div>
</div>

<div class="col-sm-4">
<h3 style="color: #000;background-color:#EEB00D;padding:3px">Members Login Panel<span style="color: #0A7C8B" class="glyphicon glyphicon-user"></span></h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
 <p  style="color:#0A7C8B"><sup style="color:#F00">*</sup><strong>
 Please enter your details below</strong><sup style="color:#F00">*</sup></p>
  <label for="phone">Phone Number</label><br>
        <input type="tel" name="phone" id="phone" style="border:1px solid #EEB00D"  required><br>
	 <label for="pin">Pin</label><br>
        <input type="password" name="pin" id="pin" style="border:1px solid #EEB00D"  required><br>
      
        <button type="submit" name="feedback" style="margin-top:5px"><span style="color:#0A7C8B"><strong>Login</strong></span></button>
 <p>Not Yet A Member <a href="registration.php">Click Here to Register Now</a></p>
    </form>	
    <hr>
    <h3 style="color: #000;background-color:#EEB00D;padding:3px">Staff Login Panel<span style="color: #0A7C8B" class="glyphicon glyphicon-lock"></span></h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
 <p  style="color:#0A7C8B"><sup style="color:#F00">*</sup><strong>
 Please enter your details below</strong><sup style="color:#F00">*</sup></p>
  <label for="phone">Phone Number</label><br>
        <input type="tel" name="phone" id="phone" style="border:1px solid #EEB00D"  required><br>
	 <label for="pin">Pin</label><br>
        <input type="password" name="pin" id="pin" style="border:1px solid #EEB00D"  required><br>
      
        <button type="submit" name="feedback" style="margin-top:5px"><span style="color:#0A7C8B"><strong>Login</strong></span></button>
 <p>&nbsp</p>
    </form>
    <center><img class="img-responsive" src="images/call.gif" alt="contact" title="contact_us" width="155" height="135">

<strong><span style="color:#2CC76A">Call/Whatsapp Our Agents For System Support</span><br><span>+263 716 605 802</span>|<span>+263 783 588 059</span>|<span>+263 782 471 286</span></strong></center>		
</div>

</div>
<!-- second row end here-->


<div class="row" style="background-color:#2B3A39;">
<div class="col-sm-12"><?php include"footer.php";?></div>
</div>

</div>








 </body>
 </html>