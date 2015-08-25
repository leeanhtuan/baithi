<?php 

	include 'config.php';

	$id = $_GET['id'];




 ?>



 <html>
 <head>
 	<title>Edit</title>
 </head>
 <body>

 	<?php 

 		$q = "SELECT * FROM FROM sinhvien WHERE id = $id";

 		while ($row = mysqli_fetch_assoc(mysqli_query($db, $q))) { ?>


 	 ?>

 		Fname:
 		Lname:
 		Email"
 		Add:

 		<?php }; ?>
 </body>
 </html>