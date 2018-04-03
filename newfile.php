<?php
$servername = "localhost";
$username = "cljones";
$password = "password";

// create connection
$conn = mysqli_connect ( $servername, $username, $password );

// check for a connection
if (! $conn)
	die ( "Connection failed: " . mysqli_connect_error ());

$sql = "CREATE DATABASE IF NOT EXISTS dtbs";

if (mysqli_query ($conn, $sql))
{
	if (mysqli_select_db ( $conn, "dtbs" ))
	{
		// sql to create table
		$sql = "CREATE TABLE IF NOT EXISTS formTable (
name VARCHAR(30) PRIMARY KEY,
stuff VARCHAR(1000),
date VARCHAR(100),
description VARCHAR(1000)
)";

		if ($conn->query($sql) === TRUE) 
		{
		   // echo "<p>Table dreams created successfully</p>";
		} 
		else 
		{
    		echo "<p>Error creating table: " . $conn->error . "</p>";
		}
		
		// user input and results
		$dName = $_POST ["dName"];
		$result = $_POST ['resultP'];
		$dDate = $_POST ['ddate'];
		$description = $_POST ["desc"];
				
		$sqlrows = "INSERT INTO dreams (name, stuff, date, description) VALUES('" . $dName . "','" . $result . "','" . $dDate . "','" . $description . "');";
		if (mysqli_query ($conn, $sqlrows))
		{
			echo "<p>You have logged your dream! Look at your dream log to see otehr dreams you have recorded this week!</p>";
			header("Location: DreamLog.php");
				
			exit;
		}
	}
}
$conn->close();
?>