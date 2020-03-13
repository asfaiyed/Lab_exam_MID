
<html>
<head>
	<title>Form</title>
</head>
<body>
	
	<table border='1'>
	<tr>
		<td>Name</td>
		<td>PASSWORD</td>
		<td>User Type</td>
	</tr>
	
	<?php
	$file=fopen("aaa.txt","r");
	while(!feof($file))
		{
			$studentdatastring=fgets($file);
			if(!$studentdatastring) continue;
			
			$studentdata=json_decode($studentdatastring,true);
			echo "<tr><td>".$studentdata['name']."</td>"."<td>".$studentdata['password']."</td>"."<td>".$studentdata['utype']."</td></tr>";
			
			
		}
	fclose($file);
	?>
	
	</table>
	<a href="Home.php">Back</a>
	
	
	
	
</body>
</html>