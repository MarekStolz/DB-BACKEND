<?php
require 'login.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $pilot = $_POST['pilot'];
    $destination = $_POST['destination'];
    $gate_code = $_POST['gate_code'];

    $q = "UPDATE flight SET pilot = ?, destination = ?, gate_code = ? WHERE id = ?";
    $stmt = mysqli_prepare($con, $q);

    mysqli_stmt_bind_param($stmt, 'sssi', $pilot, $destination, $gate_code, $id);
    mysqli_stmt_execute($stmt);

    header('Location: ../index.php');
    exit();
} else {

    echo "ERROR";
}
