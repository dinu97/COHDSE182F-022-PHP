<html>
<head>
<title>Home</title>
</head>
<body>

</body>
</html>
<?php
session_start();
$time = $_SERVER['REQUEST_TIME'];
$timeout = 10;
if (isset($_SESSION['Last_Time']) && 
   ($time - $_SESSION['Last_Time']) > $timeout) {
    session_unset();
    session_destroy();
	session_start();
	header("Location:login.php");
	exit();
}
else if($_SESSION['Last_Time'])
{
	echo '<h1>Welcome To Home Page</h1>';
}
else
{
	header("Location:login.php");
}
?>