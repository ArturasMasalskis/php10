<?php

$host = 'localhost';
$dbname = 'age_of_wonders';
$username = 'root';
$password = '';

try {
  
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
  $stmt = $pdo->prepare('SELECT username FROM users');
  $stmt->execute();
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $pdo = null;
?>

<div class="grid-container">
  <?php foreach ($users as $user): ?>
    <div class="user-item">
      <i class="bi bi-emoji-laughing user-icon"></i>
      <span class="username"><?php echo $user['username']; ?></span>
    </div>
  <?php endforeach; ?>
</div>

<?php

} catch (PDOException $e) {
  
  die("Error: " . $e->getMessage());
}
?>