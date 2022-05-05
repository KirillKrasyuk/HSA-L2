<?php

phpinfo();

try {
    $conn = new PDO(
        "mysql:host=mysql;dbname=db",
        'admin',
        'admin'
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}