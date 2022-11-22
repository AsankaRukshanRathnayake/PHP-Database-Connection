<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Insert</title>
    <!--
    <link href="sample.css" rel="stylesheet" type="text/css" >
-->

<!-------------------------------------------------------------------->

<?php

if (isset($_REQUEST['submit'])){
    $name=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $role=$_REQUEST['role'];

    echo "$name $password $role";
}

?>

<?php
    include "01.connection.php";

    $sql1 = "insert into login (username, password, role) values('$name','$password','$role')";

    try{
    //to prepare
    $statement = $con->prepare($sql1);

    //to execute
    $statement->execute();

    echo "Data was entered successfully<br><br>";

    }
    catch(Exception $e){
        echo "Error";
    }

?>


<!-------------------------------------------------------------------->

</head>

<body>
    <!--

    <form name="form1" method="post" action="03insert.php">

    <!-- from this page to next page

    <input type="hidden" 
        name="hname" 
        value="<?php //echo $name 
        ?>
    >

    </form>
-->


</body>

</html>