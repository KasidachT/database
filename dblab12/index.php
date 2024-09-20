<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>Boat</title>
</head>
<body>
	<form method="POST" action="index.php">
		bid <input type="text" name="bid"><br>
		bname <input type="text" name="bname"><br>
		color <input type="text" name="color"><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<form method="POST" action="index.php">
		sid <input type="number" name="sid"><br>
		sname <input type="text" name="bname"><br>
		rating <input type="number" name="rating"><br>
		age <input type="number" name="age"><br>
	</form>
	<p>Sailors</p>
	<?php
		$servername = "localhost" ;
		$username = "db24_026" ;
		$password = "db24_026" ;
		$dbname = "db24_026_boat" ;
		$deleteid = $_GET["deleteid"];
		$conn = new mysqli($servername,$username,$password) ; //create conect 
		$conn->select_db($dbname) ; //conect
		$sql = "select * from sailors" ; //creat sql
		$result = $conn->query($sql) ;
	?>
	<table border = 1>
		<tr>
			<th>sid</th>
			<th>sname</th>
			<th>rating</th>
			<th>age</th>
			<th>delete</th>
		</tr>
		<?php
		while ($row = $result->fetch_assoc())
		{
			echo "<tr>
					<td>$row[sid]</td>
					<td>$row[sname]</td>
					<td>$row[rating]</td>
					<td>$row[age]</td>
					<td><a href = '?deleteid=$row[sid]'>delete</a></td>
				</tr>";
		}
			
			if (isset($deleteid)){
				$sql = "DELETE FROM sailors WHERE sid = $deleteid";
				$result = $conn->query($sql);
			}
		$conn->close();
		?>
	</table>>

</body>
</html>>



