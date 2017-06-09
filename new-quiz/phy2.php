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
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
$p4=$_POST['p4'];
$p5=$_POST['p5'];

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
$str="update data set p1='$p1',p2='$p2',p3='$p3',p4='$p4',p5='$p5' where reg=$reg";
$result = mysql_query($str,$con);
 if ($result) { 
}
else
echo "problem";

 ?>
<?php echo "<b>Reg.No:-$reg</b>";  ?>
<center><h3>PHYSICS</h3> </center>
<form method="post" action="phy3.php">
<table id="t1" border="1" cellpadding="0" cellspacing="0" align="center">

<tr><td><img src="p6/p6.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT6.jpg"></td>
<td align="center" style="width:100px;">a)<input type="radio" required name="p6" value="a"><br>b)<input type="radio" required name="p6" value="b"><br>c)<input type="radio" required name="p6" value="c"><br>d)<input type="radio" required name="p6" value="d"></td></tr>


<tr><td><img src="p6/p7.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT7.jpg"></td>
<td align="center">a)<input type="radio" required name="p7" value="a"><br>b)<input type="radio" required name="p7" value="b"><br>c)<input type="radio" required name="p7" value="c"><br>d)<input type="radio" required name="p7" value="d"></td></tr>

<tr><td><img src="p6/p8.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT8.jpg"></td>
<td align="center">a)<input type="radio" required name="p8" value="a"><br>b)<input type="radio" required name="p8" value="b"><br>c)<input type="radio" required name="p8" value="c"><br>d)<input type="radio" required name="p8" value="d"></td></tr>

<tr><td><img src="p6/p9.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT9.jpg"></td>
<td align="center">a)<input type="radio" required name="p9" value="a"><br>b)<input type="radio" required name="p9" value="b"><br>c)<input type="radio" required name="p9" value="c"><br>d)<input type="radio" required name="p9" value="d"></td></tr>

<tr><td><img src="p6/p10.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT10.jpg"></td>
<td align="center">a)<input type="radio" required name="p10" value="a"><br>b)<input type="radio" required name="p10" value="b"><br>c)<input type="radio" required name="p10" value="c"><br>d)<input type="radio" required name="p10" value="d"></td></tr>

</table>
<input type="hidden" name="reg" value="<?php echo $reg; ?>">
<center><br><input style="width:150px; height:40px; background-color:#66FF00; border-radius:10px; border:none; box-shadow:2px 2px 2px; font-size:20px;" type="submit" name="NEXT" value="NEXT"></center>

</form>
</body>
</html>