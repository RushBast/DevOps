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

// Start the session (assuming you're using sessions for authentication)
session_start();

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user ID from the session or authentication mechanism
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
        // Redirect the user to the login page or handle unauthorized access
        header("Location: login.php");
        exit();
    }

    // Retrieve other form data
    $title = $_POST["title"];
    $description = $_POST["description"];
    $prep_time = $_POST["prep_time"];
    $cook_time = $_POST["cook_time"];
    $servings = $_POST["servings"];
    $ingredients = $_POST["name"];
    $quantities = $_POST["quantity"];
    $units = $_POST["unit_of_measure"];
    $instructions = $_POST["step_description"];
    $step_numbers = $_POST["step_number"];
    $category = $_POST["category"];

    // Handle image upload
    $image_dir = "uploads/"; // Directory to store the uploaded images

    // Generate a unique filename for the image
    $image_filename = uniqid() . '_' . $_FILES["image"]["name"];

    // Set the file path to save the image
    $image_path = $image_dir . $image_filename;

    // Move the uploaded image to the desired directory
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $image_path)) {
        // Image upload success, proceed with recipe data insertion

        // Insert image information into the database
        $filename = $_FILES["image"]["name"];
        $filepath = $image_path;

        // Insert the image information into the database table
        $image_sql = "INSERT INTO images (filename, filepath, recipe_id) VALUES ('$filename', '$filepath', 'random')";

        if ($conn->query($image_sql) === TRUE) {
            $image_id = $conn->insert_id;

            // Insert recipe data into the database
            $recipe_sql = "INSERT INTO recipes (user_id, title, description, prep_time, cook_time, servings, category, image_id)
                VALUES ('$user_id', '$title', '$description', '$prep_time', '$cook_time', '$servings', '$category', '$filepath')";

            if ($conn->query($recipe_sql) === TRUE) {
                $recipe_id = $conn->insert_id;

                // Update recipe_id in the images table with the recipe_id
                $update_image_sql = "UPDATE images SET recipe_id = '$recipe_id' WHERE recipe_id = 'random'";
                $conn->query($update_image_sql);

                // Insert ingredient data into the database
                foreach ($ingredients as $index => $ingredient) {
                    $ingredient_name = $ingredient;
                    $quantity = $quantities[$index];
                    $unit = $units[$index];

                    // Insert ingredient data into the Ingredients table
                    $ingredient_sql = "INSERT INTO ingredients (recipe_id, name, quantity, unit_of_measure)
                        VALUES ('$recipe_id', '$ingredient_name', '$quantity', '$unit')";

                    $conn->query($ingredient_sql);
                }

                // Insert instruction data into the database
                foreach ($instructions as $index => $instruction) {
                    $step_description = $instruction;
                    $step_number = $step_numbers[$index];

                    // Insert instruction data into the Instructions table
                    $instruction_sql = "INSERT INTO instructions (recipe_id, step_number, description)
                        VALUES ('$recipe_id', '$step_number', '$step_description')";

                    $conn->query($instruction_sql);
                }

                echo "Recipe uploaded successfully.";

                header("refresh:2 url=Index.php");
                exit();
            } else {
                echo "Error uploading recipe: " . $conn->error;
            }
        } else {
            echo "Error uploading image: " . $conn->error;
        }
    } else {
        echo "Error moving the uploaded image.";
    }
}

// Close the database connection
$conn->close();
?>
