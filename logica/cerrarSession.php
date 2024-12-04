<?php
session_destroy();
if (headers_sent()) {
	echo "<script> window.location.href'../vistas/login.php';</script>";
} else {
	header("Location:../vistas/login.php");
}
?>