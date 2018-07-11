<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            if (!isset($_POST["gender"])) {
                $err = "No gender selected!";
            }
        }
     ?>
        <h1>Demo 2</h1>
    <form method="post">
        <input type="radio" name="gender" value="male">Male<br>
        <input type="radio" name="gender" value="female">Female
        <?php echo $err; ?>
        <br>
        <input type="submit" value="Send">
    <br>
    </form>
        
    </body>
</html>
