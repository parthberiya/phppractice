<?php        
        $server_name = 'db';  
        $user_name = 'wordpress';     
        $password = 'wordpress';  
        $database_name= 'wordpress';

        $conn = mysqli_connect($server_name , $user_name , $password , $database_name);
        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?> 