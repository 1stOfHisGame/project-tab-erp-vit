<?php
session_start();
?>

<html>

        <head><title>VIT ERP Homepage</title>

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

$sql1 = "SELECT * from project where dept = '$_SESSION[d]'";
$sql1 = $conn->query($sql1);
while($result = $sql1->fetch_assoc())
{
	$sql = "SELECT * from project where proj_id = '$result[proj_id]'";
	$sql = $conn->query($sql);
	$res = $sql->fetch_assoc();
	echo "Project Title: ".$result['proj_title']."<br>";
	$sql = "SELECT stud_name from student where roll_no = '$result[roll_1]'";
	$sql = $conn->query($sql);
	$res = $sql->fetch_assoc();
	echo "<center><table><tr> Group members </tr>";
	echo "<tr><th>".$res['stud_name']."</th>";
	$x = "SELECT stud_name from student where roll_no = '$result[roll_2]'";
	$x = $conn->query($x);
	$res = $x->fetch_assoc();
	echo "<th>".$res['stud_name']."</th>";
	$x = "SELECT stud_name from student where roll_no = '$result[roll_3]'";
	$x = $conn->query($x);
	$res = $x->fetch_assoc();
	echo "<th>".$res['stud_name']."</th></tr></table></center>";
	$sql = "SELECT guide_name from guide where username = '$result[username]'";
	$sql = $conn->query($sql);
	$res = $sql->fetch_assoc();
	echo "Project Guide: ".$res['guide_name']."<br>";
	
	$_SESSION['weeks'] = array(
	array($result['1_title'],$result['1_comments']),
	array($result['2_title'],$result['2_comments']),
	array($result['3_title'],$result['3_comments']),
	array($result['4_title'],$result['4_comments']),
	array($result['5_title'],$result['5_comments']),
	array($result['6_title'],$result['6_comments']),
	array($result['7_title'],$result['7_comments']),
	array($result['8_title'],$result['8_comments']),
	array($result['9_title'],$result['9_comments']),
	array($result['10_title'],$result['10_comments']),
	array($result['11_title'],$result['11_comments']),
	array($result['12_title'],$result['12_comments']),
	array($result['13_title'],$result['13_comments']),
	array($result['14_title'],$result['14_comments'])
	);
	echo '
	
	<center>
	<table>
		<tr>
			<th id="id">Week No.</th>
			<th id="id">Task</th>
			<th id="id">Comments by guide</th>
		</tr>
		<tr>
			<th>1.</th>
			<th>'.$_SESSION['weeks'][0][0].'</th>
			<th>'.$_SESSION['weeks'][0][1].'</th>
		</tr>
		<tr>
			<th>2.</th>
			<th>'.$_SESSION['weeks'][1][0].'</th>
			<th>'.$_SESSION['weeks'][1][1].'</th>
		</tr>
		<tr>
			<th>3.</th>
			<th>'.$_SESSION['weeks'][2][0].'</th>
			<th>'.$_SESSION['weeks'][2][1].'</th>
		</tr>
		<tr>
			<th>4.</th>
			<th>'.$_SESSION['weeks'][3][0].'</th>
			<th>'.$_SESSION['weeks'][3][1].'</th>
		</tr>
		<tr>
			<th>5.</th>
			<th>'.$_SESSION['weeks'][4][0].'</th>
			<th>'.$_SESSION['weeks'][4][1].'</th>
		</tr>
		<tr>
			<th>6.</th>
			<th>'.$_SESSION['weeks'][5][0].'</th>
			<th>'.$_SESSION['weeks'][5][1].'</th>
		</tr>
		<tr>
			<th>7.</th>
			<th>'.$_SESSION['weeks'][6][0].'</th>
			<th>'.$_SESSION['weeks'][6][1].'</th>
		</tr>
		<tr>
			<th>8.</th>
			<th>'.$_SESSION['weeks'][7][0].'</th>
			<th>'.$_SESSION['weeks'][7][1].'</th>
		</tr>
		<tr>
			<th>9.</th>
			<th>'.$_SESSION['weeks'][8][0].'</th>
			<th>'.$_SESSION['weeks'][8][1].'</th>
		</tr>
		<tr>
			<th>10.</th>
			<th>'.$_SESSION['weeks'][9][0].'</th>
			<th>'.$_SESSION['weeks'][9][1].'</th>
		</tr>
		<tr>
			<th>11.</th>
			<th>'.$_SESSION['weeks'][10][0].'</th>
			<th>'.$_SESSION['weeks'][10][1].'</th>
		</tr>
		<tr>
			<th>12.</th>
			<th>'.$_SESSION['weeks'][11][0].'</th>
			<th>'.$_SESSION['weeks'][11][1].'</th>
		</tr>
		<tr>
			<th>13.</th>
			<th>'.$_SESSION['weeks'][12][0].'</th>
			<th>'.$_SESSION['weeks'][12][1].'</th>
		</tr>
		<tr>
			<th>14.</th>
			<th>'.$_SESSION['weeks'][13][0].'</th>
			<th>'.$_SESSION['weeks'][13][1].'</th>
		</tr>
		
		
	</table></center><hr>';
}
?>
</div>
</html>