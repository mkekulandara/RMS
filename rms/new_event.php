<?php
include('connectdb.php');
if (isset($_POST['submit'])) {
    if (empty($_POST['event_name']) || empty($_POST['date']) || empty($_POST['time_slot']) || empty($_POST['status'])) {
        $message = "Some important data is missing to create new event";
    } else {
        $event_name = $_POST["event_name"];
        $description = $_POST["description"];
        $date = $_POST["date"];
        $time_slot = $_POST["time_slot"];
        $status = $_POST["status"];

        $sql = "INSERT INTO resorce (event_name, description, date, time_slot, status)
    VALUES ('$event_name', '$description', '$date', '$time_slot',' $status')";

        if (mysqli_query($conn, $sql)) {
            header('Location: home.php');

            $message = "Resource created successfully";
        } else {
            header('Location: home.php');
            $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
mysqli_close($conn);
?>
