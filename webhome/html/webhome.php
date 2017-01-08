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

<form>
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
<button type="button" onclick="parent.location='temp_room1.php'" style="width:250px; height:150px">
<font face="verdana" size="6" color="black">
<b>
TEMP_R1
</b>
</font>
</button>
<input type="text" value="Room 1 temperature (0x48): " disabled="disabled" />
<button type="button" onclick="parent.location='fanoff1.php'" style="width:80px">MANUAL FAN 1 OFF</button>
<button type="button" onclick="parent.location='fanauto1.php'" style="width:80px">AUTOMATIC FAN 1 ON/OFF</button>
<br /><br />


</form>

<?php
if (isset($_POST['LCD_TEST']))
{
system("sudo python ../lcd.py");
}
if (isset($_POST['TEMP_R1']))
{
system("sudo python ../tmp_0x48_0x90.py");
}
if (isset($_POST['HEAT1_ON']))
{
system("sudo python ../ledon1.py");
}
if (isset($_POST['HEAT1_OFF']))
{
system("sudo python ../ledoff1.py");
}
?>

</body>
</html>
