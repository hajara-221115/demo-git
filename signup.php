<?php
include "db.php";
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql="insert into signup(Name,Email,Message)
 values('$name','$email','$message')";
if(mysqli_query($conn,$sql)){
    echo "New record created successfully";
}else{
    echo "Error: ". 
mysqli_error($conn);
}
?>