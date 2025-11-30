<?php
require_once __DIR__ . '/database.php';

$db = new Database();
$conn = $db->getConnection();

if ($conn) {
    echo "<h2 style='color:green;'>✔ Connexion réussie !</h2>";
} else {
    echo "<h2 style='color:red;'>✖ Connexion échouée.</h2>";
}
