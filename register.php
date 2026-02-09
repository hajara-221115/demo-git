

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Validation
    if (strlen($username) < 4) {
        die("Username must be at least 4 characters");
    }

    if (strlen($password) < 6) {
        die("Password must be at least 6 characters");
    }

    // Formatting
    $username = strtolower($username);
    $username = htmlspecialchars($username);
    $password = addslashes($password);

    echo "Registration Successful<br>";
    print "Username: $username";
}
?>