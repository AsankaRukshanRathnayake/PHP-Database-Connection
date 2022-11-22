<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <!--
    <link href="sample.css" rel="stylesheet" type="text/css" >
-->

<!-------------------------------------------------------------------->

<?php
    include "01.connection.php";

    $sql1 = "update login set role = 'student' where username='rath'";

    try{
    //to prepare
    $statement = $con->prepare($sql1);

    //to execute
    $statement->execute();

    echo "<br>The record was updated successfully.";

    }
    catch(PDOException $e){
        echo $e;
        echo "Error";
    }

?>

<!-------------------------------------------------------------------->

</head>

<body>

</body>

</html>