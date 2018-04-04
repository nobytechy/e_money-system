<?php 
include"inc/reg_handler.php";
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<div class="footer">
<center>

<h3 class="text-center" style="color:#EDB636">Subscribe for the Latest News on e-Mukando</h3>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" autocomplete="off">
   
<input type="tel" id="email" name="phone"  placeholder="Enter your phone number" pattern="[0]{1}[7]{1}[1-9]{1}[1-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}">
<br>
<button type="submit" id="submit" name="subscription">SUBSCRIBE NOW</button>
</form></center>

 <p class="text-center">			<a id="link" href="" target="">Send Us Feedback</a> |
                                    <a id="link" href="" target="">Privacy Policy</a> |
                                    <a id="link" href="" target="">Terms and Conditions</a></p>
<p class="text-center" style="color:#FFF">powered by Nobytechy Systems &copy 2018|All Rights Reserved</p>                                    
</div>

<style type="text/css">
#link{
color:#EDB636;
}
#sub-form{
	margin-top:5px;
}
#email{
	height:50px;
	width:50%;
	font-size:18;
	color:#227997; 
}
#submit{
	height:40px;
	margin-top:3px;
	width:35%;
	background-color:#227997;
	border-style: none;
	color:#FFF;
}
#submit:hover{
	height:40px;
	margin-top:3px;
	width:35%;
	background-color:#7A6927;
	border-style: none;
	 color:#FFF;
}
</style>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || 
document.documentElement.scrollTop > 50) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</style>
</body>
</html>