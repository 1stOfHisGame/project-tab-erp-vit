<?php
session_start();
$_POST['edit'] = $_SESSION['pr'];
header("location:http://localhost/project_tab/status.php");
?>
