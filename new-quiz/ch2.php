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
$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$c4=$_POST['c4'];
$c5=$_POST['c5'];

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
$str="update data set c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5' where reg=$reg";
$result = mysql_query($str,$con);
 if ($result) { 
 }
else
echo "problem";

 ?>

<?php echo "<b>Reg.No:-$reg</b>";  ?>
<center><h3>CHEMISTRY</h3> 
<form method="post" action="ch3.php">
<table id="t1" border="1" cellpadding="0" cellspacing="0" >

<tr><td><img src="ch/C6.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT6.jpg"></td>
<td align="center"  style="width:100px;">a)<input type="radio" required name="c6" value="a"><br>b)<input type="radio" required name="c6" value="b"><br>c)<input type="radio" required name="c6" value="c"><br>d)<input type="radio" required name="c6" value="d"></td></tr>


<tr><td><img src="ch/C7.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT7.jpg"></td>
<td align="center">a)<input type="radio" required name="c7" value="a"><br>b)<input type="radio" required name="c7" value="b"><br>c)<input type="radio" required name="c7" value="c"><br>d)<input type="radio" required name="c7" value="d"></td></tr>

<tr><td><img src="ch/C8.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT8.jpg"></td>
<td align="center">a)<input type="radio" required name="c8" value="a"><br>b)<input type="radio" required name="c8" value="b"><br>c)<input type="radio" required name="c8" value="c"><br>d)<input type="radio" required name="c8" value="d"></td></tr>

<tr><td><img src="ch/C9.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT9.jpg"></td>
<td align="center">a)<input type="radio" required name="c9" value="a"><br>b)<input type="radio" required name="c9" value="b"><br>c)<input type="radio" required name="c9" value="c"><br>d)<input type="radio" required name="c9" value="d"></td></tr>

<tr><td><img src="ch/C10.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="ch/CT10.jpg"></td>
<td align="center">a)<input type="radio" required name="c10" value="a"><br>b)<input type="radio" required name="c10" value="b"><br>c)<input type="radio" required name="c10" value="c"><br>d)<input type="radio" required name="c10" value="d"></td></tr>

</table>
<input type="hidden" name="reg" value="<?php echo $reg; ?>">
<center><br><input type="submit" style="width:150px; height:40px; background-color:#66FF00; border-radius:10px; border:none; box-shadow:2px 2px 2px; font-size:20px;" name="NEXT" value="NEXT"></center>

</form>
</body>
</html>