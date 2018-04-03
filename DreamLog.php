<!DOCTYPE html>

<?php 

if(isset($_POST['Delete']))
{
	$servername = "localhost";
	$username = "cljones";
	$password = "password";
		
	// create connection
	$conn = mysqli_connect ( $servername, $username, $password );
		
	$sql = "SELECT * FROM username ORDER BY UserNameID DESC";
	
	$query = mysql_query($sql) or die(mysql_error());
	
	if (isset($_GET['UserNameID'])) {
	
		$id = mysql_real_escape_string($_GET['UserNameID']);
		$sql_delete = "DELETE FROM users WHERE id = '{$UserNameID}'";
		mysql_query($sql_delete) or die(mysql_error());
	
		header("location: data_display.php");
		exit();
	
	}
	// check for a connection
	if (! $conn)
		die ( "Connection failed: " . mysqli_connect_error ());

		if (mysqli_select_db ( $conn, "dreamCatcher" ))
		{
			// sql to call table
			$sql = "TRUNCATE dreams;";

			if ($conn->query($sql) === TRUE)
			{
				echo "<p>Table dreams deleted successfully</p>";
			}
			else
			{
				echo "<p>Error deleting table: " . $conn->error . "</p>";
			}	
		}
		$conn->close();
}
?>
<html>
<head>
	<title>Dream Interpreter: Dream Log</title>	
	<link href="dream.css" rel="stylesheet" type="text/css"/>
	<style>
		td {
			width: 200px;
		}
	</style>
</head>

<body style="background-image:url(grayClouds.jpg); background-repeat: no-repeat; background-size: cover;" onload="checkCookie()">	
	<header>
		<nav class="horizontal">
			<ul>
				<a id ="logo" href="DreamInt.php">DC</a>
				<a href="DreamLog.php">View your dream log</a>
			</ul>
		</nav>
	</header>

	
	
	<?php include "Log.php"?>
	<form action="">
		<input type="Submit" id="Delete" class="sub" name="Submit" value="Delete Log" style="clear: left" />		
	</form>

</body>
</html>