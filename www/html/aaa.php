<html>
<head>
<link rel="icon" type="image/png" href="icon.png">
<meta />
<title>
TEMPERATURE
</title>
</head>
<body bgcolor="#888888">
<font face="verdana" size="6" color="black">
<p align="center">
<b>
TEMPERATURE
</b>
</p>
</font>

<font face="verdana" size="5" color="black">
<b>
TEST TEMPERATURE
</b>
</font>
<br /><br />

<form method="get" action="aaa.php">
<input type="submit" value="SHOW TEMP" name="SHOW">
</form>

<!-- PYTHON SCRIPT EXECUTING -->
<?php
system("sudo python ../tmp_0x48_0x90.py");
?>

<!-- SHELL SCRIPT EXECUTING
<?php
    $output = `/usr/sbin/i2cget -y 1 0x48 0 w`;
    $msb = hexdec(substr($output, 4, 2));
    $lsb = hexdec(substr($output, 2, 2));
    $tempF = ((($msb << 8) | $lsb) >> 4) * 0.0625 * 1.8 + 32;
    echo "Temp: $tempF&deg;F";
?>
-->

</body>
</html>
