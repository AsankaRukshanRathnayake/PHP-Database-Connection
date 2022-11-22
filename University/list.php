<?php
    if (isset($_REQUEST["submit"])){
        $province=$_REQUEST["province"];

        $server="localhost";
        $username="root";
        $password="";
        $db="university";

        
        $connection=mysqli_connect($server,$username,$password,$db);

        if (!$connection){
            die("Error:".mysqli_error());
        }

        echo("Connected with database successfully");

}


/*

<?php action="$_SERVER["PHP_SELF"]";

include("bin/config.php");
$sql="SELECT*from province";
$stmt=$conn->prepare($sql);
$stmt->exectute();

//make the connection and list down the provinces
//what is the repeating art
//divide into php segments
//

?>

*/

?>

<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
<p>
Select Your Province : <select name = "province" size=1 exchange="this.from.submit()">
    <option value="1">Western</option>
    <option value="2">Central</option>
    <option value="3">Southern</option>
    <option value="4">Nothern</option>
    <option value="5">Eastern</option>
    <option value="6">North-Western</option>
    <option value="7">North-Central</option>
    <option value="8">Uva</option>
    <option value="9">Sabaragamuwa</option>
</select>
</p><br><br>

    <input type="submit" name="submit" value="Submit" action="LoginForm.php">
</form>


