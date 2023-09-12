<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/CSS/navigation.css">
    <link rel="stylesheet" href="/CSS/no-margin.css">
    <link rel="stylesheet" href="/CSS/index.css">
    <title>PHP-Arrays</title>
</head>
<body>

    <div class="nav">
        <div class="nav-inner">
            <ul id="list">
                <li class="nav-section active">Home</li>
                <li class="nav-section">Function</li>
                <li class="nav-section">Arguments</li>
                <li class="nav-section">Reference</li>
            </ul>
        </div>
    </div>

    <section class="section" id="home">
        <div class="container">
            <div class="title-container">
                <h1 class="article-title">PHP Function Examples</h1>
            </div>
            <div class="inner-container ">
                <article class="article center-article">
                    <h4 class="sub-heading">Learn the different kinds of array implementations!</h4>
                    <p></p>
                </article>
            </div>
        </div>
    </section>

    <div class="section hidden-first" id="functions-one">
        <div class="container example-odd">
            <div class="title-container">
                <h1 class="article-title">The Basics of PHP Functions</h1>
            </div>
            <div class="inner-container">
                <div class="subtitle-container subtitle-left">
                    <h4 class="sub-heading">The very basics of functions</h4>
                    <article class="description">
                        <p>Functions are a block of statements that can be used repeatedly in a program.</p>
                    </article>
                </div>
                <div class="article-container article-example">
                    <article class="article article-right">
                        For example, if you were to input any text in the box below and click the submit button,
                        it will display what you wrote in the adjacent space
                    </article>
                    <form id="userForm">
                        <label>
                            <input type="text" name="user-input" class="input" id="rando-input">
                        </label>
                        <button type="submit" class="btn btn-submit">Submit</button>
                    </form>
                </div>
                <div class="article-container article-output">
                    <article class="article article-right">
                        <span id="output"></span>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div class="section hidden-first" id="functions-two">
        <div class="container example-even">
            <div class="title-container">
                <h1 class="article-title">Functions and parameters</h1>
            </div>
            <div class="inner-container">
                <div class="subtitle-container subtitle-right">
                    <h4 class="sub-heading">Are able to input data into functions???</h4>
                    <article class="description">
                        <p>Yes! Data can be passed to functions to be either processed or used as a reference! </p>
                    </article>
                </div>
                <div class="article-container-left article-output">
                    <article class="article article-left">
                        <span id="output2"></span>
                    </article>
                </div>
                <div class="article-container-left article-example">
                    <article class="article article-left">
                        Here's an example of how arguments(parameters) can be used in a function;
                        if you are to input two (2) numbers in the fields below, a function will execute and add those
                        values. Give it a try!
                    </article>
                    <form id="userForm2">
                        <div class="form-flex-row">
                            <label for="num1">First Number: </label>
                            <input type="text" name="num1" class="input" id="input-number">
                        </div>
                        <div class="form-flex-row">
                            <label for="num2">Second Number: </label>
                            <input type="text" name="num2" class="input" id="input-number-two">
                        </div>
                        <div class="form-flex-row">
                            <button type="submit" class="btn submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="section hidden-first" id="functions-three">
        <div class="container example-odd">
            <div class="title-container">
                <h1 class="article-title">Reference to Arguments</h1>
            </div>
            <div class="inner-container">
                <div class="subtitle-container subtitle-left">
                    <h4 class="sub-heading">This here won't change!</h4>
                    <article class="description">
                        <p>Well... if you close the browser or clear your cookies and data that is!</p>
                    </article>
                </div>
                <div class="article-container article-example">
                    <article class="article article-right">
                        In this example, we will see how passing variables by reference can change the value
                        directly:
                    </article>
                    <form id="userForm3">
                        <label>
                            <input type="text" name="session" class="input" id="sess-input">
                        </label>
                        <button type="submit" class="btn btn-submit">Submit</button>
                    </form>
                </div>
                <div class="article-container article-output">
                    <article class="article article-right">
                        <span id="output3">
                            <?php
                                echo "&nbsp&nbsp The last session was: <br>";
                                if(isset($_SESSION["prev"])){
                                    echo $_SESSION["prev"];
                                }
                            ?>
                        </span>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <script src="./JS/navigation.js"></script>
    <script src="./JS/function-one.js"></script>
    <script src="./JS/function-two.js"></script>
    <script src="./JS/function-three.js"></script>
</body>
</html>