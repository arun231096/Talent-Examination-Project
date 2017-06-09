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
$c11=$_POST['c11'];
$c12=$_POST['c12'];
$c13=$_POST['c13'];
$c14=$_POST['c14'];
$c15=$_POST['c15'];

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
$str="update data set c11='$c11',c12='$c12',c13='$c13',c14='$c14',c15='$c15' where reg=$reg";
$result = mysql_query($str,$con);
 if ($result) { 
}
else
echo "problem";

 ?>
<?php echo "<b>Reg.No:-$reg</b>";  ?>
<center><h3>CHEMISTRY</h3> </center>
<form method="post" action="ma1.php">
<table id="t1" border="1" cellpadding="0" cellspacing="0" align="center">

<tr><td><img src="ch/C16.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT16.jpg"></td>
<td align="center" style="width:100px;">a)<input type="radio" required name="c16" value="a"><br>b)<input type="radio" required name="c16" value="b"><br>c)<input type="radio" required name="c16" value="c"><br>d)<input type="radio" required name="c16" value="d"></td></tr>


<tr><td><img src="ch/C17.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT17.jpg"></td>
<td align="center">a)<input type="radio" required name="c17" value="a"><br>b)<input type="radio" required name="c17" value="b"><br>c)<input type="radio" required name="c17" value="c"><br>d)<input type="radio" required name="c17" value="d"></td></tr>

<tr><td><img src="ch/C18 copy.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT18.jpg"></td>
<td align="center">a)<input type="radio" required name="c18" value="a"><br>b)<input type="radio" required name="c18" value="b"><br>c)<input type="radio" required name="c18" value="c"><br>d)<input type="radio" required name="c18" value="d"></td></tr>

<tr><td><img src="ch/C19.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT19.jpg"></td>
<td align="center">a)<input type="radio" required name="c19" value="a"><br>b)<input type="radio" required name="c19" value="b"><br>c)<input type="radio" required name="c19" value="c"><br>d)<input type="radio" required name="c19" value="d"></td></tr>

<tr><td><img src="ch/C20.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT20.jpg"></td>
<td align="center">a)<input type="radio" required name="c20" value="a"><br>b)<input type="radio" required name="c20" value="b"><br>c)<input type="radio" required name="c20" value="c"><br>d)<input type="radio" required name="c20" value="d"></td></tr>

</table>
<input type="hidden" name="reg" value="<?php echo $reg; ?>">
<center><br><input type="submit" style="width:150px; height:40px; background-color:#66FF00; border-radius:10px; border:none; box-shadow:2px 2px 2px; font-size:20px;" name="NEXT" value="NEXT"></center>

</form>
</body>
</html>