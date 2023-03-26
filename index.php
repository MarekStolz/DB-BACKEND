<?php
include '../DB-BACKEND/FUNKCE/login.php';
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
    </script>
</head>

<body>
    <h1>Flight Information</h1>
    <button onclick="showForm()">Add New Flight</button>
    <?php
    include '../DB-BACKEND/table.php';
    ?>
    <div id="form-container" style="display:none;">
        <h2>Add New Flight</h2>
        <form method="post" action="../DB-BACKEND/FUNKCE/add.php">
            <label for="pilot">Pilot:</label>
            <input type="text" name="pilot" required><br><br>
            <label for="destination">Destination:</label>
            <input type="text" name="destination" required><br><br>
            <label for="gate_code">Gate Code:</label>
            <input type="text" name="gate_code" required><br><br>
            <input type="submit" value="Add Flight">
        </form>
    </div>

    <div id="edit-form-container" style="display:none;">
        <h2>Edit Flight</h2>
        <form method="post" action="../DB-BACKEND/FUNKCE/edit.php">
            <input type="hidden" id="edit-id" name="id">
            <label for="pilot">Pilot:</label>
            <input type="text" id="edit-pilot" name="pilot" required><br><br>
            <label for="destination">Destination:</label>
            <input type="text" id="edit-destination" name="destination" required><br><br>
            <label for="gate_code">Gate Code:</label>
            <input type="text" id="edit-gate_code" name="gate_code" required><br><br>
            <input type="submit" value="Save Changes">
        </form>
    </div>

    <script src="../DB-BACKEND/JS/script.js"></script>
</body>

</html>

</html>