<?php        
        $host = 'db';  
        $user = 'wordpress';     
        $pass = 'wordpress';  
        $dbname = 'wordpress';

        $conn = mysqli_connect($host, $user, $pass, $dbname);
        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>