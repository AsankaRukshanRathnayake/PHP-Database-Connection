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

    $sql1 = "delete from login where username='ruk'";

    try{
    //to prepare
    $statement = $con->prepare($sql1);

    //to execute
    $statement->execute();

    echo "<br>The data was deleted.";

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