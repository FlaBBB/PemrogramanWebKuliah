<?php
session_start();
if (!isset($_SESSION["username"])) {
    http_response_code(301);
    header("Location: login.html");
    exit();
}
