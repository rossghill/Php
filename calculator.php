<!DOCTYPE html>
    <head>
        <meta charset="utf-8">

        <title></title>
        <link rel="stylesheet" href="">
    </head>
    <body>
    <h1>Calculator<h1>
    <form action="calculator.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit">

    </form>

    <?php echo $_GET["num1"] + $_GET["num2"]?>
    </body>
</html>