<html>
<head>
<link rel="icon" type="image/png" href="icon.png">
<meta />
<title>
Control Home System
</title>
</head>
<body bgcolor="#888888">
<p align="center"><h1> Control Home System </h1></p>
<form>

<button type="button" onclick="parent.location='ledon1.php'" style="width:80px; height:50px">LED1 ON</button>
<button type="button" onclick="parent.location='ledoff1.php'" style="width:80px; height:50px">LED1 OFF</button>
<br /><br />
<button type="button" onclick="parent.location='ledon2.php'" style="width:80px; height:50px">LED2 ON</button>
<button type="button" onclick="parent.location='ledoff2.php'" style="width:80px; height:50px">LED2 OFF</button>
<br /><br />
<button type="button" onclick="parent.location='ledblink.php'" style="width:80px; height:50px">LED BLINK</button>

<br /><br />
<button type="button" onclick="parent.location='lcd.php'" style="width:80px; height:50px">LCD TEST</button>

<br /><br />
<!-- SOLENOID: THE DOOR IS OPENED FOR 3 SECONDS -->
<button type="button" onclick="parent.location='door_open.php'" style="width:120px">OPENING DOOR</button>
<!-- THE DOOR IS OPENED FOR 3 SECONDS -->
<button type="button" onclick="parent.location='door_alarm_off.php'" style="width:120px">DEACTIVATED LOCK DOOR ALARM</button>
<button type="button" onclick="parent.location='door_alarm_on.php'" style="width:120px">ACTIVATED LOCK DOOR ALARM</button>
<input type="text" value="INDICATOR FOR UNAUTHORIZED PEOPLE" disabled="disabled" />

<br /><br />
<!-- TO REMOVE "TEMP R1" and TO STAY ONLY LABEL, AUTOMATIC RECEIVEING TEMPERATURE -->
<button type="button" onclick="parent.location='temp_room1.php'" style="width:80px">TEMP R1</button>
<input type="text" value="Room 1 temperature (0x48): " disabled="disabled" />
<button type="button" onclick="parent.location='fanoff1.php'" style="width:80px">MANUAL FAN 1 OFF</button>
<button type="button" onclick="parent.location='fanauto1.php'" style="width:80px">AUTOMATIC FAN 1 ON/OFF</button>
<br /><br />
<!-- TO REMOVE "TEMP R2" and TO STAY ONLY LABEL, AUTOMATIC RECEIVEING TEMPERATURE -->
<button type="button" onclick="parent.location='temp_room2.php'" style="width:80px">TEMP R2</button>
<input type="text" value="Room 2 temperature (0x49): " disabled="disabled" />
<button type="button" onclick="parent.location='fanoff2.php'" style="width:80px">MANUAL FAN 2 OFF</button>
<button type="button" onclick="parent.location='fanauto2.php'" style="width:80px">AUTOMATIC FAN ON/OFF</button>

<br /><br />
<!-- TO REMOVE "TEMP HUM G" and TO STAY ONLY LABEL, AUTOMATIC RECEIVEING TEMPERATURE and HUMIDITY -->
<button type="button" onclick="parent.location='temp_hum_garden.php'" style="width:80px">TEMP HUM G</button>
<input type="text" value="Garden temperature: " disabled="disabled" />
<input type="text" value="Garden humidity: " disabled="disabled" />


<br / br />
<br / br />
<br / br />
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
