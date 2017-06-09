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
$c6=$_POST['c6'];
$c7=$_POST['c7'];
$c8=$_POST['c8'];
$c9=$_POST['c9'];
$c10=$_POST['c10'];

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
$str="update data set c6='$c6',c7='$c7',c8='$c8',c9='$c9',c10='$c10' where reg=$reg";
$result = mysql_query($str,$con);
 if ($result) { 
 }
else
echo "problem";

 ?>

<?php echo "<b>Reg.No:-$reg</b>";  ?>
<center><h3>CHEMISTRY</h3>
<form method="post" action="ch4.php">
<table id="t1" border="1" cellpadding="0" cellspacing="0" >

<tr><td><img src="ch/C11.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT11.jpg"></td>
<td align="center"  style="width:100px;">a)<input type="radio" required name="c11" value="a"><br>b)<input type="radio" required name="c11" value="b"><br>c)<input type="radio" required name="c11" value="c"><br>d)<input type="radio" required name="c11" value="d"></td></tr>


<tr><td><img src="ch/C12.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT12.jpg"></td>
<td align="center">a)<input type="radio" required name="c12" value="a"><br>b)<input type="radio" required name="c12" value="b"><br>c)<input type="radio" required name="c12" value="c"><br>d)<input type="radio" required name="c12" value="d"></td></tr>

<tr><td><img src="ch/C13.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT13.jpg"></td>
<td align="center">a)<input type="radio" required name="c13" value="a"><br>b)<input type="radio" required name="c13" value="b"><br>c)<input type="radio" required name="c13" value="c"><br>d)<input type="radio" required name="c13" value="d"></td></tr>

<tr><td><img src="ch/C14.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT14.jpg"></td>
<td align="center">a)<input type="radio" required name="c14" value="a"><br>b)<input type="radio" required name="c14" value="b"><br>c)<input type="radio" required name="c14" value="c"><br>d)<input type="radio" required name="c14" value="d"></td></tr>

<tr><td><img src="ch/C15.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT15.jpg"></td>
<td align="center">a)<input type="radio" required name="c15" value="a"><br>b)<input type="radio" required name="c15" value="b"><br>c)<input type="radio" required name="c15" value="c"><br>d)<input type="radio" required name="c15" value="d"></td></tr>

</table>
<input type="hidden" name="reg" value="<?php echo $reg; ?>">
<center><br><input type="submit" style="width:150px; height:40px; background-color:#66FF00; border-radius:10px; border:none; box-shadow:2px 2px 2px; font-size:20px;" name="NEXT" value="NEXT"></center>

</form>
</body>
</html>