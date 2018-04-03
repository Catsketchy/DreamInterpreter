<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='style.css' rel='stylesheet' type ='text/css'/>
	
	<script src = "http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script>
				
		$(document).ready(function(){
		});
	
		function votes(num, subId) {
			var n= num*1;
			var vote=0;
			while(vote < n)
			{
				vote++;
				if(n==1)
					document.getElementById(subId).innerHTML = n  + ' vote </br>';
				else
					document.getElementById(subId).innerHTML = n  + ' votes </br>';
			}  
		}		
	</script>
</head>
<body>

	<form action="PHPstuff.php" method="POST">
		<fieldset>
			<label for="fname">First Name</label>
			<input type="text" name="fname" id="fname" required/>
			<label for="lname">Last Name</label>
			<input	type="text" name="lname" id="lname" required/> 
			<label for="email">Email Address</label> 
			<input type="email" name="email" id="email" required/> <br>
			<label for="fav">Favorite Jersey Mike's Sub?</label>
			<select name="fav" id="fav">
				<option value="v2">#2 Jersey Shore Favorite</option>
				<option value="v3">#3 The American Classic</option>
				<option value="v5">#5 The Super Sub</option>
				<option value="v6">#6 Famous Roast Beef and Provolone</option>
				<option value="v7">#7 Turkey Breast and Provolone</option>
				<option value="v8">#8 Club Sub</option>
				<option value="v9">#9 Club Supreme</option>
				<option value="v10">#10 Tuna Fish</option>
				<option value="v13">#13 The Original Italian</option>
				<option value="v14">#14 The Veggie</option>
			</select>
			<p>
				<button type="submit" name="submit"id="submit">Submit</button>
			</p>
		</fieldset>
	</form>
	<section>
		<h2>Results</h2>
		<?php include 'PHPstuff.php';?>
	
		<h3>#2 Jersey Shore Favorite</h3>
		<p class="emailResults">
			<?php
			$sql = "SELECT * FROM Reviews WHERE fav='v2';";
			$result = mysqli_query ( $conn, $sql );
			if ($result === FALSE) {
				$resultCheck = 0;
			} else {
				$resultCheck = mysqli_num_rows ( $result );
			}
			
			if ($resultCheck > 0) {
				while ( $row = mysqli_fetch_assoc ( $result ) ) {
					echo $row ['email'] . "<br>";
				}
				
			} else
				echo "Nobody loves me.<br>";
			?>
			<p id="s2">
				<script>votes(<?php echo $resultCheck?>, 's2');</script>
			</p>
		</p>
		
		<h3>#3 The American Classic</h3>
		<p class="emailResults">
			<?php
			$sql = "SELECT * FROM Reviews WHERE fav='v3';";
			$result = mysqli_query ( $conn, $sql );
			if ($result === FALSE) {
				$resultCheck = 0;
			} else {
				$resultCheck = mysqli_num_rows ( $result );
			}
			
			if ($resultCheck > 0) {
				while ( $row = mysqli_fetch_assoc ( $result ) ) {
					echo $row ['email'] . "<br>";
				}
			} else
				echo "Nobody loves me.<br>";
			?>
			<p id="s3">
				<script>votes(<?php echo $resultCheck?>, 's3');</script>
			</p>
		</p>
		
		<h3>#5 The Super Sub</h3>	
		<p class="emailResults">
			<?php
			$sql = "SELECT * FROM Reviews WHERE fav='v5';";
			$result = mysqli_query ( $conn, $sql );
			if ($result === FALSE) {
				$resultCheck = 0;
			} else {
				$resultCheck = mysqli_num_rows ( $result );
			}
			
			if ($resultCheck > 0) {
				while ( $row = mysqli_fetch_assoc ( $result ) ) {
					echo $row ['email'] . "<br>";
				}
			} else
				echo "Nobody loves me.<br>";
			?>
			<p id="s5">
				<script>votes(<?php echo $resultCheck?>, 's5');</script>
			</p>
		</p>
		
		<h3>#6 Famous Roast Beef and Provolone</h3>
		<p class="emailResults">
			<?php
			$sql = "SELECT * FROM Reviews WHERE fav='v6';";
			$result = mysqli_query ( $conn, $sql );
			if ($result === FALSE) {
				$resultCheck = 0;
			} else {
				$resultCheck = mysqli_num_rows ( $result );
			}
		
			if ($resultCheck > 0) {
				while ( $row = mysqli_fetch_assoc ( $result ) ) {
					echo $row ['email'] . "<br>";
				}
			} else
				echo "Nobody loves me.<br>";
			?>
			<p id="s6">
				<script>votes(<?php echo $resultCheck?>, 's6');</script>
			</p>
		</p>
		
		<h3>#7 Turkey Breast and Provolone</h3>
		<p class="emailResults">
			<?php
			$sql = "SELECT * FROM Reviews WHERE fav='v7';";
			$result = mysqli_query ( $conn, $sql );
			if ($result === FALSE) {
				$resultCheck = 0;
			} else {
				$resultCheck = mysqli_num_rows ( $result );
			}
			
			if ($resultCheck > 0) {
				while ( $row = mysqli_fetch_assoc ( $result ) ) {
					echo $row ['email'] . "<br>";
				}
			} else
				echo "Nobody loves me.<br>";
			?>
			<p id="s7">
				<script>votes(<?php echo $resultCheck?>, 's7');</script>
			</p>
		</p>
		<h3>#8 Club Sub</h3>
		<p class="emailResults">	
			<?php
			$sql = "SELECT * FROM Reviews WHERE fav='v8';";
			$result = mysqli_query ( $conn, $sql );
			if ($result === FALSE) {
				$resultCheck = 0;
			} else {
				$resultCheck = mysqli_num_rows ( $result );
			}
			
			if ($resultCheck > 0) {
				while ( $row = mysqli_fetch_assoc ( $result ) ) {
					echo $row ['email'] . "<br>";
				}
			} else
				echo "Nobody loves me.<br>";
			?>
			<p id="s8">
				<script>votes(<?php echo $resultCheck?>, 's8');</script>
			</p>
		</p>
		<h3>#9 Club Supreme</h3>
		<p class="emailResults">
			<?php
			$sql = "SELECT * FROM Reviews WHERE fav='v9';";
			$result = mysqli_query ( $conn, $sql );
			if ($result === FALSE) {
				$resultCheck = 0;
			} else {
				$resultCheck = mysqli_num_rows ( $result );
			}
			
			if ($resultCheck > 0) {
				while ( $row = mysqli_fetch_assoc ( $result ) ) {
					echo $row ['email'] . "<br>";
				}
			} else
				echo "Nobody loves me.<br>";
			?>
			<p id="s9">
				<script>votes(<?php echo $resultCheck?>, 's9');</script>
			</p>
		</p>
		
		<h3>#10 Tuna Fish</h3>
		<p class="emailResults">
			<?php
			$sql = "SELECT * FROM Reviews WHERE fav='v10';";
			$result = mysqli_query ( $conn, $sql );
			if ($result === FALSE) {
				$resultCheck = 0;
			} else {
				$resultCheck = mysqli_num_rows ( $result );
			}
			
			if ($resultCheck > 0) {
				while ( $row = mysqli_fetch_assoc ( $result ) ) {
					echo $row ['email'] . "<br>";
				}
			} else
				echo "Nobody loves me.<br>";
			?>
			<p id="s10">
				<script>votes(<?php echo $resultCheck?>, 's10');</script>
			</p>
		</p>
		
		<h3>#13 The Original Italian</h3>
		<p class="emailResults">
			<?php
			$sql = "SELECT * FROM Reviews WHERE fav='v13';";
			$result = mysqli_query ( $conn, $sql );
			if ($result === FALSE) {
				$resultCheck = 0;
			} else {
				$resultCheck = mysqli_num_rows ( $result );
			}
			
			if ($resultCheck > 0) {
				while ( $row = mysqli_fetch_assoc ( $result ) ) {
					echo $row ['email'] . "<br>";
				}
			} else
				echo "Nobody loves me.<br>";
			?>
			<p id="s13">
				<script>votes(<?php echo $resultCheck?>, 's13');</script>
			</p>
		</p>
		
		<h3>#14 The Veggie</h3>
		<p class="emailResults">
			<?php
			$sql = "SELECT * FROM Reviews WHERE fav='v14';";
			$result = mysqli_query ( $conn, $sql );
			if ($result === FALSE) {
				$resultCheck = 0;
			} 
			else {
				$resultCheck = mysqli_num_rows($result);
			}
			
			if ($resultCheck > 0) {
				while ( $row = mysqli_fetch_assoc ( $result ) ) {
					echo $row ['email'] . "<br>";
				}
			} else
				echo "Nobody loves me.<br>";
			?>
			<p id="s14">
				<script>votes(<?php echo $resultCheck?>, 's14');</script>
			</p>
		</p>
	</section>
</body>
</html>
