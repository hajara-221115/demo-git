<?php
include "db.php";
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$message=trim($_POST['message']);

if (strlen($name) < 4) {
        die("Username must be at least 4 characters");
    }

    if (strlen($email) < 6) {
        die("Password must be at least 6 characters");
    }

    if(strlen($message) < 10) {
        die("Message must be at least 10 characters");
    }

    $name = strtolower($name);
    $name = htmlspecialchars($name);
    $email = addslashes($email);
    $message = addslashes($message);

    echo "Registration Successful<br>";
    print "Name: $name<br>Email: $email<br>Message: $message";


$sql="insert into signup(Name,Email,Message)
 values('$name','$email','$message')";
if(mysqli_query($conn,$sql)){
    echo "New record created successfully";
}else{
    echo "Error: ". 
mysqli_error($conn);
}
?>