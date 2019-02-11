<?php
include 'connectdb.php';
include 'session.php';

$event_name=$_POST["event_name"];
$description=$_POST["description"];
$date=$_POST["date"];
$time_slot=$_POST["time_slot"];


$sql = "INSERT INTO event (event_name, description, date, time_slot) VALUES ('$event_name', '$description', '$date', '$time_slot')";

if (mysqli_query($conn, $sql)) {
    $message =  "Created event successfully";
} else {
    $message =  "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql1 = "select max(id) from event";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_array($result);
$event_id = $row["max(id)"];
$resource_id = $_POST["resource_id"];
$user_id = $login_user_id;
$confirmation = "pending";
$sql2 = "INSERT INTO bookings (event_id, resource_id, user_id, confirmation) VALUES ('$event_id', '$resource_id', '$user_id', '$confirmation')";

if (mysqli_query($conn, $sql2)) {
    header('Location: home.php');
    $message =  "Booking process completed successfully";
} else {
    header('Location: home.php');
    $message =  "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
