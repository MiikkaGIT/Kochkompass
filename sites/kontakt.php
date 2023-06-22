<?php
global $conn;
require '../module/dbconnect.php';

// Überprüfen, ob das Formular abgeschickt wurde
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Speichern der Nachricht in der Datenbank
    $sql = "INSERT INTO kontakte (name, email, subject, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        echo "Nachricht erfolgreich gesendet!";
    } else {
        echo "Fehler beim Speichern der Nachricht: " . $stmt->error;
    }
    $stmt->close();
}

// Verbindung zur Datenbank schließen
$conn->close();

$pageTitle = "Kontakt";
include '../module/navbar.php';
?>

<div class="kontakt">
    <form method="post" class="kontakt-container">
        <h1>Kontakt</h1>
        <input type="text" name="name" placeholder="Name" class="kontakt-input" required>
        <input type="email" name="email" placeholder="E-Mail" class="kontakt-input" required>
        <input type="text" name="subject" placeholder="Betreff" class="kontakt-input" required>
        <textarea name="message" placeholder="Nachricht" class="kontakt-input" required></textarea>
        <button type="submit" name="submit" class="kontakt-search-button"><i class="fa fa-paper-plane"></i> Nachricht
            senden
        </button>
    </form>
</div>

<?php include '../module/footer.php'; ?>
</body>
</html>
