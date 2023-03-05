<?php
error_reporting(0);

$name = $_POST['name'];
$mail = $_POST['mail'];
$sub = $_POST['subject'];
$msg = $_POST['message'];

$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "login";

$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
if($conn == false){
    echo "connection failed";
}
else
    echo "connected successfully:<br>";

    $req = mysqli_query($conn, "INSERT INTO login_table VALUES('$name','$mail','$sub','$msg')");

    if($req == false)
        echo "data not sent";
    else
        echo "data sent successfully";

?>