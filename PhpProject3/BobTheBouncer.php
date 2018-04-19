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
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }
        echo "Conected Successfully <br>";
        
        mysqli_select_db($conn, $dbname) or die ("It failed.");
            $sql = "Select LoginID, Brugernavn, Pasword from login";
                $result = $conn->query($sql);
                
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["LoginID"]. " - Brugernavn: ". $row["Brugernavn"]. " - Adgangskode: ". $row["Pasword"]. "<br>";
            }
        } else {
            echo '0 resultater';
        }
        $conn->close();
                
        ?>
    </body>
</html>
