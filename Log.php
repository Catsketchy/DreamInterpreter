<?php
$servername = "localhost";
$username = "cljones";
$password = "password";

// create connection
$conn = mysqli_connect ( $servername, $username, $password );

// check for a connection
if (! $conn)
	die ( "Connection failed: " . mysqli_connect_error ());


//select the database
if(mysqli_select_db($conn, "dreamCatcher"))
{

	//query the database
	$sql = "SELECT  * FROM dreams";
	$result = mysqli_query($conn, $sql);

	echo "<h1>My Dreams</h1>\n";
	
	echo "<table> <thead> <tr> <td>Dream Name</td> <td>Interpretation</td> <td>Date</td> <td>Description</td></tr></thead>";
	echo "<tbody>";
	//process the results= fetch array
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr><td> $row[0]</td><td> $row[1]</td> <td>$row[2]</td> <td>$row[3]</td> </tr>";
	}
	echo "</tbody></table>";
}

?>