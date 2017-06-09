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
$m1=$_POST['m1'];
$m2=$_POST['m2'];
$m3=$_POST['m3'];
$m4=$_POST['m4'];
$m5=$_POST['m5'];

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
$str="update data set m1='$m1',m2='$m2',m3='$m3',m4='$m4',m5='$m5' where reg=$reg";
$result = mysql_query($str,$con);
 if ($result) { 
 }
else
echo "problem";

 ?>
<?php echo "<b>Reg.No:-$reg</b>";  ?>
<center><h3>MATHS</h3>
<form method="post" action="ma3.php">
<table id="t1" border="1" cellpadding="0" cellspacing="0" align="center">

<tr><td><img src="ma/M6.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT6.jpg"></td>
<td align="center"  style="width:100px;">a)<input type="radio" required name="m6" value="a"><br>b)<input type="radio" required name="m6" value="b"><br>c)<input type="radio" required name="m6" value="c"><br>d)<input type="radio" required name="m6" value="d"></td></tr>


<tr><td><img src="ma/M7.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT7.jpg"></td>
<td align="center">a)<input type="radio" required name="m7" value="a"><br>b)<input type="radio" required name="m7" value="b"><br>c)<input type="radio" required name="m7" value="c"><br>d)<input type="radio" required name="m7" value="d"></td></tr>

<tr><td><img src="ma/M8.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT8.jpg"></td>
<td align="center">a)<input type="radio" required name="m8" value="a"><br>b)<input type="radio" required name="m8" value="b"><br>c)<input type="radio" required name="m8" value="c"><br>d)<input type="radio" required name="m8" value="d"></td></tr>

<tr><td><img src="ma/M9.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT9.jpg"></td>
<td align="center">a)<input type="radio" required name="m9" value="a"><br>b)<input type="radio" required name="m9" value="b"><br>c)<input type="radio" required name="m9" value="c"><br>d)<input type="radio" required name="m9" value="d"></td></tr>

<tr><td><img src="ma/M10.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT10.jpg"></td>
<td align="center">a)<input type="radio" required name="m10" value="a"><br>b)<input type="radio" required name="m10" value="b"><br>c)<input type="radio" required name="m10" value="c"><br>d)<input type="radio" required name="m10" value="d"></td></tr>

</table>
<input type="hidden" name="reg" value="<?php echo $reg; ?>">
<center><br><input type="submit" style="width:150px; height:40px; background-color:#66FF00; border-radius:10px; border:none; box-shadow:2px 2px 2px; font-size:20px;" name="NEXT" value="NEXT"></center>
</form>
</body>
</html>