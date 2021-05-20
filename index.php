<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>
        </title>
    </head>
    <body>
    
    <?php
    include "header.php";
        echo "Hello World.";
        ?>
        <p>This is a calculator.</p>
        <?php
            echo "<p>This is a simple calculator.</p>";
        ?>
    <form action="functions.php" method="get">
        <input type="text" name="num01" placeholder="Number 1">
        <select name="oper">
            <label>Choose operation!</label>
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="mult">Multiply</option>
            <option value="divi">Divide</option>
        </select>
            <input type="text" name="num02" placeholder="Number 2">
            <button type="submit">Calculate!</button>
    </form>



        <?php
        /*include 'test.php';
        echo $a;*/
        ?>
       
        <p>Please enjoy this calculator.</p>
        <?php
            echo "Thanks for using this simple calculator.";
        ?>

    </body>
</html>