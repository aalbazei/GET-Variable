<!DOCTYPE html>
<html>
<head>
    <title>GET Variable</title>
</head>
<body>


	<form action="" method="get">
        <label for="value">Enter a value:</label>
        <input type="text" name="value" id="value">
        <button type="submit">Submit</button>
    </form>
	
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['value'])) {
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

        // Get the GET value
        $value = $_GET['value'];

        // Insert the value into the database
        $sql = "INSERT INTO get_var (get_value) VALUES ('$value')";

        if ($conn->query($sql) === TRUE) {
            echo "Value is saved in database";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>

</body>
</html>
