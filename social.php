<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mukando</title>
<style>
.sticky-container{
    padding:0px;
    margin:0px;
    position:fixed;
    right:-130px;
    top:230px;
    width:210px;
    z-index: 1100;
}
.sticky li{
    list-style-type:none;
    background-color:#fff;
    color:#efefef;
    height:150px;
    padding:0px;
    margin:0px 0px 1px 0px;
    -webkit-transition:all 0.25s ease-in-out;
    -moz-transition:all 0.25s ease-in-out;
    -o-transition:all 0.25s ease-in-out;
    transition:all 0.25s ease-in-out;
    cursor:pointer;
}
.sticky li:hover{
    margin-left:-115px;
}
.sticky li img{
    float:left;
   
    margin-right:25px;
}
.sticky li p{
    padding-top:5px;
    margin:0px;
    line-height:16px;
    font-size:11px;
}
.sticky li p a{
    text-decoration:none;
    color:#2C3539;
     font-size:15px;
}
.sticky li p a:hover{
    text-decoration:underline;
}
</style>
</head>

<body>
<div class="sticky-container">

    <ul class="sticky">
        <li>
            <img class="img-responsive" src="images/contact.png" alt="contact us">
            <p><a style="font-weight:bold" href="contact.php">Contact Us</a></p>
        </li>
    </ul>
</div>
</body>
</html>