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

$usr = $_POST["usr"];
$pass = $_POST["pwd"];

if($usr[0] >= '0' && $usr[0] <= '9')
{
$sql = "SELECT roll_no,stud_name FROM student where (roll_no = '$usr' AND pwd = '$pass')";
$sql = $conn->query($sql);
if ($sql->num_rows == 1) {
	$temp_roll = $sql->fetch_assoc();
    $_SESSION["roll_no"] = $temp_roll["roll_no"];
	echo "success student login";
	header("location:http://localhost/project_tab/student.php");
}
 else {
	echo "Incorrect email id or password<br>Please go back and login from correct credentials :)";
}

}
else if($usr[0] >= 'a' && $usr[0] <= 'z')
{
$sql = "SELECT username FROM guide where (username = '$usr' AND pwd = '$pass')";
$sql = $conn->query($sql);
if ($sql->num_rows == 1) {
	$temp_roll = $sql->fetch_assoc();
    $_SESSION['roll_no'] = $temp_roll['username'];
	echo "success guide login";
	header("location:http://localhost/project_tab/guide.php");
}
 else {
	echo "Incorrect email id or password<br>Please go back and login page and enter correct credentials :)";
}
	
}
 else {
	echo "Incorrect email id or password<br>Please go back and login from correct credentials :)";
}

$conn->close();
?>