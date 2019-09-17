<!-- Associative arrays allow you to work with key value pairs -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="associative_arrays.php" method="post">
        <input type="text" name="student">
        <input type="submit" value="submit">
    </form>

    <?php
        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar" =>"C+");
        // echo $grades["Jim"];
        echo $grades[$_POST["student"]];
    ?>
</body>
</html>