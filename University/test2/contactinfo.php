<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Contacts</title>
</head>

<body>
    <h1>Contact Information</h1>

    <?php

    if (isset($_REQUEST['submit'])){
        $name=$_REQUEST['hname'];
        $duration=$_REQUEST['duration'];

        echo $name."<br>".$duration;
    }

    ?>


</body>



</html>