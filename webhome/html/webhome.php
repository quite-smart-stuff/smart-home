<html>
<head>
<link rel="icon" type="image/png" href="icon.png">
<meta />
<title>
Control Home System
</title>
</head>
<body bgcolor="#888888">
<font face="verdana" size="6" color="black">
<p align="center">
<b>
Control Home System
</b>
</p>
</font>

<form method="post">
<!-- TEST for LCD Display -->
<button type="button" style="width:250px; height:150px">
<font face="verdana" size="6" color="black">
<b>
LCD_TEST
</b>
</font>
</button>
<br /><br />

<!-- CLIMA/HEATER Room1 -->
<font face="verdana" size="6" color="black">
<p align="left">
<b>
ROOM 1
</b>
</p>
</font>
<!-- CLIMA/HEATER Room1 functionality -->
<button type="button" style="width:250px; height:150px">
<font face="verdana" size="6" color="black">
<b>
HEAT1_ON
</b>
</font>
</button>
<button type="button" style="width:250px; height:150px">
<font face="verdana" size="6" color="black">
<b>
HEAT1_OFF
</b>
</font>
</button>
<!-- LED BLINK TEST
<button type="button" onclick="parent.location='ledblink.php'" style="width:250px; height:150px">
<font face="verdana" size="6" color="black">
<b>
HEAT1 BLINK
</b>
</font>
</button>
-->
<br /><br />
<!-- TO REMOVE "TEMP R1" and TO STAY ONLY LABEL, AUTOMATIC RECEIVEING TEMPERATURE -->
<button type="submit" name="TEMP_Read" style="width:250px; height:150px">
<font face="verdana" size="6" color="black">
<b>
TEMP_Read
</b>
</font>
</button>

</form>

<?php
if (isset($_POST['LCD_TEST']))
{
system("sudo python ../lcd.py");
}
if (isset($_POST['TEMP_Read']))
{
exec("sudo python ../tmp_0x48_0x90.py");
echo " it is working";
var_dump(exec("sudo python ../tmp_0x48_0x90.py"));
}
if (isset($_POST['HEAT1_ON']))
{
exec("sudo python ../ledon1.py");
}
if (isset($_POST['HEAT1_OFF']))
{
exec("sudo python ../ledoff1.py");
}
?>

</body>
</html>
