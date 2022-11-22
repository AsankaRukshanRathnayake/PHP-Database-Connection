<!DOCTYPE html>

<head>
    <me.ta charset="utf-8">
    <title>Student Information</title>
</head>

<body>

    <?php

    if (isset($_REQUEST['submit'])){
        $name=$_REQUEST['username'];
        $age=$_REQUEST['age'];
        $city=$_REQUEST['city'];
        $color=$_REQUEST['color'];

        echo "Hi ".$name."<br>";
        echo $age."<br>".$city."<br>".$color."<br>";
    }

    ?>

    <form name="studentform" id="form1" method="post" action="<?php $_SERVER['PHP_SELF']?>">
        <table border="0" width="250" height="50">
            <tr>
                <td colspan="2" align="center">
                    <b>Student Information</b>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="username">Username</label>
                </td>
                <td>
                    <input type="text" name="username" placeholder="Enter your username" required>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="city">City</label>
                </td>
                <td>
                    <input type = "text" name="city" placeholder="Enter city you live in">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="age">Age</label>
                </td>
                <td>
                    <select name="age">
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29 or above</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="color" name="color"> 
                </td>
                <td>
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>

        </table>

    </form>
</body>

</html>