<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Selection</title>
</head>

<body>
    <?php

    $allMarks=array("Namal"=>array("OS"=>67, "Web"=>56, "CS"=>78),
                    "Kamal"=>array("OS"=>57, "Web"=>78, "CS"=>69),
                    "Sunimal"=>array("OS"=>85, "Web"=>69, "CS"=>92),
                    "Wimal"=>array("OS"=>95, "Web"=>43, "CS"=>76),
    );

    $marks=$allMarks["Namal"]["OS"];

    /*
    if ($marks>=0 && $marks<=40){
        echo "C<br>";
    }
    else if ($marks>40 && $marks<=60){
        echo "B<br>";
    }
    else if ($marks>60 && $marks<=80){
        echo "A<br>";
    }
    else if ($marks>80 && $marks<100){
        echo "A+<br>";
    }
    else{
        echo "Invalid<br>";
    }

    */

    switch ($marks){
        case $marks<=40:
            echo "C<br>";
            break;
        case $marks<=60:
            echo "B<br>";
            break;
        case $marks<=80:
            echo "A<br>";
            break;
        case $marks<=100:
            echo "A+<br>";
            break;
        default:
            echo "Invalid<br>";
    }

    for ($x=1 ; $x<=10 ; $x++){
        echo "<h$x>Hello</h$x>";
    }

    ?>
</body>


</html>