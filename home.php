<?php
session_start();
if (!isset($_SESSION['logged'])) {
	header('Location:l.php');

}
//$_SESSION['r_url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>
<a href="logout.php">Logout</a>