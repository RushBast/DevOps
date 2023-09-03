 
<?php
// Establish database connection
$servername = "localhost:9001";
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
    $password = $_POST["password"];

    // Validate and sanitize the input as per your requirements

    // Check if the user credentials are correct
    $sql = "SELECT * FROM Users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Successful login, create session and store user ID
        session_start();
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['user_id'];

        // Redirect to the index page or any other desired page
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}

// Close the database connection
$conn->close();
?>
<<<<<<< HEAD
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
    $password = $_POST["password"];

    // Validate and sanitize the input as per your requirements

    // Check if the user credentials are correct
    $sql = "SELECT * FROM Users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Successful login, create session and store user ID
        session_start();
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['user_id'];

        // Redirect to the index page or any other desired page
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}

// Close the database connection
$conn->close();
?>
>>>>>>> 692c9d0 (intial commit) 
