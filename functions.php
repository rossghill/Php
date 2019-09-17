<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


    <?php
    // Passing in parameters
        function sayHi($name){
            echo "Hello $name <br>";
        }
        sayHi("Ross");
        sayHi("Dave");

    // Returning data    
        function cube($num){
            return $num * $num * $num;
        }

        echo cube(4),"<br>"; 

    // If statements
        $isMale = true;
        $isTall = true;

        if($isMale && $isTall){
            echo "You are a tall male";
        } else {
            echo "You are not male";
        } 

    ?>
</body>
</html>