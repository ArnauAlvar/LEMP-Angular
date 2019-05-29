<?php
$dsn = 'mysql:host=lemp-mariadb;dbname=hw';
$username="root";
$password="root";

$pdo = new \PDO($dsn, $username, $password);

$databases = $pdo->query('SHOW DATABASES')->fetchAll(PDO::FETCH_COLUMN);

echo '<h1>Databases: </h1>';
echo '<p>Running SQL query <code>SHOW DATABASES;</code></p>';

echo '<ul>';
foreach ($databases as $database) {
    echo '<li>' . $database . '</li>';
}
echo '</ul>';

phpinfo();
?>

