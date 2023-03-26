<?php
require 'login.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $query = "DELETE FROM flight WHERE id = $id";
    if (mysqli_query($con, $query)) {

        header('Location: ../index.php?OK');
        exit();
    } else {
        header('Location: ../index.php?ERROR' . mysqli_error($con));
        exit();
    }
} else {

    header('Location: ../index.php?error=Invalid+request.');
    exit();
}
