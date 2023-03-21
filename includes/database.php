<?php
    include'../sys/config.php';

    $conn = new mysqli( hostname: $host,
                        username: $username, 
                        password: $password, 
                        database: $dbname
                      );
    if($conn->connect_errno)
    {
        die("Connection failed" . $conn->connect_error);
    }

    return $conn;
