<?php

session_start();

include("connection.php");

$query="UPDATE Users Set diary='".mysqli_real_escape_string($link,$_POST['diary'])."' WHERE id='".$_SESSION['id']."' LIMIT 1";

mysqli_query($link,$query);
//print_r($_SESSION);

?>
