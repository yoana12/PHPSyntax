# PHPSyntax
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Print Tags</title>
    </head>
    <body>
        
        <form method="GET">
            <label>Enter Tags:</label><br />
            <input type="text" name="tags"/>
            <input type="submit" name="submit" value="Submit"/>
        </form>
        <?php
        if (isset($_SESSION['submit'])) {
            
            $text = $_SESSION['tags'];
            $textArr = (explode(", ", $text));
            
            foreach ($textArr as $key => $value) {
                echo "$key : $value<br />";
            }
        }
        ?>
    </body>
</html>
