<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
    Password: <input type="password" name="password" id="">
    <input type="submit">
    </form>
    <?php 
    // Post is more secure than Get because it doesn't show information
    // as a URL Parameter
        echo $_POST["password"];
    ?>
</body>
</html>