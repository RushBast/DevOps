<?php
session_start();
// Check if the user is logged in, otherwise redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Retrieve the user ID from the session
$user_id = $_SESSION['user_id'];

// Retrieve the username from the database based on the user ID
// Replace the database connection details with your own
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "recipebook";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the username from the database using the user ID
$sql = "SELECT username FROM Users WHERE user_id = '$user_id'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $username = $row['username'];
} else {
    // Handle the case if the user is not found in the database
    $username = "Unknown";
}

$conn->close();
?>

       
<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Recipe</title>
</head>
<body>
    
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                    <span class="name">More</span>
                    <span class="profession">Menu</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="tooltiptext">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="upload_recipe.php">
                            <i class='bx bx-add-to-queue icon'></i>
                            <span class="tooltiptext">Add recipe</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="continental.php">
                            <i class='bx bx-bowl-hot icon'></i>
                            <span class="tooltiptext">Continental</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="indian.php">
                            <i class='bx bx-bowl-rice icon' ></i>
                            <span class="tooltiptext">Indian</span>
                        </a>
                    </li>

                    


                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="Login.php">
                        <i class='bx bx-log-in icon' ></i>
                        <span class="tooltiptext">Login</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>
    </nav>
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

// Retrieve recipe ID from the URL parameter
if (isset($_GET['id'])) {
    $recipe_id = $_GET['id'];

    // Retrieve recipe details from the database
    $sql = "SELECT * FROM recipes WHERE recipe_id = '$recipe_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Display the recipe details including the image_id
        echo "<h2>" . $row['title'] . "</h2>";
        
        // Retrieve and display the ingredients for the recipe
        echo "<h3></h3>";
        $images_sql = "SELECT * FROM images WHERE recipe_id = '$recipe_id'";
        $images_result = $conn->query($images_sql);

        if ($images_result->num_rows > 0) {
            echo "<ul>";
            while ($images_row = $images_result->fetch_assoc()) {
                echo '<img src="' . $images_row['filepath'] . '">';
            }
            echo "</ul>";
        }

        echo "<p>" . $row['description'] . "</p>";
        echo "<p>Preparation Time: " . $row['prep_time'] . " minutes</p>";
        echo "<p>Cooking Time: " . $row['cook_time'] . " minutes</p>";
        echo "<p>Servings: " . $row['servings'] . "</p>";


        // Retrieve and display the ingredients for the recipe
        echo "<h3>Ingredients:</h3>";
        $ingredient_sql = "SELECT * FROM ingredients WHERE recipe_id = '$recipe_id'";
        $ingredient_result = $conn->query($ingredient_sql);

        if ($ingredient_result->num_rows > 0) {
            echo "<ul>";
            while ($ingredient_row = $ingredient_result->fetch_assoc()) {
                echo "<li>" . $ingredient_row['name'] . ": " . $ingredient_row['quantity'] . " " . $ingredient_row['unit_of_measure'] . "</li>";
            }
            echo "</ul>";
        }

        // Retrieve and display the instructions for the recipe
        echo "<h3>Instructions:</h3>";
        $instruction_sql = "SELECT * FROM instructions WHERE recipe_id = '$recipe_id'";
        $instruction_result = $conn->query($instruction_sql);

        if ($instruction_result->num_rows > 0) {
            echo "<ol>";
            while ($instruction_row = $instruction_result->fetch_assoc()) {
                echo "<li>Step " . $instruction_row['step_number'] . ": " . $instruction_row['description'] . "</li>";
            }
            echo "</ol>";
        }
    } else {
        echo "Recipe not found.";
    }
} else {
    echo "Invalid recipe ID.";
}

// Close the database connection
$conn->close();
?>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>


</body>
</html>
