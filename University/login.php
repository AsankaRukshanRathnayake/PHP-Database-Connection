<?php
    session_start();
    if (isset($_SESSION["loggedUserName"])){
        $loggedUser = $_SESSION["loggedUserName"];
        echo $loggedUser
    }





<!DOCTYPE html>
<head>
    <title>Login</title>
</head>

<body>
    <p style="align:center">Login</p>

    <?php



</body>

</html>

else{
    header("Location: login.php");
}


