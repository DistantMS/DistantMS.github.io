<?php
if(basename($_SERVER["PHP_SELF"]) == "main.php"){
die("Error!");}
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<link rel="shortcut icon" href="favicon.ico" > 
	<link rel=stylesheet type="text/css" href="css/style.css">
	
                            <style>
                                ul.hyphen-list {
                                    list-style-type: none;
                                    margin-left: 0em;
                                    padding-left: 1em;
                                    text-indent: -0.85em;
                                }
                                ul.hyphen-list li:before {
                                    content: "- ";
                                }
                            </style>
							
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $servername; echo " v".$version; echo ".".$reversion; echo " [GMS] ".$patch; ?> - MapleStory Private Server</title>
    </head>
	<body>
	<!--Navigation & Header-->
		<div align="center" class="header">
			<div align="center" class="navigation">
				<table height="100%">
					<tr>
						<td><a href="?e=home"><img src="images/home.png" alt="Home"></a></td>
						<td class="sep"></td>
						<td><a href="?e=news">News</a></td>
						<td class="sep"></td>				
						<?php
						if(isset($_SESSION['id'])) {
						echo "
						<td><a href='?e=cpanel'>Control Panel</a></td>
						<td class='sep'></td>
						<td><a href='?e=logout'><font style='color: #f00'>Logout</font></a></td>";
						} else {
						echo "
						<td><a href='?e=register'>Sign Up</a></td>
						<td class='sep'></td>
						<td><a href='?e=login'>Login</a></td>";
						}
						?>
						<td class="sep"></td>
						<td><a href="?e=downloads">Downloads</a></td>
						<td class="sep"></td>
						<td><a href="?e=ranking">Rankings</a></td>
					</tr>
				</table>
			</div>
		</div>
<div id="music3">
<Div style="margin-top:-5px; margin-left:-6px;">
<!-- YOUR MUSIC CODE GOES HERE, RIGHT AFTER THIS LINE. -->
<embed src="http://www.sheepproductions.com/billy/billy.swf?autoplay=true&f0=https://dl.dropboxusercontent.com/s/l2sx4n5owopbj0n/Missing%20You.mp3?dl=1&token_hash=AAH3JXZ9f3EvpiuysjSfqxfivkTB93slbO8XABSSGHNJRw&t0=Missing You&total=1" quality="high" wmode="transparent" width="1" height="1" name="billy" align="middle" type="application/x-shockwave-flash" /></div></div>
	</body>