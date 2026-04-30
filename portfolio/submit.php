<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Paglimpyo sa data gikan sa form
    $name = strip_tags(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($message)) {
        // Paggamit og Prepared Statements para sa seguridad
        $stmt = $pdo->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        
        if ($stmt->execute([$name, $email, $message])) {
            echo "<script>alert('Salamat, Paulo! Nadawat na ang imong mensahe.'); window.location.href='index.php';</script>";
        } else {
            echo "Naay error sa pag-save sa data.";
        }
    } else {
        echo "Palihog fill-up sa tanan fields.";
    }
}
?>