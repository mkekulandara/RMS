<?php
include('connectdb.php');
if (isset($_POST['submit'])) {
    if (empty($_POST['resource_id']) || empty($_POST['resource_type']) || empty($_POST['sub_type']) || empty($_POST['capacity']) || empty($_POST['ohp']) || empty($_POST['sound_system']) || empty($_POST['multimedia']) || empty($_POST['wifi']) || empty($_POST['status'])) {
        $message = "Some important data is missing to create new resource";
    } else {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $user_level = $_POST["user_level"];
        $email = $_POST["email"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];
        $tel_num = $_POST["tel_num"];
        $address = $_POST["address"];
        $status = $_POST["status"];

        $sql = "INSERT INTO resorce (username, password, user_level, email, first_name, last_name, dob, gender, tel_num, address, status)
    VALUES ('$username', '$password', '$user_level', '$email', '$first_name', '$last_name', '$dob', '$gender', '$tel_num', '$address', '$status')";

        if (mysqli_query($conn, $sql)) {
            $message = "User created successfully";
            header('Location: home.php');

        } else {
            $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
            header('Location: home.php');
        }
    }
}
mysqli_close($conn);
?>
