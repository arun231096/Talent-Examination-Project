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
$m11=$_POST['m11'];
$m12=$_POST['m12'];
$m13=$_POST['m13'];
$m14=$_POST['m14'];
$m15=$_POST['m15'];

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
$str="update data set m11='$m11',m12='$m12',m13='$m13',m14='$m14',m15='$m15' where reg=$reg";
$result = mysql_query($str,$con);
 if ($result) { 
}
else
echo "problem";

 ?>
<?php echo "<b>Reg.No:-$reg</b>";  ?>
<center><h3>MATHS</h3> </center>
<form method="post" action="final.php">
<table id="t1" border="1" cellpadding="0" cellspacing="0" align="center">

<tr><td><img src="ma/M16.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT16.jpg"><br></td>
<td align="center" style="width:100px;">a)<input type="radio" required name="m16" value="a"><br>b)<input type="radio" required name="m16" value="b"><br>c)<input type="radio" required name="m16" value="c"><br>d)<input type="radio" required name="m16" value="d"></td></tr>


<tr><td><img src="ma/M17.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT17.jpg"></td>
<td align="center">a)<input type="radio" required name="m17" value="a"><br>b)<input type="radio" required name="m17" value="b"><br>c)<input type="radio" required name="m17" value="c"><br>d)<input type="radio" required name="m17" value="d"></td></tr>

<tr><td><img src="ma/M18.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT18.jpg"></td>
<td align="center">a)<input type="radio" required name="m18" value="a"><br>b)<input type="radio" required name="m18" value="b"><br>c)<input type="radio" required name="m18" value="c"><br>d)<input type="radio" required name="m18" value="d"></td></tr>

<tr><td><img src="ma/M19.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT19.jpg"></td>
<td align="center">a)<input type="radio" required name="m19" value="a"><br>b)<input type="radio" required name="m19" value="b"><br>c)<input type="radio" required name="m19" value="c"><br>d)<input type="radio" required name="m19" value="d"></td></tr>

<tr><td><img src="ma/M20.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ma/MT20.jpg"></td>
<td align="center">a)<input type="radio" required name="m20" value="a"><br>b)<input type="radio" required name="m20" value="b"><br>c)<input type="radio" required name="m20" value="c"><br>d)<input type="radio" required name="m20" value="d"></td></tr>

</table>
<input type="hidden" name="reg" value="<?php echo $reg; ?>">
<center><br><input type="submit" style="width:150px; height:40px; background-color:#66FF00; border-radius:10px; border:none; box-shadow:2px 2px 2px; font-size:20px;" name="NEXT" value="NEXT"></center>
</form>
</body>
</html>