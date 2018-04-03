<?php
//Create varibles
$servername ="localhost";
$username ="cs230";
$password ="yellow1";

//create connection
$conn = mysqli_connect($servername, $username, $password);

//check connection
if(!$conn)
{
	die("Connection failed: " .mysqli_connect_error());
}


//create database
$sql = "CREATE DATABASE IF NOT EXISTS myDB";
//specify the connection and the database
if(mysqli_query($conn, $sql))
{//if creating it works
	//select the database
	if(mysqli_select_db($conn, "myDB"))
	{
		//create the table 
		$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			firstname VARCHAR(30) NOT NULL,
			lastname VARCHAR(30) NOT NULL, 
			email VARCHAR(50))";
		mysqli_query($conn, $sql);
		
		//add record to the table
		$sql = "INSERT INTO MyGuests(firstname, lastname, email) VALUES
		('Marina', 'Fanous', 'fanous_marina@yahoo.com')";
		mysqli_query($conn, $sql);
		
		$sql = "INSERT INTO MyGuests(firstname, lastname, email) VALUES
		('Danny', 'Zaki', 'danny.zaki@yahoo.com')";
		mysqli_query($conn, $sql);
		
		$sql = "INSERT INTO MyGuests(firstname, lastname, email) VALUES
		('Peter', 'Riad', 'priad@yahoo.com')";
		mysqli_query($conn, $sql);
		
		//query the database
		$sql = "SELECT  * FROM MyGuests";
		$result = myqli_query($conn, $sql);
		
		
		echo "<h1>My Guests</h1>\n";
		echo "<ul>\n";
				
		//process the results= fetch array
		while($row = sqli_fetch_array($result))
		{
			echo "<li> $row[1] $row[2]</li>\n";
			
		}
		echo "</ul>\n";	
	}
	else
	{	//display error message if fails
		die("Error selecting database: " . mysqli_error($conn));
	}
	
}
else 
{	//if it doesnt work, then display these messages
	die("Error creating database: " . mysqli_error($conn));
} 

?>
