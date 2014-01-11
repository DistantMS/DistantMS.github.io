<?php
error_reporting(0);
$host['hostname'] = 'localhost'; // Host name [DEFAULT:Localhost]
$host['user'] = 'root'; // DB Username
$host['password'] = ''; // DB Password
$host['database'] = 'v117'; // DB Name
$webtitle = 'DistantMS'; // Website Title
$rate['exp'] = '50x'; // Exp Rate
$rate['meso'] = '1000x'; // Meso Rate
$rate['drop'] = '1000x'; // Drop Rate
$servername = 'DistantMS'; // Server Name
$version = '117'; // Version
$reversion = '2'; // ReVersion like 114.1, so the Revesion of this patch is 1.
$patch = 'Distant'; // Patch Name
$serverip = "25.12.68.116"; // Your IP Here!
$loginport = "8484"; // LoginPort [DEFAULT: 8484]
 
//Links
$client = "https://mega.co.nz/#!WJYzhRrC!d1oqAUDSYJ2JZLAcAbtWJXPyUVNpQJhiimYahzTcdok"; // Client download link
$mssetup = "https://mega.co.nz/#!mc4X2Qga!cXZMAzT062E_0jYC5NXg71kXixNfCAfEcPmBfeQIJk8"; // Full Maplestory setup download link
$forum = "/forum/forum.php"; // Forum link
$news = "/forum/news.php"; // News link, or you can make a new page :)
$wzfiles = "https://mega.co.nz/#F!aBpyBLjQ!C1bvXiWTuroblbGRU1NHkQ"; // Wz files
$win8 = "https://mega.co.nz/#!fIYnnbhI!CDwjJQNSi1llH9gxS8Wkzi0289t-tmF5aq4DvXibTpU"; // Windows 8 Support
$hamachi = "https://secure.logmein.com/products/hamachi/download.aspx"; // Hamachi

$offline = "<img src=images/offline.png>";
$online = "<img src=images/online.png>";

// Opens connection to mysql server [DO NOT TOUCH THIS]
mysql_connect($host['hostname'],$host['user'],$host['password']) OR die("Can't connect to server");
mysql_select_db($host['database']) OR die("Cannot select DB");

if(basename($_SERVER["PHP_SELF"]) == "config.php"){
	die("Error!");
} 
?>