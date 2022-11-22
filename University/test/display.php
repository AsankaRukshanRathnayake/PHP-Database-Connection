<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Stduent Information</title>
</head>

<body>
    <?php

    $uname=$_REQUEST['username'];
    $ucity=$_REQUEST['city'];
    $uage=$_REQUEST['age'];
    $ucolor=$_REQUEST['color'];

    echo "$uname<br>$ucity<br>$uage<br>$ucolor";

    ?>
</body>


</html>