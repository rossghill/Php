<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $friends = array("Nick", "Emily", "Graeme");
        $friends[2] = "Michael";
        echo $friends[0];
        echo count($friends);
    ?>
</body>
</html>