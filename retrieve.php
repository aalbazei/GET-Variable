<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "get_data";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select values from the database
$sql = "SELECT get_value FROM get_var";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if (isset($row["get_value"])) {
            echo  $row["get_value"] . "<br>";
        } else {
            echo "No value found";
        }
    }
} else {
    echo "No values found";
}

$conn->close();
?>
