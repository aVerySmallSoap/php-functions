<?php
    if(isset($_POST["name"])){
        $input = $_POST["name"];
        returnedFromPHP($input);
    }

function returnedFromPHP($str): void
{
    echo "Your input has been processed in PHP! Here is the input: ". $str;
}
