<!DOCTYPE HTML>
<html>
<head>
<title>Love App</title>
<style type="text/css">
body
{
	background:#ffffff url('bg.jpg');
	color:blue;
	cursor:url(cur1.gif),auto;
	position:fixed;
	width:100%;
	height:100%;
}

button
{
	//background-color:#8BAD68;
	background-color:#A4C7FF;
	//color: rgba(0, 0, 0, 0.63);
	color: #000;
	font-size: 15px;
	font-weight: bold;
	font-family: Arial,'Helvetica Neue',Helvetica,sans-serif;
	text-shadow: 0 1px 1px rgba(255, 255, 255, 0.37);
	cursor: pointer;
	white-space: nowrap;
	border:1px solid #2A3F56;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	-moz-box-shadow: 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(255,255,255,0.7) inset;
	-webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(255,255,255,0.7) inset;
	box-shadow: 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(255,255,255,0.7) inset;
}

button span
{
	display: block;
	line-height: 24px;
	height: 25px;
	width:100px;
	float: left;
}

#form
{
	opacity:0.9;
	background-color:powderblue;
	width:50%;
	margin-left:25%;
	cursor:default;
}

#footer
{
	opacity:0.9;
	position:absolute;
	bottom:3%;
	background-color:powderblue;
	width:50%;
	height:5%;
	margin-left:25%;
}

#leftimg
{
	opacity:0.7;
	position:absolute;
	top:30%;
	left:1%;
	width:20%;
	height:50%;
}

#rightimg
{
	opacity:0.7;
	position:absolute;
	top:30%;
	right:1%;
	width:20%;
	height:50%;
}

#header
{
	opacity:0.7;
	background-color:powderblue;
	position:absolute;
	top:1%;
	margin-left:25%;
	width:50%;
}
</style>
</head>

<body>
<div id="header" align="center">
<h1>Valentine's Love App</h1>
</div><br/><br/><br/><br/><br/><br/>

<div id="form" align="center">
<h4>Upload your valentine's image or any other image you want to gift her &amp; wait for the magic!</h4>
<p>(Max image size=500kB &amp; only jpg files allowed)</p>

<form action="upload.php" method="post"
enctype="multipart/form-data">
<table>
<tr><td><label for="file">Image:</label></td>
<td><input type="file" name="file" id="file" required="required" /></td></tr>
<tr><td>Your name:</td><td><input type="text" name="from" maxlength="15" required="required" /></td></tr>
<tr><td>Receiver's name:</td><td><input type="text" name="to" maxlength="15" required="required" /></td></tr>
<tr><td>Enter a message or a quote:</td><td><input type="text" name="msg" maxlength="150" required="required" /></td></tr>
</table>
<input type="hidden" name="submit" value="check" /><br/>
<button type="submit"><span>GO!!</span></button>
</form>
</div>

<div id="leftimg">
<img src="v1.gif" width="100%" height="100%" />
</div>

<div id="rightimg">
<img src="v1.gif" width="100%" height="100%" />
</div>

<div id="footer" align="center">
Valentine's Love App | &copy; Gopi Ramena 2012
</div>
</body>
</html>