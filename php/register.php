<<<<<<< HEAD
<?php
// Establish database connection
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "recipebook";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["psw"];
    
    // Validate and sanitize the input as per your requirements
    
    // Insert user data into the Users table
    $sql = "INSERT INTO Users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully.";
        header("refresh:2 url=login.php");
                exit();
    } else {
        echo "Error registering user: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
=======
<?php
// Establish database connection
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "recipebook";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["psw"];
    
    // Validate and sanitize the input as per your requirements
    
    // Insert user data into the Users table
    $sql = "INSERT INTO Users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully.";
        header("refresh:2 url=login.php");
                exit();
    } else {
        echo "Error registering user: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
>>>>>>> 692c9d0 (intial commit)
