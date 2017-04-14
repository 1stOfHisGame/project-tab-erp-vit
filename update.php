<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_tab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($_POST['week1title'] != ""){
$sql = "UPDATE project SET 1_title = '$_POST[week1title]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}
if($_POST['week1comm'] != ""){
$sql = "UPDATE project SET 1_comments = '$_POST[week1comm]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}

if($_POST['week2title'] != ""){
$sql = "UPDATE project SET 2_title = '$_POST[week2title]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}
if($_POST['week2comm'] != ""){
$sql = "UPDATE project SET 2_comments = '$_POST[week2comm]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}

if($_POST['week3title'] != ""){
$sql = "UPDATE project SET 3_title = '$_POST[week3title]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}
if($_POST['week3comm'] != ""){
$sql = "UPDATE project SET 3_comments = '$_POST[week3comm]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}

if($_POST['week4title'] != ""){
$sql = "UPDATE project SET 4_title = '$_POST[week4title]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}
if($_POST['week4comm'] != ""){
$sql = "UPDATE project SET 4_comments = '$_POST[week4comm]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}

if($_POST['week5title'] != ""){
$sql = "UPDATE project SET 5_title = '$_POST[week5title]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}
if($_POST['week5comm'] != ""){
$sql = "UPDATE project SET 5_comments = '$_POST[week5comm]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}

if($_POST['week6title'] != ""){
$sql = "UPDATE project SET 6_title = '$_POST[week6title]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}
if($_POST['week6comm'] != ""){
$sql = "UPDATE project SET 6_comments = '$_POST[week6comm]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}

if($_POST['week7title'] != ""){
$sql = "UPDATE project SET 7_title = '$_POST[week7title]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}
if($_POST['week7comm'] != ""){
$sql = "UPDATE project SET 7_comments = '$_POST[week7comm]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}

if($_POST['week8title'] != ""){
$sql = "UPDATE project SET 8_title = '$_POST[week8title]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}
if($_POST['week8comm'] != ""){
$sql = "UPDATE project SET 8_comments = '$_POST[week8comm]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}

if($_POST['week9title'] != ""){
$sql = "UPDATE project SET 9_title = '$_POST[week9title]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}
if($_POST['week9comm'] != ""){
$sql = "UPDATE project SET 9_comments = '$_POST[week9comm]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}

if($_POST['week10title'] != ""){
$sql = "UPDATE project SET 10_title = '$_POST[week10title]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}
if($_POST['week10comm'] != ""){
$sql = "UPDATE project SET 10_comments = '$_POST[week10comm]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}

if($_POST['week11title'] != ""){
$sql = "UPDATE project SET 11_title = '$_POST[week11title]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}
if($_POST['week11comm'] != ""){
$sql = "UPDATE project SET 11_comments = '$_POST[week11comm]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}

if($_POST['week12title'] != ""){
$sql = "UPDATE project SET 12_title = '$_POST[week12title]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}
if($_POST['week12comm'] != ""){
$sql = "UPDATE project SET 12_comments = '$_POST[week12comm]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}

if($_POST['week13title'] != ""){
$sql = "UPDATE project SET 13_title = '$_POST[week13title]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}
if($_POST['week13comm'] != ""){
$sql = "UPDATE project SET 13_comments = '$_POST[week13comm]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}

if($_POST['week14title'] != ""){
$sql = "UPDATE project SET 14_title = '$_POST[week14title]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}
if($_POST['week14comm'] != ""){
$sql = "UPDATE project SET 14_comments = '$_POST[week14comm]' WHERE proj_id = '$_SESSION[pr]'";
$sql = $conn->query($sql);
}
$_POST['edit'] = $_SESSION['pr'];
header("location:http://localhost/project_tab/guide.php");
?>