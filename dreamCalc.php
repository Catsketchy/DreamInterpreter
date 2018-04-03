<?php
$servername = "localhost";
$username = "cljones";
$password = "password";

// create connection
$conn = mysqli_connect ( $servername, $username, $password );

// check for a connection
if (! $conn)
	die ( "Connection failed: " . mysqli_connect_error ());

// create database dreamCatcher to hold all dream info
$sql = "CREATE DATABASE IF NOT EXISTS dreamCatcher";

if (mysqli_query ($conn, $sql))
{
	if (mysqli_select_db ($conn, "dreamCatcher"))
	{
		// sql to create table
		$sql = "CREATE TABLE IF NOT EXISTS dreams (
Name VARCHAR(30) PRIMARY KEY,
interpretation VARCHAR(1000),
dDate VARCHAR(100),
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
				
		$sqlrows = "INSERT INTO dreams (Name, interpretation, dDate, description) VALUES('" . $dName . "','" . $result . "','" . $dDate . "','" . $description . "');";
		if (mysqli_query ($conn, $sqlrows))
		{
			echo "<p>You have logged your dream! Look at your dream log to see other dreams you have recorded this week!</p>";
			header("Location: DreamLog.php");
			exit;
		}
	}
}
$conn->close();
?>