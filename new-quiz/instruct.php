<html>
<head>
<title>SASURIE TALENT EXAM</title>
 <link rel="shortcut icon" href="images/clg.jpg">
</head>
<body>

<?php

$reg=$_POST['reg'];
$name=$_POST['name'];
$scl=$_POST['scl'];
$add=$_POST['add'];
$mno=$_POST['mno'];
$mail=$_POST['email'];

$con=$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = mysql_connect($servername, $username, $password);

// Check connection
if (!$con) {
    die("Connection failed: " . mysql_connect_error());
}
$db=mysql_select_db("quiz",$con)or die(mysql_error());
$str="insert into data values('','$reg','$name','$scl','$add','$mno','$mail','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')";

$result = mysql_query($str,$con);
 if ($result) { 
 }
else{
echo "problem";
echo "<script> window.alert('Field is already registered')</script>";
header("Location: index.html");
}


?>

	<center><h3>INSTRUCTIONS</h3></center>
	<table align="center" bgcolor="#FFFFCC" width="700" height="400">
		<tr><td><b>1.Students are instructed to read the following instructions carefully.</td></tr>
		<tr><td><b>2.This exam totally contains 60 questions and each having one mark.</td></tr>
		<tr><td><b>3.20 question from physics and 20 from chemistry and 20 from maths.</td></tr>
		<tr><td><b>4.Every question must be answered.</td></tr>
		<tr><td><b>5.Exam timing 1-Hour</td></tr>
	</table>
	<center><h3>All the best</h3></center>
	<form method="post" action="phy1.php">
		<input type="hidden" name="reg" value="<?php echo $reg; ?>">
		<center><input style="width:150px; height:40px; background-color:#666600; border-radius:10px; border:none; box-shadow:2px 2px 2px; font-size:20px;" type="submit" name="START" value="START"></center>
	</form>
</body>
</html>