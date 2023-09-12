<?php
    echo add($_POST["num1"], $_POST["num2"]);

function add($num1 = 1, $num2 = 1){
    if($_POST["num1"] === "" && $_POST["num2"] === ""){
        echo "Both inputs are empty! We will now add the default values; which is 1<br>";
    }elseif ($_POST["num1"] === "" || $_POST["num2"] === ""){
        echo "An input is empty! Adding 1 to the other value...<br>";
        if($_POST["num1"] === ""){
            $num1 = 1;
        }
        if ($_POST["num2"] === ""){
            $num2 = 1;
        }
    }
    echo "The sum of both digits is: ";
    return $num1 + $num2;
}