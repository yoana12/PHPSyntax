<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>User Table</title>
    </head>
    <body>
        <form method="GET">
        <input type="text" name="name" placeholder="Name..." style="display: block; margin: 5px;" />
        <input type="text" name="age" placeholder="Age..." style="display: block; margin: 5px;" />
        <input type="radio" name="sex" value="male"/>Male
        <input type="radio" name="sex" value="female"/>Female
        <input type="radio" name="sex" value="AWESOME"/>Awesome
        <input type="submit" name="submit" value="Submit" style="display: block; margin: 5px;"/>
        </form>
        <?php
            if (isset($_GET['submit'])){
                $name = $_GET['name'];
                $age = $_GET['age'];
                $sex = $_GET['sex'];
                
                echo "My name is $name. I am $age years old. I am $sex.";
            }
        ?>
    </body>
</html>
