<!DOCTYPE html>

<head>
    <title>test</title>
</head>

<body>
    <?php

    echo "There are 3 types of arrays in PHP <br>";
    echo "1. Numeric Arrays - Use numeric indexes <br>";
    echo "2. Associative arrays - Use String type indexes <br>";
    echo "3. Multidimensional Arrays <br>";

    echo "<br><br>";
    echo "<h2> 1. Numeric Arrays </h2>";

    $marks=array(85,56,78,92,34);
    var_dump($marks);

    echo "<br><br>";
    echo "<h2> 2. Associative Arrays </h2>";

    $marks2=array("Namal"=>43, "Kamal"=>67, "Wimal"=>56, "Sunimal"=>48);
    var_dump($marks2);

    echo "<br><br>";
    echo "<h2> 2. Multidimensional Arrays </h2>";

    $allMarks=array("Namal"=>array("OS"=>67, "Web"=>56, "CS"=>78),
                    "Kamal"=>array("OS"=>57, "Web"=>78, "CS"=>69),
                    "Sunimal"=>array("OS"=>85, "Web"=>69, "CS"=>92),
                    "Wimal"=>array("OS"=>95, "Web"=>43, "CS"=>76),
            );

    var_dump($allMarks);


    ?>
</body>

</html>