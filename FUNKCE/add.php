<?php
require 'login.php';


$pilot = $_POST['pilot'];
$destination = $_POST['destination'];
$gate_code = $_POST['gate_code'];

$q = "INSERT INTO flight (pilot, destination, gate_code) VALUES ('$pilot', '$destination', '$gate_code')";
if (mysqli_query($con, $q)) {
    header('Location: ../index.php?OK');
        exit();
} else {
    header('Location: ../index.php?ERROR'.mysqli_error($con));
        exit();
}

mysqli_close($con);
