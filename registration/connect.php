<?php
$servername = "localhost";
$username = "arr121";
$password = "aahvaandtu";
$dbname = "registerations";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
		$p=$_POST['submit'];
	else
		$p="asdsa";
echo $p;
if(1)
{
	$name=$_POST['name'];
	$college=$_POST['college'];
	$teamname = $_POST['teamname'];
	$number=$_POST['Players'];
	$contact = $_POST['conatct'];
	$mail=$_POST['mail'];
   $accomo=$_POST['accomo'];
	if(isset($_POST['Player_name_0']))
		$p1=$_POST['Player_name_0'];
	else
		$p1="";
	if(isset($_POST['Player_name_1']))
		$p2=$_POST['Player_name_1'];
	else
		$p2="";
	if(isset($_POST['Player_name_2']))
		$p3=$_POST['Player_name_2'];
	else
		$p3="";
	if(isset($_POST['Player_name_3']))
		$p4=$_POST['Player_name_3'];
	else
		$p4="";
	if(isset($_POST['Player_name_4']))
		$p5=$_POST['Player_name_4'];
	else
		$p5="";
	if(isset($_POST['Player_name_5']))
		$p6=$_POST['Player_name_5'];
	else
		$p6="";
	if(isset($_POST['Player_name_6']))
		$p7=$_POST['Player_name_6'];
	else
		$p7="";
	if(isset($_POST['Player_name_7']))
		$p8=$_POST['Player_name_7'];
	else
		$p8="";
	if(isset($_POST['Player_name_8']))
		$p9=$_POST['Player_name_8'];
	else
		$p9="";
	if(isset($_POST['Player_name_9']))
		$p10=$_POST['Player_name_9'];
	else
		$p10="";
	if(isset($_POST['Player_name_10']))
		$p11=$_POST['Player_name_10'];
	else
		$p11="";
	if(isset($_POST['Player_name_11']))
		$p12=$_POST['Player_name_11'];
	else
		$p12="";
	if(isset($_POST['Player_name_12']))
		$p13=$_POST['Player_name_12'];
	else
		$p13="";
	if(isset($_POST['Player_name_13']))
		$p14=$_POST['Player_name_13'];
	else
		$p14="";
	if(isset($_POST['Player_name_14']))
		$p15=$_POST['Player_name_14'];
	else
		$p15="";
	if(isset($_POST['Player_name_15']))
		$p16=$_POST['Player_name_15'];
	else
		$p16="";
$sql = "INSERT INTO reg (name, college, teamname, number,contact,mail,accomo,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16)
VALUES ('$name', '$college', '$teamname', '$number', '$contact', '$mail','$accomo','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$p11','$p12','$p13','$p14','$p15','$p16')";

if ($conn->query($sql) === TRUE) {
    header("Location: thank_you.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
echo 1;
?>
