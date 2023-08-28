<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/upload.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
 
    
    <title>Upload Your Recipe</title>
    <style>
    </style>
    <script>
        function addIngredientField() {
            const ingredientContainer = document.getElementById("ingredient-container");
            const ingredientField = document.createElement("div");
            ingredientField.classList.add("add-field-container");
            ingredientField.innerHTML = `
                <input type="text" name="name[]" placeholder="Ingredient Name" required>
                <input type="number" name="quantity[]" placeholder="Quantity" required>
                <select name="unit_of_measure[]">
                    <option value="grams">grams</option>
                    <option value="milliliters">milliliters</option>
                    <option value="pieces">pieces</option>
                </select>
                <button type="button" onclick="removeField(this)">-</button>
            `;
            ingredientContainer.appendChild(ingredientField);
        }

        function addInstructionField() {
            const instructionContainer = document.getElementById("instruction-container");
            const instructionField = document.createElement("div");
            instructionField.classList.add("add-field-container");
            instructionField.innerHTML = `
                <input type="number" class="step-number" name="step_number[]" placeholder="Step Number" required>
                <textarea name="step_description[]" rows="3" placeholder="Step Description" required></textarea>
                <button type="button" onclick="removeField(this)">-</button>
            `;
            instructionContainer.appendChild(instructionField);
        }

        function removeField(element) {
            element.parentNode.remove();
        }
    </script>
</head>
<body>
<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="img/logo.png" alt="">-->
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
                        <a href="Continental.php">
                            <i class='bx bx-bowl-hot icon'></i>
                            <span class="tooltiptext">Continental</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Indian.php">
                            <i class='bx bx-bowl-rice icon' ></i>
                            <span class="tooltiptext">Indian</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="Login.php">
                        <i class='bx bx-log-out icon' ></i>
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


    <div class="container">
        <h2>Upload Your Recipe</h2>
        <form action="process_recipe.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" name="image" required>
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="prep_time">Preparation Time (minutes):</label>
                <input type="number" name="prep_time" required>
            </div>

            <div class="form-group">
                <label for="cook_time">Cooking Time (minutes):</label>
                <input type="number" name="cook_time" required>
            </div>

            <div class="form-group">
                <label for="servings">Servings:</label>
                <input type="number" name="servings" required>
            </div>

            <div class="form-group">
                <label for="ingredients">Ingredients:</label>
                <div id="ingredient-container">
                    <div class="add-field-container">
                        <input type="text" name="name[]" placeholder="Ingredient Name" required>
                        <input type="number" name="quantity[]" placeholder="Quantity" required>
                        <select name="unit_of_measure[]">
                            <option value="grams">grams</option>
                            <option value="milliliters">milliliters</option>
                            <option value="pieces">litres</option>
                            <option value="pieces">pieces</option>
                        </select>
                        <button type="button" onclick="removeField(this)">-</button>
                    </div>
                </div>
                <div class="add-field-btn">
                    <button type="button" onclick="addIngredientField()">Add Ingredient</button>
                </div>
            </div>

            <div class="form-group">
                <label for="instructions">Instructions:</label>
                <div id="instruction-container">
                    <div class="add-field-container">
                        <textarea name="step_description[]" rows="3" placeholder="Step Description" required></textarea>
                        <input type="number" class="step-number" name="step_number[]" placeholder="Step Number" required>
                        <button type="button" onclick="removeField(this)">-</button>
                    </div>
                </div>
                <div class="add-field-btn">
                    <button type="button" onclick="addInstructionField()">Add Instruction</button>
                </div>
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" required>
                    <optgroup label="Indian">
                        <option value="punjabi">Punjabi</option>
                        <option value="marathi">Marathi</option>
                        <option value="south-indian">South Indian</option>
                        <option value="south-indian">Nepali</option>
                        <option value="south-indian">Gujarati</option>
                    </optgroup>
                    <optgroup label="Continental">
                        <option value="italian">Italian</option>
                        <option value="american">American</option>
                        <option value="korean">Korean</option>
                        <option value="arabic">Arabic</option>
                    </optgroup>
                </select>
            </div>

            <div class="form-group btn-submit">
                <input type="submit" value="Upload Recipe">
            </div>
        </form>
    </div>
    
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
=======
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/upload.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
 
    
    <title>Upload Your Recipe</title>
    <style>
    </style>
    <script>
        function addIngredientField() {
            const ingredientContainer = document.getElementById("ingredient-container");
            const ingredientField = document.createElement("div");
            ingredientField.classList.add("add-field-container");
            ingredientField.innerHTML = `
                <input type="text" name="name[]" placeholder="Ingredient Name" required>
                <input type="number" name="quantity[]" placeholder="Quantity" required>
                <select name="unit_of_measure[]">
                    <option value="grams">grams</option>
                    <option value="milliliters">milliliters</option>
                    <option value="pieces">pieces</option>
                </select>
                <button type="button" onclick="removeField(this)">-</button>
            `;
            ingredientContainer.appendChild(ingredientField);
        }

        function addInstructionField() {
            const instructionContainer = document.getElementById("instruction-container");
            const instructionField = document.createElement("div");
            instructionField.classList.add("add-field-container");
            instructionField.innerHTML = `
                <input type="number" class="step-number" name="step_number[]" placeholder="Step Number" required>
                <textarea name="step_description[]" rows="3" placeholder="Step Description" required></textarea>
                <button type="button" onclick="removeField(this)">-</button>
            `;
            instructionContainer.appendChild(instructionField);
        }

        function removeField(element) {
            element.parentNode.remove();
        }
    </script>
</head>
<body>
<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="img/logo.png" alt="">-->
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
                        <a href="Continental.php">
                            <i class='bx bx-bowl-hot icon'></i>
                            <span class="tooltiptext">Continental</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Indian.php">
                            <i class='bx bx-bowl-rice icon' ></i>
                            <span class="tooltiptext">Indian</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="Login.php">
                        <i class='bx bx-log-out icon' ></i>
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


    <div class="container">
        <h2>Upload Your Recipe</h2>
        <form action="process_recipe.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" name="image" required>
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="prep_time">Preparation Time (minutes):</label>
                <input type="number" name="prep_time" required>
            </div>

            <div class="form-group">
                <label for="cook_time">Cooking Time (minutes):</label>
                <input type="number" name="cook_time" required>
            </div>

            <div class="form-group">
                <label for="servings">Servings:</label>
                <input type="number" name="servings" required>
            </div>

            <div class="form-group">
                <label for="ingredients">Ingredients:</label>
                <div id="ingredient-container">
                    <div class="add-field-container">
                        <input type="text" name="name[]" placeholder="Ingredient Name" required>
                        <input type="number" name="quantity[]" placeholder="Quantity" required>
                        <select name="unit_of_measure[]">
                            <option value="grams">grams</option>
                            <option value="milliliters">milliliters</option>
                            <option value="pieces">litres</option>
                            <option value="pieces">pieces</option>
                        </select>
                        <button type="button" onclick="removeField(this)">-</button>
                    </div>
                </div>
                <div class="add-field-btn">
                    <button type="button" onclick="addIngredientField()">Add Ingredient</button>
                </div>
            </div>

            <div class="form-group">
                <label for="instructions">Instructions:</label>
                <div id="instruction-container">
                    <div class="add-field-container">
                        <textarea name="step_description[]" rows="3" placeholder="Step Description" required></textarea>
                        <input type="number" class="step-number" name="step_number[]" placeholder="Step Number" required>
                        <button type="button" onclick="removeField(this)">-</button>
                    </div>
                </div>
                <div class="add-field-btn">
                    <button type="button" onclick="addInstructionField()">Add Instruction</button>
                </div>
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" required>
                    <optgroup label="Indian">
                        <option value="punjabi">Punjabi</option>
                        <option value="marathi">Marathi</option>
                        <option value="south-indian">South Indian</option>
                        <option value="south-indian">Nepali</option>
                        <option value="south-indian">Gujarati</option>
                    </optgroup>
                    <optgroup label="Continental">
                        <option value="italian">Italian</option>
                        <option value="american">American</option>
                        <option value="korean">Korean</option>
                        <option value="arabic">Arabic</option>
                    </optgroup>
                </select>
            </div>

            <div class="form-group btn-submit">
                <input type="submit" value="Upload Recipe">
            </div>
        </form>
    </div>
    
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
>>>>>>> 692c9d0 (intial commit)
</html>