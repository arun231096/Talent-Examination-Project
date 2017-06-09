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
?>

<?php echo "<b>Reg.No:-$reg</b>";  ?>
<center><h2>PHYSICS</h2> </center>
<form method="post" action="phy2.php">
<table id="t1" border="1" cellpadding="0" cellspacing="0" align="center">

<tr><td><img src="p6/p1.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT1.jpg"></td>
<td align="center" style="width:100px;">a)<input type="radio" required name="p1" value="a"><br><br>b)<input type="radio" required name="p1" value="b"><br><br>c)<input type="radio" required name="p1" value="c"><br><br>d)<input type="radio" required name="p1" value="d"></td></tr>


<tr><td><img src="p6/p2.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT2.jpg"></td>
<td align="center" style="width:100px;">a)<input type="radio" required name="p2" value="a"><br><br>b)<input type="radio" required name="p2" value="b"><br><br>c)<input type="radio" required name="p2" value="c"><br><br>d)<input type="radio" required name="p2" value="d"></td></tr>

<tr><td><img src="p6/p3.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT3.jpg"></td>
<td align="center" style="width:100px;">a)<input type="radio" required name="p3" value="a"><br>b)<input type="radio" required name="p3" value="b"><br>c)<input type="radio" required name="p3" value="c"><br>d)<input type="radio" required name="p3" value="d"></td></tr>

<tr><td><img src="p6/p4.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT4.jpg"></td>
<td align="center" style="width:100px;">a)<input type="radio" required name="p4" value="a"><br>b)<input type="radio" required name="p4" value="b"><br>c)<input type="radio" required name="p4" value="c"><br>d)<input type="radio" required name="p4" value="d"></td></tr>

<tr><td><img src="p6/p5.jpg"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="p6/pT5.jpg"></td>
<td align="center" style="width:100px;">a)<input type="radio" required name="p5" value="a"><br>b)<input type="radio" required name="p5" value="b"><br>c)<input type="radio" required name="p5" value="c"><br>d)<input type="radio" required name="p5" value="d"></td></tr>

</table>
<input type="hidden" name="reg" value="<?php echo $reg; ?>">
<center><br><input type="submit" style="width:150px; height:40px; background-color:#66FF00; border-radius:10px; border:none; box-shadow:2px 2px 2px; font-size:20px;" name="NEXT" value="NEXT"></center>
</form>

</body>
</html>