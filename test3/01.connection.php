<?php

/*
    include "connection.php";

*/
?>

<?php

    $server="localhost";
    $user="root";
    $password="";
    $db="university";


    try{

        $con=new PDO("mysql:host=$server;dbname=$db;charset=UTF8",$user,$password);
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //echo "Connected to the database successfully.<br>";
    }

    catch(PDOException $e){
        echo $e;
        echo "<br>Error in Connection";
    }
?>


