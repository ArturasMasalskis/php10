<?php

function dbConnect() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=age_of_wonders', 'root', '');
    } catch (PDOException $e) {
        die('Database Error: ' . $e->getMessage());
    }
}


$pdo = dbConnect();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    try {
        
        $stmt = $pdo->prepare('INSERT INTO users (username, password, email) VALUES (?, ?, ?)');
        $stmt->execute([$username, $password, $email]);

    
        echo '<script>window.location.href = "http://localhost/php10/index.php";</script>';
        exit;
    } catch (PDOException $e) {
        
        echo 'Database Error: ' . $e->getMessage();
    }
}
?>