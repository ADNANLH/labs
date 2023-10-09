<?php
// Database connection parameters
$servername = "localhost:3306"; // Change this to your MySQL server address
$username = "root"; // Change this to your MySQL username
$password = "2000"; // Change this to your MySQL password
$dbname = "projet2"; // Change this to the name of your MySQL database

// Create a MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
   // die("Connection failed: " . $conn->connect_error);
} else {
    //echo "Connected successfully!";
}

// Close the connection when done


$sql = "SELECT * FROM stagiaires";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . "<br>";
        echo "full name: " . $row["full_name"] . "<br>";
        echo "email: " . $row["email"] . "<br>";
        // Add more fields as needed
        echo "<hr>";
    }
} else {
    echo "No stagiaires found.";
}

?>