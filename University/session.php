<?php
session_start();

<?php
    session_start();
    if (isset($_SESSION["loggedUserName"])){
        $loggedUser = $_SESSION["loggedUserName"];
        echo $loggedUser
    }

    unset($_SESSION) //--

    else{
        header("Location: login.php");
    }