 <?php 
include"design.php";
include"social.php";
include"inc/posts_handler.php";
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
#views{
	color:#F7961A;
}	
#views:hover{
	color:#0A7C8B;
	text-decoration:none;
}
</style>
</head>
<body style="background-color:#2B3A39;">
<div class="container" style="background-color:#EEB00D;">
<div class="row">
<div class="col-sm-12"><?php include"main_nav.php";?></div>
</div>
<div class="row">
<a href="#logout"><img class="img-fluid" src="images/logout.png" alt="logout now" title="logout now" width="155" height="135">
<span><strong>Logout</strong></span></a>
</div>

<div class="row" style="background-color:#FFFFFF;margin-top:5px">
<h2 class="text-center">e-Mukando Staff Panel</h2>
<div class="col-sm-6" style="background-color:#FFFFFF;margin-top:5px">
<a id="views" href="index.php"><div class="jumbotron" style="border:1px solid #286090">
<h3 class="text-center"><strong>View Registered<br>Members<br><small class="text-center">click here</small></strong></h3>
</div></a>
</div>
<div class="col-sm-6" style="background-color:#FFFFFF;margin-top:5px">
<a id="views" href="index.php"><div class="jumbotron" style="border:1px solid #286090">
<h3 class="text-center"><strong>View Staff<br>Members<br><small class="text-center">click here</small></strong></h3>
</div></a>
</div>

</div>

<div class="row" style="background-color:#FFFFFF;margin-top:5px">
<div class="col-sm-4" style="background-color:#FFFFFF;margin-top:5px">
<h3>View Membership Applications</h3>	
<p class="text-center"> no applications yet </p>



</div>
<div class="col-sm-4" style="background-color:#FFFFFF;margin-top:5px">
<h3 class="text-center">Members Management</h3>	
<div class="jumbotron" style="padding:25;border:1px solid #286090">

<div class="col-sm-2"><a href="group/group_1.php?%group management">Group 1</a></div>
<div class="col-sm-2"><a href="group/group_2.php?%group management">Group 2</a></div>
<div class="col-sm-2"><a href="group/group_3.php?%group management">Group 3</a></div>
<div class="col-sm-2"><a href="group/group_4.php?%group management">Group 4</a></div>
<div class="col-sm-2"><a href="group/group_5.php?%group management">Group 5</a></div>
<div class="col-sm-2"><a href="group/group_6.php?%group management">Group 6</a></div>
<p>&nbsp</p>
<div class="col-sm-2"><a href="group/group_7.php?%group management">Group 7</a></div>
<div class="col-sm-2"><a href="group/group_8.php?%group management">Group 8</a></div>
<div class="col-sm-2"><a href="group/group_9.php?%group management">Group 9</a></div>
<div class="col-sm-2"><a href="group/group_10.php?%group management">Group 10</a></div>
<div class="col-sm-2"><a href="group/group_11.php?%group management">Group 11</a></div>
<div class="col-sm-2"><a href="group/group_12.php?%group management">Group 12</a></div>
<hr>


</div>
</div>

<div class="col-sm-4" style="background-color:#FFFFFF;margin-top:5px">
<h3>Send Notifications</h3>
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<div class="form-group">
 <span class="glyphicon glyphicon-comment"></span><label for="inputinfo">Enter Notification Below</label> 
           <textarea name="msg" class="form-control" id="inputinfo" style="border:1px solid #286090">
		   </textarea>
        </div>
		
      
        <button type="submit" name="notify" class="btn btn-primary"><span style="color:#FFFFFF">Send Now</span></button>

    </form>
</div>
</div>




<div class="row" style="background-color:#2B3A39;">
<div class="col-sm-12"><?php include"footer.php";?></div>
</div>

</div>
</body>
</html>