<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
			<script>
			function reserve(obj){
				var x=obj.id;
				document.getElementById("demo").value = x;
				document.getElementById("demo2").value = x;
			}
		</script>

</head>
<body>
<?php
include "navigationbar.php";
include 'connectdb.php';
include 'session.php';

				$user_id=$login_user_id;
				 
				$sql = "SELECT e.event_name, e.description, e.date, e.time_slot, r.resource_name, u.first_name, u.email FROM bookings b
						INNER JOIN event e ON e.id = b.event_id
						INNER JOIN hall_admins h ON h.resource_id = b.resource_id
						INNER JOIN user u ON u.id = h.user_id
						INNER JOIN resorce r ON r.id = h.resource_id
						WHERE h.user_id = 3";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
						echo '<br><br><br><br><table class="table table-striped table-hover ">
							  <thead>
								<tr class="info">
									<th>Event Name</th>
									<th>Event Description</th>
									<th>Event Day</th>
									<th>Time Slot</th>
									<th>Resource Name</th>
									<th>User Name</th>
									<th>Confirm</th>
									<th>Reject</th>
								</tr>
							  </thead>';
					while($row = $result->fetch_assoc()) {
						echo  "<tbody>
								<tr class='warning'>
								  <td>" . $row["event_name"] . "</td>
								  <td>" . $row["description"] . "</td>
								  <td>" . $row["date"] . "</td>
								  <td>" . $row["time_slot"] . "</td>
								  <td>" . $row["resource_name"] . "</td>
								  <td>" . $row["first_name"] . "</td>
								  <td>" . '<a href="#accept" id="' . $row["email"] . '" data-toggle="modal" class="btn btn-success" onclick="reserve(this);">Accept</a>' . "</td>
								  <td>" . '<a href="#reject" id="' . $row["email"] . '" data-toggle="modal" class="btn btn-danger" onclick="reserve(this);">Reject</a>' . "</td>
								</tr>
							   </tbody>";
					}
						echo'</table>';
				} 
				$conn->close();
			?>
<div class="modal fade" id="accept"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Accept Request</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="post" action="accept.php">
					<fieldset>
						<div class="form-group">
							<label for="inputEmail" class="col-lg-4 control-label">User Email :<br></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="demo" name="usermail" placeholder="User mail">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail" class="col-lg-4 control-label">Subject :</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="enterPassword" name="mailsubject" placeholder="subject" value="Your Booking Accepted">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail" class="col-lg-4 control-label">Mail body :<br></label>
							<div class="col-lg-8">
								<textarea class="form-control" rows="4" name="mailbody">Lecture Hall/Lab Admin happy to inform you that your Lecture Hall/Lab Reservation is accepted.And you can use the facility for that time slot.</textarea>
								<span class="help-block">Enter if there is any special massege to the user.</span>
							</div>
						</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Send Mail</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			</div>
			</fieldset>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="reject"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Reject Request</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="post" action="reject.php">
					<fieldset>
						<div class="form-group">
							<label for="inputEmail" class="col-lg-4 control-label">User Email :<br></label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="demo2" name="usermail" placeholder="User mail">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail" class="col-lg-4 control-label">Subject :</label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="enterPassword" name="mailsubject" placeholder="subject" value="Your Booking is Rejected...!">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail" class="col-lg-4 control-label">Reason for Rejection :<br></label>
							<div class="col-lg-8">
								<textarea class="form-control" rows="4" name="mailbody"></textarea>
								<span class="help-block">Enter the reason for rejecting the request.</span>
							</div>
						</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Send Mail</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			</div>
			</fieldset>
			</form>
		</div>
	</div>
</div>

<script src = "js/jquery-2.1.4.min.js"></script>
<script src = "js/bootstrap.js"></script>
<script src="js/npm.js"></script>
<script src="js/notnull.js"></script>

</body>
</html>