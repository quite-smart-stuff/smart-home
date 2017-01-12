<html>
	<head>
		<title>
			have value from python script 
		</title>
	</head>
	<body>
	
		<form action="index.php" method="post" >
			
			<button type="submit" name="TEMP_Read">Get it</button>
			<button type="submit" name="stop"> stop </button>

		</form>
	</body>
</html>
<?php
	if (isset($_POST['TEMP_Read']))
	{	
		exec('python sensor.py', $outputTMP);
		echo("<pre>");
		var_dump($outputTMP);
		echo("<pre>");
	}

	elseif(isset($_POST['stop']))
	{	
		echo "stoped";
	}
?>