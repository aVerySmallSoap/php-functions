<?php
    if(isset($_POST["name"])){
        $input = $_POST["name"];
        returnedFromPHP($input);
    }

function returnedFromPHP($str){
    echo "Your input has been processed in PHP! Here is the input: ". $str;
}
