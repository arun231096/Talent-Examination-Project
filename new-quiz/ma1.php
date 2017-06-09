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
$c16=$_POST['c16'];
$c17=$_POST['c17'];
$c18=$_POST['c18'];
$c19=$_POST['c19'];
$c20=$_POST['c20'];

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
$str="update data set c16='$c16',c17='$c17',c18='$c18',c19='$c19',c20='$c20' where reg=$reg";
$result = mysql_query($str,$con);
 if ($result) { 
 }
else
echo "problem";

 ?>
<?php echo "<b>Reg.No:-$reg</b>";  ?>
<center><h3>MATHS</h3>
<form method="post" action="ma2.php">
<table id="t1" border="1" cellpadding="0" cellspacing="0" align="center">

<tr><td><img src="ma/M1.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT1.jpg"></td>
<td align="center" style="width:100px;">a)<input type="radio" required name="m1" value="a"><br>b)<input type="radio" required name="m1" value="b"><br>c)<input type="radio" required name="m1" value="c"><br>d)<input type="radio" required name="m1" value="d"></td></tr>


<tr><td><img src="ma/M2.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT2.jpg"></td>
<td align="center">a)<input type="radio" required name="m2" value="a"><br>b)<input type="radio" required name="m2" value="b"><br>c)<input type="radio" required name="m2" value="c"><br>d)<input type="radio" required name="m2" value="d"></td></tr>

<tr><td><img src="ma/M3.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT3.jpg"></td>
<td align="center">a)<input type="radio" required name="m3" value="a"><br>b)<input type="radio" required name="m3" value="b"><br>c)<input type="radio" required name="m3" value="c"><br>d)<input type="radio" required name="m3" value="d"></td></tr>

<tr><td><img src="ma/M4.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT4.jpg"></td>
<td align="center">a)<input type="radio" required name="m4" value="a"><br>b)<input type="radio" required name="m4" value="b"><br>c)<input type="radio" required name="m4" value="c"><br>d)<input type="radio" required name="m4" value="d"></td></tr>

<tr><td><img src="ma/M5.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT5.jpg"></td>
<td align="center">a)<input type="radio" required name="m5" value="a"><br>b)<input type="radio" required name="m5" value="b"><br>c)<input type="radio" required name="m5" value="c"><br>d)<input type="radio" required name="m5" value="d"></td></tr>

</table>
<input type="hidden" name="reg" value="<?php echo $reg; ?>">
<center><br><input type="submit" style="width:150px; height:40px; background-color:#66FF00; border-radius:10px; border:none; box-shadow:2px 2px 2px; font-size:20px;" name="NEXT" value="NEXT"></center>
</form>
</body>
</html>