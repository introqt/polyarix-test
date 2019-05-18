<?php

include_once 'config.php';
include_once 'functions.php';

$link = new mysqli(host, user, password, db);
// Check connection
if ($link->connect_error) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (mysqli_query($link, "DESCRIBE " . table)) {
    // Exists
} else {
    // Attempt create table query execution
    $sql = "CREATE TABLE " . table . "(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    usd VARCHAR(30) NOT NULL,
    uah VARCHAR(70) NOT NULL
)";
    if (mysqli_query($link, $sql)) {
        echo "Table created successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}

// prepare and bind
$stmt = $link->prepare("INSERT INTO " . table . " (name, usd, uah) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $usd, $uah);

// set parameters and execute
$name = $_POST['name'];
$usd = $_POST['dollars'];
$uah = $_POST['uah-equivalent'];
$stmt->execute();

echo "<h4>${name}, your exchange has been saved!</h4>";
// Close connection
mysqli_close($link);
