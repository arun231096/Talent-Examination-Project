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
$p11=$_POST['p11'];
$p12=$_POST['p12'];
$p13=$_POST['p13'];
$p14=$_POST['p14'];
$p15=$_POST['p15'];

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
$str="update data set p11='$p11',p12='$p12',p13='$p13',p14='$p14',p15='$p15' where reg=$reg";
$result = mysql_query($str,$con);
 if ($result) { 
 }
else
echo "problem";

 ?>
<?php echo "<b>Reg.No:-$reg</b>";  ?>
<center><h3>PHYSICS</h3> </center>
<form method="post" action="ch1.php">
<table id="t1" border="1" cellpadding="0" cellspacing="0" align="center">

<tr><td><img src="p6/p16.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT16.jpg"></td>
<td align="center"  style="width:100px;">a)<input type="radio" required name="p16" value="a"><br>b)<input type="radio" required name="p16" value="b"><br>c)<input type="radio" required name="p16" value="c"><br>d)<input type="radio" required name="p16" value="d"></td></tr>


<tr><td><img src="p6/p17.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT17.jpg"></td>
<td align="center">a)<input type="radio" required name="p17" value="a"><br>b)<input type="radio" required name="p17" value="b"><br>c)<input type="radio" required name="p17" value="c"><br>d)<input type="radio" required name="p17" value="d"></td></tr>

<tr><td><img src="p6/p18.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT18.jpg"></td>
<td align="center">a)<input type="radio" required name="p18" value="a"><br>b)<input type="radio" required name="p18" value="b"><br>c)<input type="radio" required name="p18" value="c"><br>d)<input type="radio" required name="p18" value="d"></td></tr>

<tr><td><img src="p6/p19.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT19.jpg"></td>
<td align="center">a)<input type="radio" required name="p19" value="a"><br>b)<input type="radio" required name="p19" value="b"><br>c)<input type="radio" required name="p19" value="c"><br>d)<input type="radio" required name="p19" value="d"></td></tr>

<tr><td><img src="p6/p20.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT20.jpg"></td>
<td align="center">a)<input type="radio" required name="p20" value="a"><br>b)<input type="radio" required name="p20" value="b"><br>c)<input type="radio" required name="p20" value="c"><br>d)<input type="radio" required name="p20" value="d"></td></tr>

</table>
<input type="hidden" name="reg" value="<?php echo $reg; ?>">
<center><br><input type="submit" style="width:150px; height:40px; background-color:#66FF00; border-radius:10px; border:none; box-shadow:2px 2px 2px; font-size:20px;" name="NEXT" value="NEXT"></center>

</form>
</body>
</html>