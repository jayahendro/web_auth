<?php

$username = $password = "";
$usernameErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD" == "POST"]) {
    $username = checkInput($_POST["username"]);
    $password = checkInput($_POST["password"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
        $usernameErr = "Only letters and white space allowed";
    }
}

function checkInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}