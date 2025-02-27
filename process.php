<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["user_name"])) {
        $errors['user_name'] = "Name is required";
    }
    
    if (empty($_POST["user_email"])) {
        $errors['user_email'] = "Your Email is required";
    }
    
    if (empty($_POST["user_level"])) {
        $errors['user_level'] = "You must select your level";
    }

    if (empty($_POST["user_message"])) {
        $errors['user_message'] = "Message cannot be empty";
    }

    if (empty($errors)) {
        echo "<h2 style = 'color: green;'>Message sent successfully</h2>";
    } else {
        foreach ($errors as $key => $error) {
            echo "<h2 style = 'color: red;'>$error</h2>";
        }
    }
}
?>