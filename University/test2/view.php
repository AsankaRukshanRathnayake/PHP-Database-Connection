<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>View Info</title>
</head>

    <body>
        <h1>View Information</h1>

        <?php
        
        if (isset($_REQUEST['submit'])){
            $name=$_REQUEST['username'];
            echo $name;
        }

        ?>

    </form>

    </body>




</html>