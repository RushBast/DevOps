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
$servername = "mysql_db";
$username = "root";
$password = "root";
$dbname = "recipebook";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the username from the database using the user ID
$sql = "SELECT username FROM users WHERE user_id = '$user_id'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $username1 = $row['username'];
} else {
    // Handle the case if the user is not found in the database
    $username1 = "Unknown";
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
    <link rel="stylesheet" href="../css/style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Recipe Book</title>
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
                        <span class="tooltiptext">Log out</span>
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

    <section class="home">

        <div class="text"><b>RECIPE BOOK</b></div>
        <br><div class="text">Welcome, <?php echo $username1; ?>!</div>

        <div class="alang">
        <a href="indian.php"><div class="segment"> Indian</div></a>
        <a href="continental.php"><div class="segment1"> Continental</div></a>
    </div>
    </section>
    
    
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
