<?php
include('connectdb.php');
if (empty($_POST['resource_id']) || empty($_POST['resource_type']) || empty($_POST['sub_type']) || empty($_POST['capacity']) || empty($_POST['ohp']) || empty($_POST['sound_system']) || empty($_POST['multimedia']) || empty($_POST['wifi']) || empty($_POST['status'])) {
    $message = "Some important data is missing to create new resource";
}
else {
    $resource_id = $_POST["resource_id"];
    $resource_name = $_POST["resource_name"];
    $resource_type = $_POST["resource_type"];
    $sub_type = $_POST["sub_type"];
    $capacity = $_POST["capacity"];
    $location = $_POST["location"];
    $ohp = $_POST["ohp"];
    $sound_system = $_POST["sound_system"];
    $multimedia = $_POST["multimedia"];
    $wifi = $_POST["wifi"];
    $status = $_POST["status"];
    $sql = "INSERT INTO resorce (resource_id, resource_name, resource_type, sub_type, capacity, location, ohp, sound_system, multimedia, wifi, status)
    VALUES ('$resource_id', '$resource_name', '$resource_type', '$sub_type', '$capacity', '$location', '$ohp', '$sound_system', '$multimedia', '$wifi', '$status')";
    if (mysqli_query($conn, $sql)) {
        header('Location: home.php');
        $message = "Resource created successfully";
    } else {
        header('Location: home.php');
        $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
