<!DOCTYPE html>

<?php

if (isset($_REQUEST['submit'])){


$un=$_REQUEST['name'];
echo $un;

}

?>

<head>

</head>

<body>

<!--<form action = "<?php echo $_SERVER["PHP_SELF"]?>" method="POST">-->

<form action = "new.php" method="POST">

<label>Name: <input type = "text" name="name"></label>

<input type="submit" name="submit" value="Send">

</form>

</body>
