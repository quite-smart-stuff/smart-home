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
<button type="button" onclick="parent.location='lcd.php'" style="width:250px; height:150px">
<font face="verdana" size="6" color="black">
<b>
LCD TEST
</b>
</font>
</button>
<br /><br />

<!-- DOOR, to delete: SOLENOID: THE DOOR IS OPENED FOR 3 SECONDS -->
<font face="verdana" size="6" color="black">
<p align="left">
<b>
DOOR
</b>
</p>
</font>
<!-- DOOR functionality, to delete: SOLENOID: THE DOOR IS OPENED FOR 3 SECONDS -->
<button type="button" onclick="parent.location='door_open.php'" style="width:250px; height:150px">
<font face="verdana" size="6" color="black">
<b>
OPENING DOOR
</b>
</font>
</button>
<!-- THE DOOR IS OPENED FOR 3 SECONDS -->
<button type="button" onclick="parent.location='door_alarm_off.php'" style="width:120px">DEACTIVATED LOCK DOOR ALARM</button>
<button type="button" onclick="parent.location='door_alarm_on.php'" style="width:120px">ACTIVATED LOCK DOOR ALARM</button>
<input type="text" value="INDICATOR FOR UNAUTHORIZED PEOPLE" disabled="disabled" />
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
<button type="button" onclick="parent.location='ledon1.php'" style="width:250px; height:150px">
<font face="verdana" size="6" color="black">
<b>
HEAT1 ON
</b>
</font>
</button>
<button type="button" onclick="parent.location='ledoff1.php'" style="width:250px; height:150px">
<font face="verdana" size="6" color="black">
<b>
HEAT1 OFF
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
TEMP R1
</b>
</font>
</button>
<input type="text" value="Room 1 temperature (0x48): " disabled="disabled" />
<button type="button" onclick="parent.location='fanoff1.php'" style="width:80px">MANUAL FAN 1 OFF</button>
<button type="button" onclick="parent.location='fanauto1.php'" style="width:80px">AUTOMATIC FAN 1 ON/OFF</button>
<br /><br />

<!-- CLIMA/HEATER Room2, to delete: HEATER for room2 fan2 -->
<font face="verdana" size="6" color="black">
<p align="left">
<b>
ROOM 2
</b>
</p>
</font>
<!-- CLIMA/HEATER Room2 functionality -->
<button type="button" onclick="parent.location='ledon2.php'" style="width:250px; height:150px">
<font face="verdana" size="6" color="black">
<b>
HEAT2 ON
</b>
</font>
</button>
<button type="button" onclick="parent.location='ledoff2.php'" style="width:250px; height:150px">
<font face="verdana" size="6" color="black">
<b>
HEAT2 OFF
</b>
</font>
</button>
<br /><br />
<!-- TO REMOVE "TEMP R2" and TO STAY ONLY LABEL, AUTOMATIC RECEIVEING TEMPERATURE -->
<button type="button" onclick="parent.location='temp_room2.php'" style="width:250px; height:150px">
<font face="verdana" size="6" color="black">
<b>
TEMP R2
</b>
</font>
</button>
<input type="text" value="Room 2 temperature (0x49): " disabled="disabled" />
<button type="button" onclick="parent.location='fanoff2.php'" style="width:80px">MANUAL FAN 2 OFF</button>
<button type="button" onclick="parent.location='fanauto2.php'" style="width:80px">AUTOMATIC FAN ON/OFF</button>
<br /><br />

<!-- GARDEN - TEMPETARUTE and HUMIDITY -->
<font face="verdana" size="6" color="black">
<p align="left">
<b>
GARDEN
</b>
</p>
</font>
<!-- GARDEN functionality, TO REMOVE "TEMP HUM G" and TO STAY ONLY LABEL, AUTOMATIC RECEIVEING TEMPERATURE and HUMIDITY -->
<button type="button" onclick="parent.location='temp_hum_garden.php'" style="width:80px">TEMP HUM G</button>
<input type="text" value="Garden temperature: " disabled="disabled" />
<input type="text" value="Garden humidity: " disabled="disabled" />


<br /><br />
<br /><br />
<br /><br />
<br /><br />
<button type="button" onclick="parent.location='relayon.php'" style="width:80px; height:50px">RELAY ON</button>
<button type="button" onclick="parent.location='relayoff.php'" style="width:80px; height:50px">RELAY OFF</button>
<button type="button" onclick="parent.location='test.php'" style="width:80px; height:30px; width:85px">TEST</button>
<input type="text" value="test!!!" disabled="disabled" />




<br />
<p align="center"> Test page </p>
</form>
</body>
</html>
