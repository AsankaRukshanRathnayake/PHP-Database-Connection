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

        <br><br>

        <!--<a href="contactinfo.php">Contact Us</a>
    -->

        <form name="from2" method="post" action="contactinfo.php">
           
        <label for="Password">Password</label>
        <input type="password" name="pw" placeholder="Enter password" required>
        
        <br><br>

        <label for="duration">Course Duration</label>
        </label><br>
        <input type="radio" name="duration" value="3">
        <label for="duration">3-year</label><br>
    
        <input type="radio" name="duration" value="4">
        <label for="duration">4-year</label><br>
    
        <input type="radio" name="duration" value="5">
        <label for="duration">5-year</label><br>
    
        
        <br><br>

        <input type="hidden" name="hname" value="<?php echo $name ?>">

        <input type="submit" name="submit" value="Submit">

    </form>

    </body>




</html>