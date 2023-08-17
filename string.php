<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kathir</h1>
    <?php
    echo strlen("My name is kathir");
    ?><br>
    <?php
    echo str_word_count("My name is kathir");
    ?><br>
    <?php
    echo strrev("My name is kathir");
    ?><br>
    <?php
    echo strpos("My name is kathir","kathir");
    ?><br>
    <?php
    echo str_replace("kathir","kavin","My name is kathir");
    ?>
</body>
</html>