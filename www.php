<!-- Learning PHP 
Integrates with HTML, server-side language -->

<!-- Setup and Variables-->
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
    $name = "Ross";
    $age = 31;

    echo "<h1>Hello World! My name is $name and I'm $age</h1>";
    echo "<hr>";
    echo "<p>This is PHP, love $name</p>";

// |*=* Data Types *=*|

    // String
    $phrase = "To be or not to be";
    // Integer
    $age = 23;
    // Float
    $gpa = 30.3;
    // Boolean
    $isTrue = false; 
    // Null - no value
    $null = null;

// |*=* Strings *=*|

    $phrase = "Giraffe Academy";

    // Convert to lower case
    echo strtolower($phrase),"<br>";
    // Convert to upper case
    echo strtoupper(" dog "),"<br>";
    // String length
    echo strlen($phrase),"<br>";
    // String index
    echo $phrase[2],"<br>";
    // Replace substring - string to change, what to change it to, var
    echo str_replace("Giraffe", "Panda", $phrase),"<br>";
    // Substring
    echo substr($phrase, 8, 3),"<br>";

// |*=* Numbers *=*|

    echo "<hr>";
    echo 5 + 9,"<br>";
    echo 10 % 3,"<br>";
    $num = 10;
    echo $num++,"<br>";
    echo $num += 25,"<br>";

    // Absolute value
    echo abs(-100),"<br>";
    // Number squared
    echo pow(3,5);
    // Number square root
    echo sqrt(24);
    // Max of two given numbers
    echo max (2,10);
    // Round
    echo round(3.7);
    // Ceiling - always rounds up
    // Floor - always rounds down

// |*=* Getting user input *=*|  
    echo"<hr>"

    ?>
    <form action="www.php" method="get">
        Name: <input type="text" name="name">
        <input type="submit">

    </form>  
    <!-- Gets the value from the associated input and echos it to the page -->
    Your name is <?php echo $_GET["name"] ?>  
</body>
</html>