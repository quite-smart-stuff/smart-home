<html>
<head>
<link rel="icon" type="image/png" href="icon.png">
<meta />
<title>
TEMPERATURE
</title>
</head>
<body bgcolor="#888888">

<form method="get" action="bbb.php">
 <input type="submit" value="TMP 0x48" name="TMP1">
 <button name="TMP2">TMP 0x49</button>
 <button name="Lamp1ON">Lamp 1 On</button>
 <button name="Lamp1OFF">Lamp 1 Off</button>
 <button name="Lamp2ON">Lamp 2 On</button>
 <button name="Lamp2OFF">Lamp 2 Off</button>
</form>

<?php 
if (isset($_GET['TMP1']))
{
system("sudo python ../tmp_0x48_0x90.py");
echo "Done!";
}
if (isset($_GET['TMP2']))
{
system("sudo python ../tmp_0x49_0x92.py");
}
if (isset($_GET['Lamp1ON']))
{
exec('sudo python /var/www/gpio/yellow_on.py');
}
if (isset($_GET['Lamp1OFF']))
{
exec('sudo python /var/www/gpio/yellow_off.py');
}
if (isset($_GET['Lamp2ON']))
{
exec('sudo python /var/www/gpio/green_on.py');
}
if (isset($_GET['Lamp2OFF']))
{
exec('sudo python /var/www/gpio/green_off.py');
}
?>

</body>
</html>
