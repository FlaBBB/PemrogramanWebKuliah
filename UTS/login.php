<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    http_response_code(301);
    if (isset($_SESSION["username"])) {
        header("Location: ");
    } else {
        header("Location: login.html");
    }
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];

// validation
$error = false;
if (empty($username) || empty($password)) {
    $error = true;
    $message = "Harus terisi!";
} elseif (strlen($password) > 6) {
    $error = true;
    $message = "Password maksimal 6 karakter!";
} elseif (!preg_match("/[A-Z]/", $password) || !preg_match("/[a-z]/", $password)) {
    $error = true;
    $message = "Password harus terdiri dari huruf besar dan kecil!";
}

if ($error) {
    header("Content-Type: application/json");
    http_response_code(400);
    echo json_encode(["message" => $message]);
    exit();
}

$_SESSION["username"] = $username;
http_response_code(200);
echo json_encode(["message" => "Login berhasil!"]);