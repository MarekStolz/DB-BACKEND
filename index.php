<?php
require 'login.php';
?>
<!DOCTYPE html>
<html lang="cz">

<head>
    <title>PHP-SQL</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Marek Štolz">
    <meta name="description" content="Databáze s letu" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link id="link-style" rel="stylesheet" href="style.css" />
    <script>
        function deleteRow(id) {
            if (confirm('Are you sure you want to delete this row?')) {
                window.location.href = "delete.php?id=" + id;
            }
        }
    </script>
</head>

<body>
    <?php
    $q = "SELECT * FROM flight";
    $result = mysqli_query($con, $q);

    echo '<table>' . PHP_EOL;
    echo '<tr><th>ID</th>
    <th>PILOT</th>
    <th>DESTINATION</th>
    <th>GATE</th>
    <th>ACTION</th>
    </tr>'
    . PHP_EOL;
    while (($flight = mysqli_fetch_array($result, MYSQLI_ASSOC))!== null) {
        echo '<tr><td>' . $flight['id'] .
        '</td><td>' . $flight['pilot'] .
        '</td><td>' . $flight['destination'] .
        '</td><td>' . $flight['gate_code'] .
        '</td><td>' . '<button onclick="deleteRow(' . $flight['id'] . ')">Delete</button>' .
        '</td></tr>' . PHP_EOL;
    }    
    echo '</table>' . PHP_EOL;
    ?>
</body>

</html>
