<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Opgaver php</title>
    </head>
    <body>
        <?php
        echo 'Opgave 1<br>';
            $myVar=17;
                echo $myVar;
            $myVar=2;
                echo $myVar;
                    echo '<br>';
                    
                    
        echo 'Opgave 2<br>';
            $myName='Cedrik<br>';
                echo $myName;
            $myName='Cedrik Scheer Pedersen<br>';
                echo $myName;
                
                
        echo 'Opgave 3<br>';
            $var1=17;
            $var2=9;
            $var3=$var1+$var2;
                echo $var3;
                    echo '<br>';
                    
                    
        echo 'Opgave 4<br>';
            $myVar1='husk';
            $myVar2='at';
                echo $myVar1.$myVar2;    //konkatenering klistrer to tekststrenge sammen ved hjælp af .
                    echo '<br>';
                    
                    
        echo 'Opgave 5<br>';
            $minBy='frøbjerg';
                echo strlen($minBy);
                    echo '<br>';
                    
                    
        echo 'Opgave 1<br>';
            $alder=18;
                if ($alder<17)
                {
                    echo 'Du har ikke stemmeret';
                }
                    echo '<br>';
                    
                    
        echo 'Opgave 2<br>';
            $alder=16;
                if ($alder<17)
                {
                    echo 'Du har ikke stemmeret';
                }
                else
                {
                    echo 'Du har stemmeret';
                }
                    echo '<br>';
                    
                    
        echo 'Opgave 3<br>';
            $alder=20;
                if ($alder<17)
                { 
                    echo 'Du har ikke stemmeret';
                }
                else if ($alder == 17)
                {
                    echo 'Du har stemmeret om et år';
                }
                else
                {
                    echo 'Du har stemmeret';
                }
                    echo '<br>';
                    
                    
        echo 'Opgave 4<br>';
            $alder = rand(-100, 200);
                    if ($alder < 0 or $alder > 130){
                        echo 'Ugyldig alder';
                    }else if($alder<18){
                        echo 'Du får ungdomsrabat';
                    }else if($alder>18 and $alder<66){
                        echo 'Du får ingen rabat';
                    }else{
                        echo 'Du får pensionistrabat';
                    }
                    echo '<br>';
                    
        echo 'Opgave Switch<br>';
            $min=1;
            $max=6;
            $roman=(rand($min, $max));
            switch ($roman)
            {
                case 1:
                    echo 'I';
                    break;
                case 2:
                    echo 'II';
                    break;
                case 3:
                    echo 'III';
                    break;
                case 4:
                    echo 'IV';
                    break;
                case 5:
                    echo 'V';
                    break;
                case 6:
                    echo 'VI';
                    break;
                default:
                    echo 'Cedrik you dumb ass';
            }
            
            echo '<br>';
            echo 'Opgave 1';
            echo '<br>';
            $maks=10;
            $i=1;
            $sum=0;
            while ($i < 10)
            {
                                
                $sum=$i+$sum;
                $i++;
                
            }
            echo $sum;
            echo '<br>';
            $sum=0;
            $i=1;
                echo 'Opgave 2';
                do {
                    
                    $sum=$i+$sum;
                    $i++; 
                } while ($i < 10);
                echo '<br>';
                echo $sum;
                
                echo '<br>';
                echo 'Opgave 3';
                echo '<br>';
                    $sum=0;
                    $x=1;
                for ($x = 1; $x < 10; $x++){
                    $sum += $x;
                } echo $sum;
            
                
                
                echo '<br>';
            echo 'Opgave 4';
            echo '<br>';
            $maks=10;
            $i=10;
            $sum=0;
            while ($i < 10)
            {
                                
                $sum=$i+$sum;
                $i++;
                
            }
            echo $sum;
            $sum=0;
            $i=10;
                do {
                    
                    $sum=$i+$sum;
                    $i++; 
                } while ($i < 10);
                echo '<br>';
                echo $sum;
                
                echo '<br>';

                    $sum=0;
                    $x=10;
                for ($x = 1; $x < 10; $x++){
                    $sum += $x;
                } echo $sum;
                
                echo '<br>';
                echo 'Opgave 5';
                echo '<br>';
                
                
                
                
        ?>
    </body>
</html>
