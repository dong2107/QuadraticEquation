<?php
include_once 'QuadraticEquation.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="cal.php" method="post">
    <label>A</label>
    <input type="number" name="numbera" style="width: 50px"/>
    <label>B</label>
    <input type="number" name="numberb" style="width: 50px"/>
    <label>C</label>
    <input type="number" name="numberc" style="width: 50px"/>
    <input type="submit" value="="/>
</form>
</body>
</html>