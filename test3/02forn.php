<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Form</title>
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




<!-------------------------------------------------------------------->

</head>

<body>
    <!--
        <form name="form1" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
-->

    <form name="form1" method="post" action="03insert.php">

    <!--Username-->
    <label for="username">Username : </label>
    <input type="text" name="username" placeholder="Enter username" required>
    <br><br>

    <!--Password-->
    <label for="password">Password : </label>
    <input type="password" name="password" placeholder="Enter password" required>
    <br><br>

    <!--Position-->
    <label for="role">Role : </label>
    <select name="role" required>
        <option value="student">Student</option>
        <option value="lecturer">Lecturer</option>
        <option value="admin">Admin</option>
</select>
    <br><br>

    <!--SUBMIT-->
    <input type="submit" name="submit" value="SUBMIT">

</form>

</body>

</html>