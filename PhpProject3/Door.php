<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ma'lady</title>
        <style>
            first {
                align-items: center;
            }
        </style>
    </head>
    <body>
        <form action="BobTheBouncer.php" method="post">
            <div id='First'>
            <label for="Brugernavn">Brugernavn:</label>
                <br>
            <input name="Brugernavn" type="brugernavn" id="Brugernavn">
            </div>
            
            <div id="Adgangskode">
                <label for="Adgangskode">Adgangskode:</label>
                <br>
            <input name="Adgangskode" type="adgangskode" id="Adgangskode">
            </div>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
