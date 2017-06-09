<html>
<head>
	<style type="text/css">

	#t1{
border-style:solid;
border-width:3px;
       }
    </style>
	<title>SASURIE TALENT EXAM</title>
 <link rel="shortcut icon" href="images/clg.jpg">

</head>
<body>

<?php 

$reg=$_POST['reg'];
$m6=$_POST['m6'];
$m7=$_POST['m7'];
$m8=$_POST['m8'];
$m9=$_POST['m9'];
$m10=$_POST['m10'];

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
$str="update data set m6='$m6',m7='$m7',m8='$m8',m9='$m9',m10='$m10' where reg=$reg";
$result = mysql_query($str,$con);
 if ($result) { 
}
else
echo "problem";

 ?>
<?php echo "<b>Reg.No:-$reg</b>";  ?>
<center><h3>MATHS</h3>
<form method="post" action="ma4.php">
<table id="t1" border="1" cellpadding="0" cellspacing="0" >

<tr><td><img src="ma/M11.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT11.jpg"></td>
<td align="center" style="width:100px;">a)<input type="radio" required name="m11" value="a"><br>b)<input type="radio" required name="m11" value="b"><br>c)<input type="radio" required name="m11" value="c"><br>d)<input type="radio" required name="m11" value="d"><br><br><br><br><br><br></td></tr>


<tr><td><img src="ma/M12.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT12.jpg"></td>
<td align="center">a)<input type="radio" required name="m12" value="a"><br>b)<input type="radio" required name="m12" value="b"><br>c)<input type="radio" required name="m12" value="c"><br>d)<input type="radio" required name="m12" value="d"><br><br><br><br><br><br></td></tr>

<tr><td><img src="ma/M13.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT13.jpg"></td>
<td align="center">a)<input type="radio" required name="m13" value="a"><br>b)<input type="radio" required name="m13" value="b"><br>c)<input type="radio" required name="m13" value="c"><br>d)<input type="radio" required name="m13" value="d"><br><br><br><br><br><br></td></tr>

<tr><td><img src="ma/M14.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT14.jpg"></td>
<td align="center">a)<input type="radio" required name="m14" value="a"><br>b)<input type="radio" required name="m14" value="b"><br>c)<input type="radio" required name="m14" value="c"><br>d)<input type="radio" required name="m14" value="d"><br><br><br><br><br><br></td></tr>

<tr><td><img src="ma/M15.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT15.jpg"></td>
<td align="center">a)<input type="radio" required name="m15" value="a"><br>b)<input type="radio" required name="m15" value="b"><br>c)<input type="radio" required name="m15" value="c"><br>d)<input type="radio" required name="m15" value="d"><br><br><br><br><br><br></td></tr>

</table>
<input type="hidden" name="reg" value="<?php echo $reg; ?>">
<center><br><input type="submit" style="width:150px; height:40px; background-color:#66FF00; border-radius:10px; border:none; box-shadow:2px 2px 2px; font-size:20px;" name="NEXT" value="NEXT"></center>
</form>
</body>
</html>