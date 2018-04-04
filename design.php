<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
 <script type="text/javascript" src="js/bootstrap.js"></script>
 <script type="text/javascript" src="js/jquery.js"></script>
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

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
 <style type="text/css">
 @keyframes name{
15% {color:#ADA090;}
40% {color:#000;}
65% {color:#9D8066;}
80% {color:#000;} 
}
#name{
  color:#0A7C8B;
  animation-name:name;
    animation-duration:20s;
   animation-iteration-count: infinite;
}
 .color-1{
  color:#FFFFFF;
 }
 .color-2{
  color:#000;
 }
 .btn-1{
  background-color:#FFB300;
  color:#000;
  font-weight:bold;
  box-shadow: 0px 3px 4px 0px #296272;
 }
 .btn-1:hover{
  background-color:#296272;
   box-shadow: 0px 3px 4px 0px #FFB300;
  color:#E2AD17;
 }
 #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index:9;
  border: none;
  outline: none;
  background-color:#FFB300;
  color: #000;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}

#myBtn:hover {
  background-color: #31B0D5;
  color: #FFFFFF;
}
 	
.topnav {

  overflow: hidden;
  background-color:transparent;
  width:100%;
 
}

.topnav a {
  float: left;
  display: block;
 color:#58ACAC;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
 font: bold 1.5em sans-serif;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  position:relative;
  font-size:17px;
}
.topnav a:hover {
  text-decoration:none;
    color:#000000;

}

#link{
   color:#01730E;
  text-decoration:none;
   border-bottom:2px solid #fff ;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .col-divider{
border:none;
}
 #motto{
  font-size: 10px; 
 }
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
  .topnav a {
  float: left;
  display: block;
    color:#0C1E54;
  text-align: center;
  padding: 10px 14px;
  text-decoration: none;
 font: bold 1.5em sans-serif;
  text-transform: uppercase;
  letter-spacing: 2px;
  position:relative;
  font-size: 12px;
}
}

@media screen and (max-width: 600px) {
  #pic{
    padding-left:35px;
    margin-left: 75px;
  }
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}
.change{
background-color:#EEB00D;
padding:5px;
border:1px solid #FFFFFF;
}
.change:hover{
background-color:#867124;
color:#FFFFFF;
padding:2px;
}
.log {
   position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-image: url(images/slide1.jpg);
  background-size: cover;
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}



.log:target {
  opacity:1;
  pointer-events: auto;
}

.log > div {
  width: 70%;
  position: relative;
  margin: 25px auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
  background: -moz-linear-gradient(#fff, #999);
  background: -webkit-linear-gradient(#fff, #999);
  background: -o-linear-gradient(#fff, #999);
}



.close {
  background:#000;
  color: #FFFFFF;
  line-height: 25px;
  position: absolute;
  border: 2px solid #000;
  right: -12px;
  text-align: center;
  top: -10px;
  width: 24px;
  text-decoration: none;
  font-weight: bold;
  -webkit-border-radius: 12px;
  -moz-border-radius: 12px;
  border-radius: 12px;
  -moz-box-shadow: 1px 1px 3px #f00;
  -webkit-box-shadow: 1px 1px 3px #f00;
  box-shadow: 1px 1px 3px #f00;
}

.close:hover { background: #00d9ff; }


.Dialog {
   position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background:#39F;
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}



.Dialog:target {
  opacity:1;
  pointer-events: auto;
}

.Dialog > div {
  width: 70%;
  position: relative;
  margin: 10% auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
  background: -moz-linear-gradient(#fff, #999);
  background: -webkit-linear-gradient(#fff, #999);
  background: -o-linear-gradient(#fff, #999);
}

.views {
   position: fixed;
  font-family: Arial, Helvetica, sans-serif;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background:#333;
  z-index: 99999;
  opacity:0;
  -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  pointer-events: none;
}



.views:target {
  opacity:1;
  pointer-events: auto;
}

.views > div {
  width: 90%;
  position: relative;
  margin: 5% auto;
  padding: 5px 20px 13px 20px;
  border-radius: 10px;
  background: #fff;
  background: -moz-linear-gradient(#fff, #999);
  background: -webkit-linear-gradient(#fff, #999);
  background: -o-linear-gradient(#fff, #999);
}
 </style>
 <div class="container">
  <div class="row"><div id="admin" class="log">
  <div style="border-radius:0">
    <a href="#close" title="Close" class="close">X</a>
    <h3 style="color:#000">Admin Login Panel</h3>
  
<form action="" method="post"  style="width:50%" autocomplete="off">
<input type="text" name="username" class="form-control" placeholder="Username please" required><br>

<input type="password" name="password" class="form-control" id="inputsurname" placeholder="Password please" required><br>
  
  <button type="submit" name="admin_login"  class="btn" style="background-color:#B48D19"><span style="color:#FFF">Login</span></button>       
</form>
  </div>
</div></div>
</div>

 