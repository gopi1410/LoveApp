<?php

require("init.php");

$sql="SELECT * FROM ".$table." WHERE uID='".$_GET['id']."'";
$result=mysql_query($sql,$con) or die(mysql_error());
$numrows=mysql_num_rows($result);
if($numrows==1)
{
	$row=mysql_fetch_assoc($result);
	$from=$row['from'];
	$to=$row['to'];
	$image=$row['image'];
}
mysql_close($con);

?>

<html>
  <head>
    <title>Dedicated to xyz</title>
    <meta name="description" content="Love App" />
    <meta name="keywords" content="Gopi Ramena IITK" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="d3.min.js"></script>
    <script type="text/javascript" src="love.js"></script>
    <style type="text/css">
      @import url("love.css");
    </style>
  </head>
  <body>
  <div id="header" align="center">
  Dedicated to <b>xyz</b> from <b>abc</b>
  </div>
  
    <div id="center">
      <div id="cont">
        <div id="dots">
        </div>
      </div>
    </div>
    <div id="footer">
	  HOVER OVER THE CIRCLES ABOVE. <br/>
      Developed by Gopi Ramena | &copy; Gopi Ramena 2012
    </div>
    <script type="text/javascript">

      if(/MSIE [3-8]/i.test(navigator.userAgent)) {
        alert("Sorry, Internet Explorer is not supported, please get a modern browser like Chrome of Firefox");
      } else {
        var hrefSplit = window.location.href.split("?", 2);
        var domian = hrefSplit[0];
        var file = hrefSplit[1];
        if (file) {
          if (file.match(/^[a-z0-9+\/=]+$/i)) {
            file = atob(file);
          } else {
            // Hide the link in the url
            window.location.href = domian + '?' + btoa(file);
          }
        } else {
          file = 'images/koalas.jpg';
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
