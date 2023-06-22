<?php
global $conn;
require 'module/dbconnect.php';

// Neueste 5 Einträge aus der Tabelle "rezepte" abrufen
$sql = "SELECT * FROM rezepte ORDER BY id DESC LIMIT 5";
$result = $conn->query($sql);

// Überprüfen der Ergebnisse
if ($result->num_rows > 0) {
    // Ergebnisse auf der Webseite anzeigen
    $output = '';
    while ($row = $result->fetch_assoc()) {
        $output .= '<div class="flex-item" onclick="showRecipe(' . $row['id'] . ')">';
        $output .= '<h2>' . $row['name'] . '</h2>';
        $output .= '<img src="assets/img/' . $row['bild'] . '" alt="Bild des Rezepts">';
        $output .= '<p>' . $row['beschreibung'] . '</p>';
        $output .= '</div>';
    }
} else {
    $output = "Keine Einträge gefunden.";
}

// Verbindung zur Datenbank schließen
$conn->close();


$pageTitle = "Home";
include 'module/navbar.php'; ?>

<header>
    <div class="headText">
        <h2>Kochkompass</h2>
        <p class="subtitle">Kulinarische Inspiration für jeden Geschmack!</p>
    </div>
    <div class="headimg">
        <img src="assets/img/bowl.png" alt="Header-Bild"/>
    </div>
</header>

<div class="container2">
    <div class="flex-container">
        <?php echo $output; ?>
    </div>
    <a href="sites/rezeptsuche.php">
        <button class="button button1">Mehr Rezepte</button>
    </a>
</div>

<?php include 'module/footer.php'; ?>
</body>
<script>
    function showRecipe(recipeId) {
        // Weiterleitung zur Seite mit den vollständigen Informationen
        window.location.href = 'sites/rezept.php?id=' + recipeId;
    }
</script>
</html>
