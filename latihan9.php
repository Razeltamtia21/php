<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Form</title>
    <style>

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 50%;
    margin: 0 auto;
    background: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 50px;
}

h1 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 10px;
    color: #555;
}

input[type="text"],
input[type="email"] {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

input[type="submit"] {
    padding: 10px;
    background: #007BFF;
    border: none;
    color: white;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background: #0056b3;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Simple PHP Form</h1>
        <form action="process.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Basic validation
    if (!empty($name) && !empty($email)) {
        echo "<h1>Thank you, $name</h1>";
        echo "<p>We will contact you shortly at $email.</p>";
    } else {
        echo "<h1>Error!</h1>";
        echo "<p>Please fill in all fields.</p>";
    }
} else {
    echo "<h1>Form not submitted correctly.</h1>";
}
?>
