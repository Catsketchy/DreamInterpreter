<?php

//Create varibles

$servername ="localhost";

$username ="root";

$password ="";


//create connection

$conn = mysqli_connect($servername, $username, $password);


//check connection

if(!$conn)

{
	die("Connection failed: " .mysqli_connect_error());	
}



//create database

$sql = "CREATE DATABASE IF NOT EXISTS JMikesFavorites";

//specify the connection and the database

if(mysqli_query($conn, $sql))

{	//if creating it works

//select the database

if(mysqli_select_db($conn, "JMikesFavorites"))

{
	
	//create the table
	
	$sql = "CREATE TABLE IF NOT EXISTS Reviews (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY not null,
			fname VARCHAR(30) NOT NULL,
			lname VARCHAR(30) NOT NULL,
			email VARCHAR(50),
			fav VARCHAR(3))";
	
	mysqli_query($conn, $sql);
	
	
	
	if(isset($_POST['submit']))
	{
		
			$first=$_POST['fname'];
		
			$last=$_POST['lname'];
		
			$email=$_POST['email'];
		
			$fav=$_POST['fav'];
		
		$sql2 = "INSERT INTO Reviews (fname, lname, email, fav) VALUES('" . $first . "', '" . $last . "','" . $email . "','" . $fav . "');";
				
		if(mysqli_query($conn, $sql2))
		{
			header("Location: main.php");
			exit;
		}
		else
			echo "insertion not working";
	}
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