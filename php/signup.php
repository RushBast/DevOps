<<<<<<< HEAD


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
    
    <title>SignUp</title>
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
                        <a href="Index.php">
                            <i class='bx bx-home-alt icon' ></i>
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
                    <a href="Logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="tooltiptext">LogOut</span>
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

    <div class="container" id="container">

        
        <div class="form-container sign-in-container">
        <form action="register.php" method="POST">
        <h1> SIGN UP </h1>
        
        <input type="text" name="username" placeholder="Username"required><br>
        
        
        <input type="email" name="email"placeholder="Email" required><br>
        

        <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" required>
        <div id="message">
            <h5>Password must contain the following:</h5>
            <p id="letter" class="invalid">A lowercase letter</p>
            <p id="capital" class="invalid">A capital (uppercase) letter</p>
            <p id="number" class="invalid">A number</p>
            <p id="length" class="invalid">Minimum 8 characters </p>
          </div>
        
        <a href="forgotpass.html">Forgot your password?</a>
        <a href="register.php"> <button>Sign Up</button></a>
        <a href="login.php"><button>Sign In</button></a>
        
   
    </form>
        </div>
    </div>
    
    </div>
    
    <script>
        var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

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
=======


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
    
    <title>SignUp</title>
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
                        <a href="Index.php">
                            <i class='bx bx-home-alt icon' ></i>
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
                    <a href="Logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="tooltiptext">LogOut</span>
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

    <div class="container" id="container">

        
        <div class="form-container sign-in-container">
        <form action="register.php" method="POST">
        <h1> SIGN UP </h1>
        
        <input type="text" name="username" placeholder="Username"required><br>
        
        
        <input type="email" name="email"placeholder="Email" required><br>
        

        <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" required>
        <div id="message">
            <h5>Password must contain the following:</h5>
            <p id="letter" class="invalid">A lowercase letter</p>
            <p id="capital" class="invalid">A capital (uppercase) letter</p>
            <p id="number" class="invalid">A number</p>
            <p id="length" class="invalid">Minimum 8 characters </p>
          </div>
        
        <a href="forgotpass.html">Forgot your password?</a>
        <a href="register.php"> <button>Sign Up</button></a>
        <a href="login.php"><button>Sign In</button></a>
        
   
    </form>
        </div>
    </div>
    
    </div>
    
    <script>
        var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

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
>>>>>>> 692c9d0 (intial commit)
</html>