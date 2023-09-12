<?php
declare(strict_types=1);
session_start();
$name = $_POST["session"] ?? $_SESSION["prev"];
$_SESSION["prev"] = $name;
$users = $_SESSION["named"] ?? 0;

echo "&nbsp&nbsp The current session is under: <br>";
echo $name . "<br>";
echo "&nbsp&nbsp User was change this amount of times: <br>";
echo sessionOut($users);

function sessionOut(int &$users) : int {
    $_SESSION["named"] = $users + 1;
    return $users++;
}