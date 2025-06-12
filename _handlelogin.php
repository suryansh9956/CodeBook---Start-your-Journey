<?php
session_start();
include '_dbconnect.php'; // Ensure database connection is included

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['loginEmail']);
    $pass = $_POST['loginPass'];

    // Check if email exists
    $sql = "SELECT * FROM `users` WHERE user_email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Database query failed: " . mysqli_error($conn)); // Debugging
    }

    $numRows = mysqli_num_rows($result);

    if ($numRows == 1) {
        $row = mysqli_fetch_assoc($result);

        // Verify hashed password
        if (password_verify($pass, $row['user_pass'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['useremail'] = $email;
            $_SESSION['userfname'] = $row['user_name'];

            header("Location: /forums/index.php");
            exit;
        } else {
            $_SESSION['login_error'] = "Incorrect password!";
        }
    } else {
        $_SESSION['login_error'] = "No account found with this email!";
    }

    header("Location: /forums/login.php"); // Redirect to login page with error
    exit;
}
?>

