<?php include 'navigationbar.php';?>
<?php include 'connectdb.php';?>
<?php include 'resource_reservation.php';?>

<!DOCTYPE html>
<html>
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href = "C:\xampp\htdocs\dev\css\bootstrap.min.css" rel = "stylesheet">
        <link href = "C:\xampp\htdocs\dev\css\styles.css" rel = "stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<script>
			function reserve(obj){
				var x=obj.id;
				document.getElementById("demo").value = x;
			}
		</script>
	</head>
	<body>
		<br>
		<div class="container">
			<br>
			<br>
			<br>
			<div class="row">
				<?php
					$sql = "SELECT * FROM resorce WHERE resource_type = 'Lecture Halls'";
					$result = $conn->query($sql);
				    if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo 	'<div class="col-lg-3 col-md-6 col-sm-6">
									<div class="thumbnail">
										<div class="caption">
											<h3>' . $row["resource_id"] . '</h3>
											<p>
												<table>
													<tr>
														<td>Capacity</td>
														<td>: ' . $row["capacity"] . '</td>
													</tr>
													<tr>
														<td>OHP</td>
														<td>: ' . $row["ohp"] . '</td>
													</tr>
													<tr>
														<td>Multimedia Projecter</td>
														<td>: ' . $row["multimedia"] . '</td>
													</tr>
													<tr>
														<td>Sound System</td>
														<td>: ' . $row["sound_system"] . '</td>
													</tr>
													<tr>
														<td>Wifi</td>
														<td>: ' . $row["wifi"] . '</td>
													</tr>
												</table>
											</p>
											<p>
												<a href="#reserve" data-toggle="modal" id="' . $row["id"] . '" class="btn btn-primary" onclick="reserve(this);" role="button">Reserve</a>
											</p>
										 </div>
									</div>
								</div>' ;
					}
					}
					else {
						echo "0 results";
					}
				?>
			</div>
			
		</div>
		<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src = "js/bootstrap.js"></script>
    </body>
</html>
