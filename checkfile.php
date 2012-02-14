<?php

if(isset($_POST['submit']))
{
	echo "Submitted<br/>";
}

echo $_FILES["file"]["type"]."<br/>";
if($_FILES["file"]["type"] == "image/gif")
{
	echo "gif file<br/>";
}

if($_FILES["file"]["type"] == "image/jpeg")
{
	echo "jpeg file<br/>";
}
if($_FILES["file"]["type"] == "image/jpg")
{
	echo "jpg file<br/>";
}

echo $_FILES["file"]["size"]."<br/>";
if($_FILES["file"]["size"] < 200000)
{
	echo "right size<br/>";
}

?>