<?php
$localhost = 'localhost';
$root = 'root';
$password = '';
$db = 'voltvoyagelogin';

// Establish database connection
$con = mysqli_connect($localhost, $root, $password, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Check if the username already exists
    $checkQuery = "SELECT * FROM voyagelogin WHERE username = ?";
    $stmt = mysqli_prepare($con, $checkQuery);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        echo "Username already taken! Please choose another one.";
    } else {
        // If username is unique, insert into database
        $insertQuery = "INSERT INTO voyagelogin (username, password) VALUES (?, ?)";
        $stmt = mysqli_prepare($con, $insertQuery);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            if (mysqli_stmt_execute($stmt)) {
                echo "Account Created!";
            } else {
                echo "Error: " . mysqli_error($con);
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Error in query preparation!";
        }
    }
}
?>

<html>
<head>
  <title>Log In - VOLTVOYAGE</title>
</head>
<body>
<form method="POST">
    <input type="text" placeholder="Username" name="username" required> 
    <input type="password" placeholder="Password" name="password" required> 
    <input type="submit" name="submit" value="Sign Up">
</form>
</body>
</html>
