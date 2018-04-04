<?php 
include"design.php";
include"social.php";
include"inc/posts_handler.php";
?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>e-Mukando</title>
 </head>
<body style="background-color:#2B3A39;">
<div class="container" style="background-color:#EEB00D;">
<div class="row ">
<div class="col-sm-12"><?php include"main_nav.php";?></div>
</div>

<div class="row " style="padding:5px">
<h3 style="color:#000;padding-left:15px">Requirements to join our Mukando Community</h3>
<ol>
	<li>National I.D</li>
	<li>Ecocash registered line</li>
</ol>
<p style="color:#000;padding-left:15px"><strong><span class="glyphicon glyphicon-phone"></span>Call/Whatsapp this numbers for registration Assistance: <span style="color:#2B3A39;text-decoration:underline;"> +263 716 605 802 / +263 783 588 059 / +263 782 471 286</span></strong></p>
<h4 style="color:#000;padding-left:15px">Get Registered Today</h4>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data"/ method="post">  
<div class="col-sm-4">
 <p style="color:#0A7C8B;padding-left:15px"><sup style="color:#F00">*</sup><strong>
 Please enter your details</strong><sup style="color:#F00">*</sup></p>  
<label for="name">Name</label><br>
<input type="text" class="form-control" name="name" id="name" pattern="^[A-Za-z]+"><br>
<label for="surname">Surname</label><br>
<input type="text" class="form-control" name="surname" id="surname" pattern="^[A-Za-z]+"><br>
<label for="id">I.D Number</label><br>
<input type="text" class="form-control" name="identity" placeholder="70-253637R70"><br>
<label for="plan">Select Your Plan</label> <span> <em>e.g Weekly or Monthly</em></span><br>
<select name="period" class="form-control" id="plan" style="width:100%"><option></option><option>Per Week</option><option>Per Month</option></select><br>
  <label for="amount">Select Money Round Plan</label> <span> <em>e.g$5,$20,$50,$100</em></span><br>
<select name="amount" class="form-control" id="amount" style="width:100%"><option></option><option>$5</option><option>$10</option><option>$20</option><option>$50</option><option>$100</option></select><br>  
<label for="image">Select ID picture</label><br>
<input type="file" name="image" id="image"><br> 
</div>
<div class="col-sm-4">
   <p style="color:#0A7C8B;"><strong>
 Continue registration...</strong></p>
<label for="gender">Select Your Gender</label><br>
<select name="gender" class="form-control" id="gender" style="width:100%"><option></option><option>Male</option><option>Female</option></select><br>
  <label for="phone">Phone Number</label><br>
        <input type="tel" class="form-control" name="phone" title="Please use Zim line" id="phone"
         pattern="[0]{1}[7]{1}[1-9]{1}[1-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}"><br>
<label for="location">Where Do You Stay</label><br>
 <input type="text" class="form-control" name="location" id="location"><br>
  <label for="pin">Create Pin</label><br>
        <input type="password" class="form-control" name="pin0" id="pin" min="4" title="Enter 4 digit pin" maxlength="4" pattern="[0-9]{4}"><br>
    <label for="pin2">Confirm Pin</label><br>
        <input type="password" class="form-control" name="pin" id="pin2" min="4" title="Enter 4 digit pin" maxlength="4" pattern="[0-9]{4}"><br>  
        <button class="btn btn-primary" type="submit" name="apply" style="margin-top:5px;"><span style="color:#FFF">Register Now</span></button>  
</div>
</form>
<div class="col-sm-4">
<h4 class="text-center">Join Others Today</h4>
<center><img class="img-responsive" src="images/proudly.png" alt="zim" title="our country" width="155" height="135"></center>
<p>&nbsp</p>
<center><img class="img-responsive" src="images/logo.png" alt="logo" title="logo"></center>

</div>
</div>	

<div class="row" style="background-color:#2B3A39;">
<div class="col-sm-12"><?php include"footer.php";?></div>
</div>
</div>
</body>
</html>