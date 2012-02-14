<html>
<head>
<title>Loveapp</title>
<link rel="stylesheet" href="uploadstyle.css" type="text/css" media="screen" charset="utf-8">
</head>

<body>
<?php

//max image size: 200kB
if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg")) && ($_FILES["file"]["size"] < 500000) && isset($_POST['submit']))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "Error: " . $_FILES["file"]["error"] . "<br />";
	}
	else
	{
		//echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		//echo "Type: " . $_FILES["file"]["type"] . "<br />";
		//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		//echo "Stored in: " . $_FILES["file"]["tmp_name"]."<br/><br/>";
		
		if (file_exists("images/" . $_FILES["file"]["name"]))
		{
			echo $_FILES["file"]["name"] . " already exists. <br/>";
			echo "If you haven't uploaded it upload using a different name for your image";
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],"images/" . $_FILES["file"]["name"]);
			//echo "Stored in: " . "images/" . $_FILES["file"]["name"];
			require("init.php");
			$image=substr($_FILES["file"]["name"],0,-4);
			$link=substr(md5($image),0,10);
			$sql="INSERT INTO ".$table." (`from`, `to`, `image`, `link`, `message`) VALUES ('".$_POST['from']."', '".$_POST['to']."', '".$image."', '".$link."', '".mysql_real_escape_string($_POST['msg'])."')";
			mysql_query($sql,$con) or die(mysql_error());
			?>
			
			<table height="100%" width="100%">
            <tr>
                <td align="center" valign="middle">
                    <div id="container">
						<h1 id="l10n_title">Success</title>
						
                        <div class="sorry">
                            <p id="l10n_sorry_1">Send the link below to your valentine:</p>
							<p id="l10n_sorry_2"><a href="http://localhost/loveapp/love.php?id=<?php echo $link; ?>" target="_blank">http://localhost/loveapp/love.php?id=<?php echo $link; ?></a></p>
							</div>
                    </div>
                </td>
            </tr>
			</table>
							
			<?php
			mysql_close($con);
		}
    }
}
else
{
	echo "Oops.. Either you are trying to hack you script kiddie OR you have uploaded wrong kind of file";
}

?>

</body>
</html>