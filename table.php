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
while (($flight = mysqli_fetch_array($result, MYSQLI_ASSOC)) !== null) {
    echo '<tr><td>' . $flight['id'] .
        '</td><td>' . $flight['pilot'] .
        '</td><td>' . $flight['destination'] .
        '</td><td>' . $flight['gate_code'] .
        '</td><td>' . '<button onclick="deleteRow(' . $flight['id'] . ')">Delete</button>' .
        '<td><button onclick="editRow(' . $flight['id'] . ',\'' . $flight['pilot'] . '\',\'' . $flight['destination'] . '\',\'' . $flight['gate_code'] . '\')">Edit</button></td>' .
        '</td></tr>' . PHP_EOL;
}
echo '</table>' . PHP_EOL;
