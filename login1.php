<?php

$conn = mysqli_connect("localhost","root","","Activity4");
if (!$conn){
    die ("Connection Failed: ");
}

$Mobile = $_POST['Mobile'];
$Password = $_POST['Password'];

$sql = "SELECT * from users where Mobile='$Mobile' and Password='$Password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0){
    echo "Login successful! Welcome.";
} else {
    echo "Invalid credentials!";
}

mysqli_close($conn);

?>