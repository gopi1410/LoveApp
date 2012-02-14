<?php

require("init.php");
if(!isset($_GET['id']))
{
	header("Location: index.php");
}

$sql="SELECT * FROM ".$table." WHERE link='".$_GET['id']."'";
$result=mysql_query($sql,$con) or die(mysql_error());
$numrows=mysql_num_rows($result);
if($numrows==1)
{
	$row=mysql_fetch_assoc($result);
	$from=$row['from'];
	$to=$row['to'];
	$image=$row['image'];
	$msg=$row['message'];
}
else
{
	die("Invalid id passed<br/>Dont try to hack you script kiddie.. :P");
}
mysql_close($con);

?>

<html>
  <head>
    <title>Dedicated to <?php echo $to; ?></title>
    <meta name="description" content="Love App" />
    <meta name="keywords" content="Gopi Ramena IITK" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="d3.min.js"></script>
    <script type="text/javascript" src="love.js"></script>
    <script type="text/javascript" src="shower.js"></script>
    <style type="text/css">
      @import url("love.css");
    </style>
  </head>
  <body>
  <div id="gopi" style="postion:absolute; float:right; z-index:100; width:15%;">
	<b>&copy; 2012 |</b> <a href="https://www.facebook.com/gopi1410"><b>Gopi Ramena</b></a>
  </div>  
  
  <div id="header" align="center" style="margin-left:15%;">
  <font size="5">Dedicated to <b><?php echo $to; ?></b> from <b><?php echo $from; ?></b></font>
  </div>
  
  <div id="img1">
  <img class="gopi" src="v2.gif" height="100%" width="100%">
  </div>
  
  <div id="img2">
  <img class="gopi" src="v3.jpg" height="100%" width="100%">
  </div>
  
    <div id="center">
      <div id="cont">
        <div id="dots">
        </div>
      </div>
    </div>
    <div id="footer">
	  HOVER OVER THE CIRCLES ABOVE.<br/>
      <?php echo $msg; ?>
    </div>
	
    <script type="text/javascript">

      if(/MSIE [3-8]/i.test(navigator.userAgent)) {
        alert("Sorry, Internet Explorer is not supported, please get a modern browser like Chrome of Firefox");
      } else {
        var hrefSplit = window.location.href.split("?", 2);
        var domian = hrefSplit[0];
        var file = hrefSplit[1];
        if (file) {
          file = 'images/<?php echo $image; ?>.jpg';
        }
        if (file.substring(0, 5) === 'http:') {
          file = "image-server.php?url=" + file;
        }
        var img = new Image();
        img.onload = function() { loadImage(this); };
        img.src = file;
      }

    </script>
  </body>
</html>
