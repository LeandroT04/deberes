<?php
session_start();
if (!isset($_SESSION['views'])) {
    $_SESSION['views'] = 0;
}
$_SESSION['views'] = $_SESSION['views'] + 1;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contador de visitas</title>
</head>
<body>
    <h1>Has visitado esta página <?php echo $_SESSION['views']; ?> veces</h1>
    <a href="logout.php">Resetear contador</a>
</body>
</html>
