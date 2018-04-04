<?php 
include"design.php";
include"social.php";
include"inc/posts_handler.php";
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body style="background-color:#2B3A39;">
<div class="container" style="background-color:#EEB00D;box-shadow: 0px 3px 3px 0px #EEB00D">
<div class="row">
<div class="col-sm-12"><?php include"main_nav.php";?></div>
</div>

<div class="row" style="background-color:#FFFFFF;">

<div class="col-sm-3">
<h4 style="background-color:#A4831D;color:#FFFFFF"><strong>User Profile</strong></h4>
<p><strong><em>Name:</em></strong></p>
<p><strong><em>Number:</em></strong></p>
<p><strong><em>Location:</em></strong></p>
<hr>

<h4 style="background-color:#A4831D;color:#FFFFFF"><strong>Settings</strong></h4>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<p><strong>Apply another round group</strong></p>
<label for="plan">Select Your Plan</label><br><span> <em>e.g Weekly or Monthly</em></span><br>
<select name="period" id="plan" style="width:50%"><option></option><option name="period">Per Week</option><option name="period">Per Month</option></select><br>
<label for="amount">Select Money Round Plan</label><br><span> <em>e.g$5,$20,$50,$100</em></span><br>
<select name="amount" id="amount" style="width:50%"><option></option><option name="amount">$5</option><option name="amount">$10</option><option name="amount">$20</option><option name="amount">$50</option><option name="amount">$100</option></select><br>
<button type="submit" name="new_application" style="background-color:#83A9BC;margin-top:5px;border-radius:0px"  class="btn">Apply Now</button>
</form>
<hr>
<h4 style="background-color:#A4831D;color:#FFFFFF"><strong>Transaction History</strong></h4>
<p><strong>Next Receiver: <span style="color:#2CC76A" class="glyphicon glyphicon-user"></span></strong></p>
<p ><strong>Amount Received <span class="badge">$0.00</span></strong></p>
<p><strong>Amount Sent <span class="badge">$0.00</span></strong></p>
</div>
<div class="col-sm-6">
<h4 class="text-center"><strong>Members Chatbox</strong></h4>
<form class="form-horizontal"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<label for="reply"><p class="text-info">Enter your message below</p></label><br>
<textarea name="message" id="reply" style="border-radius:0px;border:1px solid #EEB00D" class="form-control"  rows="5" >
</textarea>
<button type="submit" name="chat" style="background-color:#EEB00D;margin-top:5px;border-radius:0px"  class="btn">Post Now</button>
</form>	
<hr>
<h4 class="text-info"><strong>Members Posts</strong></h4>
<h1 class="text-center">NO POSTS AVAILABLE YET</h1>
</div>

<div class="col-sm-3">
<h4><strong>Members List</strong></h4>
<p><span style="color:#2CC76A" class="glyphicon glyphicon-user">1</span></p>
<p><span style="color:#2CC76A" class="glyphicon glyphicon-user">2</span></p>
<p><span style="color:#2CC76A" class="glyphicon glyphicon-user">3</span></p>
<hr>

<h4><strong>Group Adverts</strong></h4>	
<img class="img-responsive" src="images/digital.gif" alt="advert">
<strong><span id="name"><marquee scrolldelay="300">Enjoy Mukando the online way</marquee></span></strong>
</div>

</div>
















<div class="row" style="background-color:#2B3A39;">
<div class="col-sm-12"><?php include"footer.php";?></div>
</div>

</div>
</body>
</html>