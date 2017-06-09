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
$p16=$_POST['p16'];
$p17=$_POST['p17'];
$p18=$_POST['p18'];
$p19=$_POST['p19'];
$p20=$_POST['p20'];

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
$str="update data set p16='$p16',p17='$p17',p18='$p18',p19='$p19',p20='$p20' where reg=$reg";
$result = mysql_query($str,$con);
 if ($result) { 
}
else
echo "problem";

 ?>
<?php echo "<b>Reg.No:-$reg</b>";  ?>
<center><h3>CHEMISTRY</h3> </center>
<form method="post" action="ch2.php">
<table id="t1" border="1" cellpadding="0" cellspacing="0" align="center">

<tr><td><img src="ch/C1.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT1.jpg"></td>
<td align="center"  style="width:100px;">a)<input type="radio" required name="c1" value="a"><br>b)<input type="radio" required name="c1" value="b"><br>c)<input type="radio" required name="c1" value="c"><br>d)<input type="radio" required name="c1" value="d"></td></tr>


<tr><td><img src="ch/C2.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT2.jpg"></td>
<td align="center">a)<input type="radio" required name="c2" value="a"><br>b)<input type="radio" required name="c2" value="b"><br>c)<input type="radio" required name="c2" value="c"><br>d)<input type="radio" required name="c2" value="d"></td></tr>

<tr><td><img src="ch/C3.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT3.jpg"></td>
<td align="center">a)<input type="radio" required name="c3" value="a"><br>b)<input type="radio" required name="c3" value="b"><br>c)<input type="radio" required name="c3" value="c"><br>d)<input type="radio" required name="c3" value="d"></td></tr>

<tr><td><img src="ch/C4.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT4.jpg"></td>
<td align="center">a)<input type="radio" required name="c4" value="a"><br>b)<input type="radio" required name="c4" value="b"><br>c)<input type="radio" required name="c4" value="c"><br>d)<input type="radio" required name="c4" value="d"></td></tr>

<tr><td><img src="ch/C5 copy.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT5.jpg"></td>
<td align="center">a)<input type="radio" required name="c5" value="a"><br>b)<input type="radio" required name="c5" value="b"><br>c)<input type="radio" required name="c5" value="c"><br>d)<input type="radio" required name="c5" value="d"></td></tr>

</table>
<input type="hidden" name="reg" value="<?php echo $reg; ?>">
<center><br><input type="submit" style="width:150px; height:40px; background-color:#66FF00; border-radius:10px; border:none; box-shadow:2px 2px 2px; font-size:20px;" name="NEXT" value="NEXT"></center>

</form>
</body>
</html>
