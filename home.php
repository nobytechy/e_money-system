 <?php 
include"design.php";
include"social.php";
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
<h2 class="text-center">Admin Welcome to e-Mukando</h2>
<div class="col-sm-4" style="background-color:#FFFFFF;margin-top:5px">
<a id="views" href="actions/members_list.php"><div class="jumbotron" style="border:1px solid #286090">
<h3 class="text-center"><strong>View Registered<br>Members<br><small class="text-center">click here</small></strong></h3>
</div></a>
</div>
<div class="col-sm-4" style="background-color:#FFFFFF;margin-top:5px">
<a id="views" href="actions/staff_list.php"><div class="jumbotron" style="border:1px solid #286090">
<h3 class="text-center"><strong>View Staff<br>Members<br><small class="text-center">click here</small></strong></h3>
</div></a>
</div>

<div class="col-sm-4" style="background-color:#FFFFFF;margin-top:5px">
<a id="views" href="actions/staff_registration.php"><div class="jumbotron" style="border:1px solid #286090">
<h3 class="text-center"><strong>Register Staff<br>Now<br><small class="text-center">click here</small></strong></h3>
</div></a>
</div>
</div>

<div class="row" style="background-color:#FFFFFF;margin-top:5px">
<div class="col-sm-4" style="background-color:#FFFFFF;margin-top:5px">

<a id="views" href="users.php"><div class="jumbotron" style="border:1px solid #286090">
<h3 class="text-center"><strong>Manage Users<br>Now<br><small class="text-center">click here</small></strong></h3>
</div></a>
</div>


<div class="col-sm-4" style="background-color:#FFFFFF;margin-top:5px">
<h3>Send Staff Notifications</h3>
 <form action="" method="">
		<div class="form-group">
 <span class="glyphicon glyphicon-comment"></span></span>           <label for="inputinfo">Enter Notification Below</label> 
           <textarea name="message" class="form-control" id="inputinfo" style="border:1px solid #286090">
		   </textarea>
        </div>
		
      
        <button type="submit" name="notify" class="btn btn-primary"><span style="color:#FFFFFF">Send Now</span></button>

    </form>


</div>


<div class="col-sm-4" style="background-color:#FFFFFF;margin-top:5px">
<h3>Send Members Notifications</h3>
 <form action="" method="">
		<div class="form-group">
 <span class="glyphicon glyphicon-comment"></span></span><label for="inputinfo">Enter Notification Below</label> 
           <textarea name="message" class="form-control" id="inputinfo" style="border:1px solid #286090">
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