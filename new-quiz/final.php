<!DOCTYPE html>
<html>
<head>
	<title>SASURIE TALENT EXAM</title>
 <link rel="shortcut icon" href="images/clg.jpg">

</head>
<body style="background:url(images/url.jpg); background-size: 100% auto;">
<br><center><img src="images/clg.jpg" width="200" height="200">
<?php 

$reg=$_POST['reg'];
$m16=$_POST['m16'];
$m17=$_POST['m17'];
$m18=$_POST['m18'];
$m19=$_POST['m19'];
$m20=$_POST['m20'];
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
$str="update data set m16='$m16',m17='$m17',m18='$m18',m19='$m19',m20='$m20' where reg='$reg'";
$result = mysql_query($str,$con);
 if ($result) { 
 }
else
echo "problem";

 
 $str="select * from data where reg='$reg' ";

$result = mysql_query($str,$con);

while($row=mysql_fetch_array($result)){

$reg=$row['reg'];
$p1=$row['p1'];
$p2=$row['p2'];
$p3=$row['p3'];
$p4=$row['p4'];
$p5=$row['p5'];
$p6=$row['p6'];
$p7=$row['p7'];
$p8=$row['p8'];
$p9=$row['p9'];
$p10=$row['p10'];
$p11=$row['p11'];
$p12=$row['p12'];
$p13=$row['p13'];
$p14=$row['p14'];
$p15=$row['p15'];
$p16=$row['p16'];
$p17=$row['p17'];
$p18=$row['p18'];
$p19=$row['p19'];
$p20=$row['p20'];

$c1=$row['c1'];
$c2=$row['c2'];
$c3=$row['c3'];
$c4=$row['c4'];
$c5=$row['c5'];
$c6=$row['c6'];
$c7=$row['c7'];
$c8=$row['c8'];
$c9=$row['c9'];
$c10=$row['c10'];
$c11=$row['c11'];
$c12=$row['c12'];
$c13=$row['c13'];
$c14=$row['c14'];
$c15=$row['c15'];
$c16=$row['c16'];
$c17=$row['c17'];
$c18=$row['c18'];
$c19=$row['c19'];
$c20=$row['c20'];

$m1=$row['m1'];
$m2=$row['m2'];
$m3=$row['m3'];
$m4=$row['m4'];
$m5=$row['m5'];
$m6=$row['m6'];
$m7=$row['m7'];
$m8=$row['m8'];
$m9=$row['m9'];
$m10=$row['m10'];
$m11=$row['m11'];
$m12=$row['m12'];
$m13=$row['m13'];
$m14=$row['m14'];
$m15=$row['m15'];
$m16=$row['m16'];
$m17=$row['m17'];
$m18=$row['m18'];
$m19=$row['m19'];
$m20=$row['m20'];
}
$mark=0;

if ($p1=="d") {
	$mark=$mark+1;
	//echo "<br>$mark";
}
if ($p2=="c") {
	$mark=$mark+1;
	//echo "<br>$mark";
}
if ($p3=="d") {
	$mark=$mark+1;
	//echo "<br>$mark";

}
if ($p4=="b") {
	$mark=$mark+1;
	//echo "<br>$mark";
}
if ($p5=="a") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($p6=="a") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($p7=="a") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($p8=="b") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($p9=="d") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($p10=="d") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($p11=="c") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($p12=="b") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($p13=="b") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($p14=="a") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($p15=="a") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($p16=="b") {
	$mark=$mark+1;//echo "<br>$mark";
}

if ($p17=="c") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($p18=="a") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($p19=="b") {
	$mark=$mark+1;//echo "<br>$mark";
}

if ($p20=="d") {
	$mark=$mark+1;//echo "<br>$mark";
}


if ($c1=="c") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c2=="a") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c3=="d") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c4=="b") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c5=="d") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c6=="b") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c7=="b") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c8=="c") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c9=="d") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c10=="b") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c11=="c") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c12=="b") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c13=="a") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c14=="c") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c15=="d") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c16=="b") {
	$mark=$mark+1;//echo "<br>$mark";
}

if ($c17=="b") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c18=="a") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($c19=="d") {
	$mark=$mark+1;//echo "<br>$mark";
}

if ($c20=="d") {
	$mark=$mark+1;//echo "<br>$mark";
}


if ($m1=="d") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($m2=="d") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($m3=="b") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($m4=="c") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($m5=="d") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($m6=="b") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($m7=="d") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($m8=="d") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($m9 =="a") {
	$mark=$mark+1;//echo "<br>$mark";echo "<br>$mark";
}
if ($m10 =="a") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($m11 =="b") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($m12 =="a") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($m13 =="a") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($m14 =="c") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($m15 =="b") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($m16 =="c") {
	$mark=$mark+1;//echo "<br>$mark";
}

if ($m17 == "d") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($m18 == "d") {
	$mark=$mark+1;//echo "<br>$mark";
}
if ($m19 == "c") {
	$mark=$mark+1;//echo "<br>$mark";
}

if ($m20 == "c") {
	$mark=$mark+1;//echo "<br>$mark";
}
$total=$mark;
  ?>

  <?php
  $str="update data set mark='$total' where reg=$reg";
$result = mysql_query($str,$con);
 if ($result) { 
 echo "<center><br><br><br><h4>Reg.No:-$reg</h4> <b><h3> Your Score:-$mark</h3> </b>";}
else
echo "problem";

 
    ?>
	<form action="index.html"><h1><br>Thank You</h1>
			<center><br><br><input style="width:150px; height:40px; background-color:#66FF00; border-radius:10px; border:none; box-shadow:2px 2px 2px; font-size:20px;" type="submit" value="Press to home"></center>
</form>
	
</body>
</html>