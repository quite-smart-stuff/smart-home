<?php
if (isset($_POST['temp1btn']))
{
    $temp1 = exec("sudo python ../tmp_0x48_0x90.py", $outputTMP2);
}
if (isset($_POST['TEMP2']))
{
    exec("python ../tmp_0x49_0x92.py", $outputTMP2);
    echo("<pre>");
    var_dump($outputTMP);
    echo("<pre>");
}
?>
<html>
<head>
    <link rel="icon" type="image/png" href="rpi-icon.png">
    <meta/>
    <title>
        Control Home System
    </title>
</head>
<body background="rpi-back.png"> <!-- bgcolor="#888888" -->
<form action="webhome.php" method="post">
    <font face="verdana" size="6" color="black">
        <p align="center">
            <b>
                Control Home System
            </b>
        </p>
    </font>

    <!-- LABEL DEMO TEST -->
    <font face="verdana" size="5" color="black">
        <p align="left">
            <b>
                DEMO TEST
            </b>
        </p>
    </font>
    <!-- BUTTON DEMO TEST functionality: test all devices -->
    <button type="button" onclick="parent.location='demo_test.php'" style="width:170px; height:90px">
        <font face="verdana" size="4" color="black">
            <b>
                DEMO
            </b>
        </font>
    </button>
    <br/><br/>

    <!-- LABEL DOOR -->
    <font face="verdana" size="5" color="black">
        <p align="left">
            <b>
                DOOR
            </b>
        </p>
    </font>
    <!-- BUTTON DOOR functionality: Solenoid is avtivated, the door will be opened for 3 seconds -->
    <button type="button" onclick="parent.location='door_open.php'" style="width:170px; height:90px">
        <font face="verdana" size="4" color="black">
            <b>
                OPEN
            </b>
        </font>
    </button>
    <!-- BUTTON DOOR ALARM DEACTIVATED -->
    <button type="button" onclick="parent.location='door_alarm_off.php'" style="width:170px; height:90px">
        <font face="verdana" size="4" color="black">
            <b>
                DEACT_ALRM
            </b>
        </font>
    </button>
    <!-- BUTTON DOOR ALARM ACTIVATED -->
    <button type="button" onclick="parent.location='door_alarm_on.php'" style="width:170px; height:90px">
        <font face="verdana" size="4" color="black">
            <b>
                ACT_ALRM</button>
    </b>
    </font>
    <br/><br/>

    <!-- LABEL ROOM 1 -->
    <font face="verdana" size="5" color="black">
        <p align="left">
            <b>
                ROOM 1
            </b>
        </p>
    </font>
    <!-- BUTTON TEMPERATURE ROOM1 functionality: show temperature -->
    <button type="submit" name="temp1btn" style="width:170px; height:90px">
        <!-- <button type="submit" name="TEMP1" style="width:170px; height:90px"> -->
        <font face="verdana" size="4" color="black">
            <b>
                TEMP1
            </b>
        </font>
    </button>
    <!-- TEXT BOX TEMPERATURE 1 -->
<!--  <input type="text" name="temp1" value=" TEMP ROOM 1: <?php if (isset($temp1)) {echo($temp1);} ?>" disabled="disabled"/> -->
<!-- <span id="temp1"><?php if (isset($temp1)) {echo($temp1);} ?></span> -->
    <input type="text" name="temp1" value=" TEMP ROOM 1: <?php echo($temp1); ?>" disabled="disabled"/>

    <br/><br/>
    <!-- BUTTON CLIMA/HEATER ROOM 1 functionality: Turn on heater -->
    <button type="button" onclick="parent.location='heat1on.php'" style="width:170px; height:90px">te
        <font face="verdana" size="4" color="black">
            <b>
                HEAT1_ON
            </b>
        </font>
    </button>
    <!-- BUTTON CLIMA/HEATER ROOM 1 functionality: Turn off heater -->
    <button type="button" onclick="parent.location='heat1off.php'" style="width:170px; height:90px">
        <font face="verdana" size="4" color="black">
            <b>
                HEAT1_OFF
            </b>
        </font>
    </button>
    <br/><br/>
    <!-- BUTTON CLIMA/FAN ROOM 1 functionality: Turn on fan -->
    <button type="button" onclick="parent.location='fan1on.php'" style="width:170px; height:90px">
        <font face="verdana" size="4" color="black">
            <b>
                FAN1_ON
            </b>
        </font>
    </button>
    <!-- BUTTON CLIMA/FAN ROOM 1 functionality: Turn off fan -->
    <button type="button" onclick="parent.location='fan1off.php'" style="width:170px; height:90px">
        <font face="verdana" size="4" color="black">
            <b>
                FAN1_OFF
            </b>
        </font>
    </button>
    <br/><br/>

    <!-- LABEL ROOM 2 -->
    <font face="verdana" size="5" color="black">
        <p align="left">
            <b>
                ROOM 2
            </b>
        </p>
    </font>
    <!-- BUTTON TEMPERATURE ROOM2 functionality: show temperature -->
    <button type="button" onclick="parent.location='temproom2.php'" style="width:170px; height:90px">
        <!-- <button type="submit" name="TEMP2" style="width:170px; height:90px"> -->
        <font face="verdana" size="4" color="black">
            <b>
                TEMP2
            </b>
        </font>
    </button>
    <!-- TEXT BOX TEMPERATURE 2 -->
    <input type="text" value="TEMP ROOM 2" disabled="disabled"/>
    <br/><br/>
    <!-- BUTTON CLIMA/HEATER ROOM 2 functionality: Turn on heater -->
    <button type="button" onclick="parent.location='heat2on.php'" style="width:170px; height:90px">
        <font face="verdana" size="4" color="black">
            <b>
                HEAT2_ON
            </b>
        </font>
    </button>
    <!-- BUTTON CLIMA/HEATER ROOM 2 functionality: Turn off heater -->
    <button type="button" onclick="parent.location='heat2off.php'" style="width:170px; height:90px">
        <font face="verdana" size="4" color="black">
            <b>
                HEAT2_OFF
            </b>
        </font>
    </button>
    <br/><br/>
    <!-- BUTTON CLIMA/FAN ROOM 2 functionality: Turn on fan -->
    <button type="button" onclick="parent.location='fan2on.php'" style="width:170px; height:90px">
        <font face="verdana" size="4" color="black">
            <b>
                FAN2_ON
            </b>
        </font>
    </button>
    <!-- BUTTON CLIMA/FAN ROOM 2 functionality: Turn off fan -->
    <button type="button" onclick="parent.location='fan2off.php'" style="width:170px; height:90px">
        <font face="verdana" size="4" color="black">
            <b>
                FAN2_OFF
            </b>
        </font>
    </button>
    <br/><br/>

    <!-- LABEL GARDEN  -->
    <font face="verdana" size="5" color="black">
        <p align="left">
            <b>
                GARDEN
            </b>
        </p>
    </font>
    <!-- BUTTON GARDEN functionality: show temperature and humidity -->
    <button type="button" onclick="parent.location='temp_hum_garden.php'" style="width:170px; height:90px">
        <font face="verdana" size="4" color="black">
            <b>
                TEMP GAR
            </b>
        </font>
    </button>
</form>

</body>
</html>
