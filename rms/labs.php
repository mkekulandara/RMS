<!DOCTYPE html>
<?php include 'navigationbar.php';?>
<?php include 'connectdb.php';?>
<?php include 'resource_reservation.php';?>

<html>
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href = "C:\xampp\htdocs\dev\css\bootstrap.min.css" rel = "stylesheet">
		<link href = "css/styles.css" rel = "stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<script>
			function reserve(obj){
				var x=obj.id;
				document.getElementById("demo").value = x;
			}
		</script>
	</head>
	<body>
		<br><br><br>
		<div class="container">
			<br>
			<ul class="nav nav-tabs">
			  <li class="active"><a href="#software" data-toggle="tab" aria-expanded="false">Software</a></li>
			  <li class=""><a href="#network" data-toggle="tab" aria-expanded="false">Network</a></li>
			  <li class=""><a href="#hardware" data-toggle="tab" aria-expanded="false">Hardware</a></li>
			  <li class=""><a href="#other" data-toggle="tab" aria-expanded="false">Other</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
			  <div class="tab-pane fade active in" id="software">
				<br>
				<div class="row">
				  <?php
					$sql = "SELECT * FROM resorce WHERE resource_type = 'Labs' AND sub_type = 'Software'";
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
														<td>Lab Type</td>
														<td>: ' .$row["resource_type"]." ". $row["resource_name"] . '</td>
													</tr>
													<tr>
														<td>Capacity</td>
														<td>: ' . $row["capacity"] . '</td>
													</tr>
													<tr>
														<td>Multimedia Projecter</td>
														<td>: ' . $row["multimedia"] . '</td>
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
						echo "No Resource";
					}
				?>
				  
				</div>
			  </div>
			  <div class="tab-pane fade" id="network">
				<br>
				<div class="row">
				  <?php
					$sql = "SELECT * FROM resorce WHERE resource_type = 'Labs' AND sub_type = 'Network'";
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
														<td>Lab Type</td>
														<td>: ' .$row["resource_type"]." ". $row["resource_name"] . '</td>
													</tr>
													<tr>
														<td>Capacity</td>
														<td>: ' . $row["capacity"] . '</td>
													</tr>
													<tr>
														<td>Multimedia Projecter</td>
														<td>: ' . $row["multimedia"] . '</td>
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
						echo "No Resource";
					}
				?>
				</div>
			  </div>
			  <div class="tab-pane fade" id="hardware">
				<br>
				<div class="row">
				  <?php
					$sql = "SELECT * FROM resorce WHERE resource_type = 'Labs' AND sub_type = 'Hardware'";
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
														<td>Lab Type</td>
														<td>: ' .$row["resource_type"]." ". $row["resource_name"] . '</td>
													</tr>
													<tr>
														<td>Capacity</td>
														<td>: ' . $row["capacity"] . '</td>
													</tr>
													<tr>
														<td>Multimedia Projecter</td>
														<td>: ' . $row["multimedia"] . '</td>
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
						echo "No Resource";
					}
				?>
				</div>
			  </div>
			  <div class="tab-pane fade" id="other">
				<br>
				<div class="row">
				  <?php
					$sql = "SELECT * FROM resorce WHERE resource_type = 'Labs' AND sub_type = 'Other'";
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
														<td>Lab Type</td>
														<td>: ' .$row["resource_type"]." ". $row["resource_name"] . '</td>
													</tr>
													<tr>
														<td>Capacity</td>
														<td>: ' . $row["capacity"] . '</td>
													</tr>
													<tr>
														<td>Multimedia Projecter</td>
														<td>: ' . $row["multimedia"] . '</td>
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
						echo "No Resource";
					}
				?>
				</div>
			  </div>
			</div>
		</div>
		<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src = "js/bootstrap.js"></script>
    </body>
</html>