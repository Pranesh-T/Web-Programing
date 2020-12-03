<?php
$link = mysqli_connect("localhost", "root", "Axar@1934", "info");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$first_name = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$sql = "INSERT INTO user (First Name, Last Name) VALUES ('$first_name', '$last_name')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
}

?>
