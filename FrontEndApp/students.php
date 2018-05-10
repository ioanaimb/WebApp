<?php 
	$servername = "localhost";
	$username = "root";
	$password = "student";
	$dbname = "clujschool";
	//Create connection
	$conn = new mysqli($servername,$username,$password,$dbname);
	// Check connection
	if($conn->connect_error){
		die("Connection failed".$conn->connect_error);
	}
	$query = mysqli_query($conn, "select * from students");
 ?>
<table>
	<tr>
		<th>Id</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Address</th>
		<th>Age</th>
	</tr>
	<?php 
		while($row = mysqli_fetch_array($query)){
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['firstname']."</td>";
			echo "<td>".$row['lastname']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td>".$row['age']."</td>";
			echo "</tr>";
		}
		mysqli_close($conn);
	 ?>
</table> 