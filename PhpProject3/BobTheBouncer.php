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
            $username = "root";
                $password = "";
                    $dbname = 'login try number 2';
                        $tbl_name="login";
                    
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }
        echo "Conected Successfully <br>";
        
        $username=$_POST['Brugernavn'];
        $password=$_POST['Adgangskode'];
        
        mysqli_select_db($conn, $dbname) or die ("It failed.");
            $sql = "SELECT * FROM $tbl_name Where Brugernavn='$username', Pasword='$password'";
                $result = $conn->query($sql);
                
        $count=mysqli_num_rows($result);
        
        if($count==1){
            echo 'We did it reddit';
        }
        else {
            echo 'You suck dick';
        }
        
        
        $conn->close();
                
        ?>
    </body>
</html>
