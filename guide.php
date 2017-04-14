<?php
session_start();
?>

<html>

        <head><title>VIT ERP Homepage</title>

</style>
<link rel="stylesheet" href="proj.css" sheet="css/text"></link>
	</head>

        <body class="homepage-back">

<div style="float:right;" >
<img class="header" src="VIT-logo.png"></img>Welcome 
<?php
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
$a = $_SESSION['roll_no'];
if(!isset($a)){
	die("Login to continue");
	return;
}
$usr_name = "SELECT guide_name FROM guide where username = '$a'";
$usr_name = $conn->query($usr_name); 
if($usr_name->num_rows == 1){
//$row = $usr_name->fetch_assoc();
$row = mysqli_fetch_assoc($usr_name);
	echo $row["guide_name"]." ";
}

?>
<a href="http://localhost/project_tab/logout.php"><input class="button" type="button" id="icon" style="padding:0px;width:60px" value="logout">
</input></a>
</div>
<br><br><br><br>
<div>

<?php
/*
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
$a = $_SESSION['roll_no'];
if(!isset($a)){
	die("Login to continue");
	return;
}
*/

$sql = "SELECT * from project where username = '$a'";
$_SESSION['r'] = $sql = $conn->query($sql);
$c = $i = $sql->num_rows;

if($i == 0)	
	echo "No projects allotted<br><hr>";
else if($i > 0){
echo "<b>No. of projects: </b>".$i."<br><br><hr>";

	$result = $_SESSION['r']->fetch_assoc();
	$_SESSION['one'] = $result['proj_id'];
	echo "&nbsp;<b>Project Title:</b> ".$result['proj_title']."<br>";
	$_SESSION['1_t']=$result['proj_title'];
	$x = "SELECT stud_name from student where roll_no = '$result[roll_1]'";
	$x = $conn->query($x);
	$res = $x->fetch_assoc();
	echo "<center><table><tr> <b>Group Members</b> </tr>";
	echo "<tr><th>".$res['stud_name']."</th>";
	$x = "SELECT stud_name from student where roll_no = '$result[roll_2]'";
	$x = $conn->query($x);
	$res = $x->fetch_assoc();
	echo "<th>".$res['stud_name']."</th>";
	$x = "SELECT stud_name from student where roll_no = '$result[roll_3]'";
	$x = $conn->query($x);
	$res = $x->fetch_assoc();
	echo "<th>".$res['stud_name']."</th></tr></table></center>";
	$x = "SELECT guide_name from guide where username = '$result[username]'";
	$x = $conn->query($x);
	$res = $x->fetch_assoc();
	echo "<b>Project Guide</b>: ".$res['guide_name']."<br>";
	echo "<hr>";
	$i = $i - 1;
}
?>
<?php
/*
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
$a = $_SESSION['roll_no'];
if(!isset($a)){
	die("Login to continue");
	return;
}
*/

if($i > 0){
		$result = $_SESSION['r']->fetch_assoc();
	//$_SESSION['pr'] = $result['proj_id'];
	$_SESSION['two'] = $result['proj_id'];
	echo "&nbsp;<b><b>Project Title:</b></b> ".$result['proj_title']."<br>";
	$_SESSION['2_t']=$result['proj_title'];
	$x = "SELECT stud_name from student where roll_no = '$result[roll_1]'";
	$x = $conn->query($x);
	$res = $x->fetch_assoc();
echo "<center><table><tr> <b>Group Members</b> </tr>";
	echo "<tr><th>".$res['stud_name']."</th>";
	$x = "SELECT stud_name from student where roll_no = '$result[roll_2]'";
	$x = $conn->query($x);
	$res = $x->fetch_assoc();
	echo "<th>".$res['stud_name']."</th>";
	$x = "SELECT stud_name from student where roll_no = '$result[roll_3]'";
	$x = $conn->query($x);
	$res = $x->fetch_assoc();
	echo "<th>".$res['stud_name']."</th></tr></table></center>";
	$x = "SELECT guide_name from guide where username = '$result[username]'";
	$x = $conn->query($x);
	$res = $x->fetch_assoc();
	echo "<b>Project Guide</b>: ".$res['guide_name']."<br>";
	echo "<hr>";
	$i = $i - 1;
}
?>

<?php
/*
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
$a = $_SESSION['roll_no'];
if(!isset($a)){
	die("Login to continue");
	return;
}
*/

 if($i > 0){
		$result = $_SESSION['r']->fetch_assoc();
	//$_SESSION['pr'] = $result['proj_id'];
	$_SESSION['three'] = $result['proj_id'];
	if($result == NULL)
		echo "Project Allotted: "."No";
	//echo "Project Allotted: "."Yes<br>";
	echo "<b>Project Title:</b> ".$result['proj_title']."<br>";
	$_SESSION['3_t']=$result['proj_title'];
	$x = "SELECT stud_name from student where roll_no = '$result[roll_1]'";
	$x = $conn->query($x);
	$res = $x->fetch_assoc();
echo "<center><table><tr> <b>Group Members</b> </tr>";
	echo "<tr><th>".$res['stud_name']."</th>";
	$x = "SELECT stud_name from student where roll_no = '$result[roll_2]'";
	$x = $conn->query($x);
	$res = $x->fetch_assoc();
	echo "<th>".$res['stud_name']."</th>";
	$x = "SELECT stud_name from student where roll_no = '$result[roll_3]'";
	$x = $conn->query($x);
	$res = $x->fetch_assoc();
	echo "<th>".$res['stud_name']."</th></tr></table></center>";
	$x = "SELECT guide_name from guide where username = '$result[username]'";
	$x = $conn->query($x);
	$res = $x->fetch_assoc();
	echo "<b>Project Guide</b>: ".$res['guide_name']."<br>";
	echo "<hr>";
	$i = $i - 1;
}
?>
<form action="status.php" method="post">
<input type="submit" value="Edit/View status"></input>
<select name="edit">
    <option value="<?php if($c > 0) echo $_SESSION['one']; else echo "---";?>"><?php if($c > 0) echo $_SESSION['1_t']; else echo "---";?></option>
    <option value="<?php if($c > 1) echo $_SESSION['two']; else echo "---";?>"><?php if($c > 1) echo $_SESSION['2_t']; else echo "---";?></option>
    <option value="<?php if($c > 2) echo $_SESSION['three']; else echo "---";?>"><?php if($c > 2) echo $_SESSION['3_t']; else echo "---";?></option>
    
  </select>

 </form>
 <?php
 $sql = "SELECT * from guide where username = '$_SESSION[roll_no]'";
 $sql = $conn->query($sql);
 $res = $sql->fetch_assoc();
 if($res['designation'] == "HOD"){
	 $_SESSION['d'] = $res['dept'];
	 echo "<hr>View status of all projects of ".$res['dept']." department<br><br>";
	echo '<a href="http://localhost/project_tab/hod.php"><input type="submit" value="View all"></input></a>';
 }
 ?>

</div>
</body>
</html>
