<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <legend>Enter user name and age2</legend>
            <form action="index.php" method="post">
                Name <input autofocus type="text" name="txtName"/>
                <br>
                Age <input type="text" name="txtAge"/>
                <br>
                <select name="cars">
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="fiat" selected>Fiat</option>
                  <option value="audi">Audi</option>
                </select>
                <Br>
                <textarea name="message" rows="10" 
                          cols="30">
                The cat was playing in the garden.
                </textarea>
                <br>
                <input type="button" value="Click!" 
     onclick="alert('Hello World!')"></input>
                <br>
                <input type="password" size="15"/>
                <input type="reset"/>
                <br>
                <input  type="checkbox" name="vehicle1" value="Bike">
                I have a bike<br>
                <input type="checkbox" name="vehicle2" value="Car"> 
                I have a car <br>
                <input type="radio" name="gender" value="male" checked>Male<br>
                <input type="radio" name="gender" value="female"> Female
<br>
<input type="number" name="points"
       min="0" max="100" step="10" value="30">
<br>
<input type="range" name="points" min="0" max="10">
<br>
<input type="text" size="8" pattern="G[CBD]\s[^HS]\d{5}"/>

                <input type="submit" value="Send"/>
            </form>
        </fieldset>
        <?php
        if (isset($_POST["txtName"])) {
            $ten = $_POST["txtName"];
            $tuoi = $_POST["txtAge"];
            echo '<Br>' . strtoupper($ten) . ": " . $tuoi;
            echo "<br>" .$_POST["cars"];
            echo '<br> ban da chon Bike: ' .  $_POST["vehicle1"];
            echo 'gender: ' .  $_POST["gender"];
        }   
        ?>
    </body>
</html>
