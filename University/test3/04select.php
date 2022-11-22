<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Insert</title>
    <!--
    <link href="sample.css" rel="stylesheet" type="text/css" >
-->

<!-------------------------------------------------------------------->

<?php
    include "01.connection.php";

    $sql1 = "select * from login";

    try{
    //to prepare
    $statement = $con->prepare($sql1);

    //to execute
    $statement->execute();

    //fetch
    $table = $statement -> fetchAll();

    }
    catch(PDOException $e){
        echo $e;
        echo "Error";
    }

?>

<!-------------------------------------------------------------------->

</head>

<body>

    <table border="1" width="250">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Position</th>
        </tr>

        <?php

        foreach ($table as $record){
            echo "<tr>";
            echo "<td>".$record[0]."</td>";
            echo "<td>".$record[1]."</td>";
            echo "<td>".$record[2]."</td>";
            echo "<td>".$record[3]."</td>";
            echo "</tr>";
        }

        ?>



    </table>

</body>

</html>