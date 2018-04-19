<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        $servername = 'localhost';
            $username = 'root';
                $password = '';
                    $dbname = 'login try number 2';
        
        $conn = new mysqli($servername, $username, $password);
        
        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }
        echo "Conected Successfully";
        
        mysqli_select_db($conn, $dbname) or die ("It failed.");
            $sql = "Select ID, Fornavn, Efternavn from login";
                $result = mysqli_query($conn, $sql);
        
        $myusername = stripcslashes($myusername);
            $mypassword = stripcslashes($mypassword);
                $myusername = mysql_real_escape_string($myusername);
                        $mypassword = mysql_real_esacpe_string($mypassword);
         
        ?>
    </body>
</html>
