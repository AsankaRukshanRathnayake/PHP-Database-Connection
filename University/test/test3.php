<!DOCTYPE html>
<head>
    <title>test3</title>
    <meta charset="utf-8">
</head>

<body>
<?php
    $names = array("Namal","Kamal","Sunil","Kumari","Udari");
    $marks = array(75,85, 62, 70, 77);
?>

<table width="250" border="1">
    <tr>
        <th>Name</th>
        <th>Marks</Marks>
    </tr>

    <?php

    for ($x=0; $x<5 ; $x++){
        echo "<tr>
        <td>$names[$x]</td>
        <td>$marks[$x]</td>
        </tr>";
    }

    ?>


</table>

<br><br>
<label>Select any person to continue. </label>
<select name="student">
    <?php
        for ($x=0 ; $x<5 ; $x++){
            echo "<option>$names[$x]</option>";
        }
    ?>
</select>

<br><br>

<?php
    foreach($names as $student){
        echo $student."<br>";
    }


?>







</body>



</html>