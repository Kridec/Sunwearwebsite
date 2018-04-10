<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Best quiz in the world</title>
        <style>
            h1 {
                text-align: center;
                   font-size: 32px;
                       font-family: "Times New Roman", Times, serif;
            }
            
        </style>
    </head>
    <body>
        <h1>WORLD CAPITALS</h1>
        
        <?php
        $xml= simplexml_load_file("Hello.xml") or die("you dumbass");
            $s_1= $xml->spørgsmål[0]->spørgsmål_1 . "<br>" ;
            $svar1= $xml->spørgsmål[0]->svar_1 ;
            $svar2= $xml->spørgsmål[0]->resultat ;
            $svar3= $xml->spørgsmål[0]->svar_3 ;
        
            $s_2= $xml->spørgsmål[1]->spørgsmål_2 . "<br>" ;
            $svar4= $xml->spørgsmål[1]->svar_1 ;
            $svar5= $xml->spørgsmål[1]->resultat ;
            $svar6= $xml->spørgsmål[1]->svar_3 ;
        
            $s_3= $xml->spørgsmål[2]->spørgsmål_3 . "<br>" ;
            $svar7= $xml->spørgsmål[2]->svar_1 ;
            $svar8= $xml->spørgsmål[2]->resultat ;
            $svar9= $xml->spørgsmål[2]->svar_3 ;
           
          
        ?>
        
        <fieldset>
            <form action="/Haumt.php" method="post" enctype="multipart/form-data"> 
                <p><?php echo $s_1; ?></p>
            
                    <input type="radio" name="s[0]" value="<?php echo $svar1; ?>" > <?php echo $svar1; ?><br>
                    <input type="radio" name="s[0]" value="<?php echo $svar2; ?>"> <?php echo $svar2; ?><br>
                    <input type="radio" name="s[0]" value="<?php echo $svar3; ?>"> <?php echo $svar3; ?>
        </fieldset>
        <fieldset>
                <p><?php echo $s_2; ?></p>
                    <input type="radio" name="s[1]" value="<?php echo $svar4; ?>" > <?php echo $svar4; ?><br>
                    <input type="radio" name="s[1]" value="<?php echo $svar5; ?>"> <?php echo $svar5; ?><br>
                    <input type="radio" name="s[1]" value="<?php echo $svar6; ?>"> <?php echo $svar6; ?>
        </fieldset>
        <fieldset>
            <p><?php echo $s_3; ?></p>
        
                    <input type="radio" name="s[2]" value="<?php echo $svar7; ?>" > <?php echo $svar7; ?><br>
                    <input type="radio" name="s[2]" value="<?php echo $svar8; ?>"> <?php echo $svar8; ?><br>
                    <input type="radio" name="s[2]" value="<?php echo $svar9; ?>"> <?php echo $svar9; ?>
        </fieldset>
        
            <br>
                <input type="submit" name="submit" value="See mayo"
        </form>
    </body>
</html>
