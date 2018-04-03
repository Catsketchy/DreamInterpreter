<!DOCTYPE html>
<html>
<head>
<title>A Varible scope example</title>
</head>
<body>

<?php
	$a = 5;
	
	echo "<p>The varible contains the value: $a </p>";
	
	myFunction();
	myFunction();
	myFunction();
	
	function myFunction()
	{
		static $count = 0;
		$b = 10;
		
		$count++;
		echo "<p>Inside myFunction, b contains the value $b</p>";
		echo "<p>Insife myFunction, a contains the value: $GLOBALS[a]</p>";
		echo "<p>I have visited myFunction $count time(s).</p>";
		
		//gloabls is an assosiative array
	}
?> 
</body>
</html>


