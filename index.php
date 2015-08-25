<?php

include 'config.php';

$q = mysqli_query($db, 'SELECT * FROM sinhvien');


?>


<html>
<head>
	<title>Home</title>
	<style type="text/css">
		td {
			padding: 3px 10px;
		}
	</style>
</head>
<body>
	<table border="1">
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Email</td>
			<td>Address</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>	

		<?php 

			while ($row = mysqli_fetch_assoc($q)) {
				echo '<tr>';
				echo '<td>'.$row['id'].'</td>';
				echo '<td>'.$row['fname'].' '.$row['lname'].'</td>';
				echo '<td>'.$row['email'].'</td>';
				echo '<td>'.$row['address'].'</td>';
				echo '<td><a href="edit.php?id='.$row['id'].'">Edit</a></td>';
				echo '<td><a href="delete.php?id='.$row['id'].'">Delete</a></td>';
				echo '</tr>';
			}


		 ?>
	</table>
</body>
</html>



