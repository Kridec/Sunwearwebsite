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
        <form 
        <?php
        $servername = 'localhost';
        $conn = new mysqli($servername);
        if ($conn->connect_error) {
            die("Connection Failed:" . $conn->connect_error);
        }
        echo "Conected Successfully";
        $loginbrugernavn = $_POST["brugernavn"];
        $loginpassword = $_POST["password"];
        ?>
    </body>
</html>
