 <?php include"design.php";?>
<!DOCTYPE>
 <html>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>About Us|e-Mukando</title>
  <meta charset="utf-8">
</head>

<body>
<div class="container">
<div class="row">
<?php include 'main_nav.php'; ?>
</div>
</div>


<div id="up" class="row">
<?php include 'social.php'; ?>
<div class="col-sm-6">
<hr>
<h4 style="padding-left:15px"><b>e-Mukando</b></h4>
<img class="img-responsive" src="images/about.png" width="100%" height="135px" alt="about us" title="more about us">
 <div class="jumbotron">
 <p class="text-justify" style="font-size:15px;padding-left:15px;padding-right:15px"><em>
We pass.com is an Online educational platform developed in 2017 by a young talented programmer and 
<span>Tech Evangelist <b>Noby Tebulo</b></span>,
a Zimbabwean resident.The platform provides avenues to 
updated information about education,colleges,tips for 
aspiring college students and job centers to graduated students.</em></p>
</div>
<div class="alert alert-success" role="alert"><strong>Our Goal:</strong><br>
<p style="color:#000"> Is to connect all Students and Tutors around the world to drink from one source of knowledge</p>
<strong>Our Vision:</strong> <br>
<p style="color:#000">Is to be the best online educational center</p><br>
<p style="color:#000"class="text-justify">As wepass.com we are proud and
 honoured to take globally the Significance of ZIMSEC which is
  <em>"to offer an excellent, value driven, educational assessment and responsive awarding systems. 
  Through maximum capacity utilization, the Council is gearing itself to continually exceed
  expectations.ZIMSEC carries out quality assessment to guarantee the quality of manpower for 
  national development. It identifies potential talents, competencies and skills for future 
  leaders of industry, commerce and government; feeds institutions of higher learning and the 
  employment sector. ZIMSEC sets standards for levels of academic expertise of Zimbabwean nationals
  for use locally and internationally."</em></p>
</div>


</div>


<div class="col-sm-6" style="border-left:1px solid grey">
<hr>
<h4 style="padding-left:15px"><b>We love to hear from you all again</b>
<img src="car/down.gif" width="48" height="50"></h4>
<center><img src="images/ContactUsBanner (1).png" 
width="50%" height="110px"/></center>

<center><address><strong>
<p><a href="mailto:nobytechy@gmail.com">
email now</a></p>
<p>953 CABS Houses,Senga</p>
<p>Gweru,Zimbabwe.</p>
<p>Call/Whatsapp :+263 716 605 802</p></strong>
</address></center>

    <form>
	 <div class="form-group">
        <span class="glyphicon glyphicon-user"></span>    <label for="inputname">First Name</label></span>
            <input type="text" class="form-control" id="inputname" placeholder="Noby"  pattern="^[A-Za-z]+" required/>
        </div>
		<div class="form-group">
        <span class="glyphicon glyphicon-user"></span></span>    <label for="inputsurname">Last Name</label>
            <input type="text" class="form-control" id="inputsurname" placeholder="Tebulo" pattern="^[A-Za-z]+" required/>
        </div>
		<div class="form-group">
        <span class="glyphicon glyphicon-phone"></span></span>    <label for="inputphone">Cell Number</label>
            <input type="text"  class="form-control" id="inputphone" placeholder="+263 716 605 802" pattern="[0-9]"required/>
       
	   </div>
		<div class="form-group">
        <span class="glyphicon glyphicon-envelope"></span></span>    <label for="inputEmail">Email </label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" required/>
        </div>
		<div class="form-group">
 <span class="glyphicon glyphicon-comment"></span></span>           <label for="inputinfo">Enter Feedback Below</label> 
           <textarea name="message" class="form-control" id="inputinfo" placeholder="Write your feedback here">
		   </textarea>
        </div>
		
      
        <button type="submit"  class="btn btn-danger"><span style="color:#000">Submit Now</span></button>

    </form>




</div>
</div>



<div class="row" style="background-color:#2B3A39;">
<div class="col-sm-12"><?php include"footer.php";?></div>
</div>


</body>
</html>