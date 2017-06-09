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
$p6=$_POST['p6'];
$p7=$_POST['p7'];
$p8=$_POST['p8'];
$p9=$_POST['p9'];
$p10=$_POST['p10'];

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
$str="update data set p6='$p6',p7='$p7',p8='$p8',p9='$p9',p10='$p10' where reg=$reg";
$result = mysql_query($str,$con);
 if ($result) { 
}
else
echo "problem";

 ?>
<?php echo "<b>Reg.No:-$reg</b>";  ?>
<center><h3>PHYSICS</h3> </center>
<form method="post" action="phy4.php">
<table id="t1" border="1" cellpadding="0" cellspacing="0" align="center">

<tr><td><img src="p6/p11.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT11.jpg"></td>
<td align="center" style="width:100px;">a)<input type="radio" required name="p11" value="a"><br>b)<input type="radio" required name="p11" value="b"><br>c)<input type="radio" required name="p11" value="c"><br>d)<input type="radio" required name="p11" value="d"></td></tr>


<tr><td><img src="p6/p12.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT12.jpg"></td>
<td align="center">a)<input type="radio" required name="p12" value="a"><br>b)<input type="radio" required name="p12" value="b"><br>c)<input type="radio" required name="p12" value="c"><br>d)<input type="radio" required name="p12" value="d"></td></tr>

<tr><td><img src="p6/p13.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT13.jpg"></td>
<td align="center">a)<input type="radio" required name="p13" value="a"><br>b)<input type="radio" required name="p13" value="b"><br>c)<input type="radio" required name="p13" value="c"><br>d)<input type="radio" required name="p13" value="d"></td></tr>

<tr><td><img src="p6/p14.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT14.jpg"></td>
<td align="center">a)<input type="radio" required name="p14" value="a"><br>b)<input type="radio" required name="p14" value="b"><br>c)<input type="radio" required name="p14" value="c"><br>d)<input type="radio" required name="p14" value="d"></td></tr>

<tr><td><img src="p6/p15.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT15.jpg"></td>
<td align="center">a)<input type="radio" required name="p15" value="a"><br>b)<input type="radio" required name="p15" value="b"><br>c)<input type="radio" required name="p15" value="c"><br>d)<input type="radio" required name="p15" value="d"></td></tr>

</table>
<input type="hidden" name="reg" value="<?php echo $reg; ?>">
<center><br><input type="submit" style="width:150px; height:40px; background-color:#66FF00; border-radius:10px; border:none; box-shadow:2px 2px 2px; font-size:20px;" name="NEXT" value="NEXT"></center>

</form>
</body>
</html>