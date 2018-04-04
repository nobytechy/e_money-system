<?php 
include"design.php";
include"social.php";
include"inc/posts_handler.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>About Us</title>
</head>
<body style="background-color:#2B3A39;">
<div class="container" style="box-shadow: 0px 3px 3px 0px #EEB00D">
<div class="row" style="background-color:#EEB00D;">
<div class="col-sm-12"><?php include"main_nav.php";?>
<img class="img-responsive img-circle" src="images/one.png" width="135" height="135">
</div>
</div>

<div class="row" style="background-color:#FFFFFF">
<div class="col-sm-6">
<h4><strong>About Us</strong></h4>
<img class="img-responsive" src="images/about.png" width="100%" height="135px" alt="about us" title="more about us">
 <div class="jumbotron" style="background-color: transparent;padding:2px;margin:3px">
 <p class="text-justify" style="font-size:15px;">e-Mukando was launched to support savings groups across Zimbabwe.Informal group savings locally known as <strong>‘mukando’ or ‘maround’</strong> are common across in many parts of the world and throughout Zimbabwe.They typically consist of a group of members who each contribute regularly into a cash pool that members borrow from on a rotating basis. While the practice is widespread,savings clubs or mukando face security risks in handling cash and difficulties in tracking contributions and withdrawals from members,which is the reason why this system was developed</p>
</div>
<h4 class="text-primary"><strong>Our Goal:</strong></h4>
<p style="color:#000">Facilitating credit rotations</p>
<h4 class="text-primary"><strong>Our Vision:</strong></h4>
<p style="color:#000">Promoting the Culture of Saving</p>
<center><img class="img-responsive img-circle" src="images/trade.gif" width="155" height="155"></center>


</div>
<div class="col-sm-6">
<h4 style="padding-left:15px"><b>We love to hear from you all again</b>
</h4>

<center><address><strong>
<p><a href="mailto:nobytechy@gmail.com">
email now</a></p>
<p>953 CABS Houses,Senga</p>
<p>Gweru,Zimbabwe.</p>
<p>Call/Whatsapp :+263 716 605 802</p></strong>
</address></center>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	 <div class="form-group">
        <span style="color:#EEB00D;font-weight:bolder;" class="glyphicon glyphicon-user"></span>
            <input type="text" name="name" class="form-control" id="inputname" placeholder="Enter First Name" style="border-radius:0px;border:none;border:1px solid #5691C6"  pattern="^[A-Za-z]+">
        </div>
		<div class="form-group">
        <span style="color:#EEB00D" class="glyphicon glyphicon-user"></span>
            <input type="text" name="surname" class="form-control" id="inputsurname" placeholder="Enter Last Name" style="border-radius:0px;border:none;border:1px solid #5691C6"  pattern="^[A-Za-z]+">
        </div>
		<div class="form-group">
        <span style="color:#EEB00D" class="glyphicon glyphicon-phone"></span>
            <input type="text"  class="form-control" style="border-radius:0px;border:none;border:1px solid #5691C6"  placeholder="Enter Cell Number" pattern="[0]{1}[7]{1}[1-9]{1}[1-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}" name="phone">
       
	   </div>
		<div class="form-group">
        <span style="color:#000000;padding-bottom:3px" class="glyphicon glyphicon-envelope"><em>This is optional</em></span>
            <input type="email" class="form-control" name="email" style="border-radius:0px;border:none;border:1px solid #5691C6"  placeholder="Enter Email " name="email">
        </div>
		<div  class="form-group">
 <span style="color:#EEB00D" class="glyphicon glyphicon-comment"></span><label for="inputinfo">Enter Feedback Below</label> 
           <textarea name="message" class="form-control" style="border-radius:0px;border:none;border:1px solid #5691C6"  id="inputinfo">
		   </textarea>
        </div>
		
      
        <button type="submit" name="contact_us"  class="btn btn-info"><span style="color:#000"><strong>Send Now</strong></span></button>

    </form>




</div>
</div>

<div class="row" style="background-color:#2B3A39;">
<div class="col-sm-12"><?php include"footer.php";?></div>
</div>

</div>
</body>
</html>