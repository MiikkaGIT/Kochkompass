<?php
global $conn;
require_once '../module/dbconnect.php';

// Überprüfen, ob eine Suchanfrage gesendet wurde
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];
    $sql = "SELECT * FROM rezepte WHERE name LIKE '%$searchTerm%'";
} else {
    // Keine Suchanfrage gesendet, alle Einträge laden
    $sql = "SELECT * FROM rezepte ORDER BY id DESC";
}

$result = $conn->query($sql);
$output = '';

// Überprüfen der Ergebnisse
if ($result->num_rows > 0) {
    // Ergebnisse auf der Webseite anzeigen
    while ($row = $result->fetch_assoc()) {
        $output .= '<div class="flex-item" onclick="showRecipe(' . $row['id'] . ')">';
        $output .= '<h2>' . $row['name'] . '</h2>';
        $output .= '<img src="../assets/img/' . $row['bild'] . '" alt="Bild des Rezepts">';
        $output .= '<p>' . $row['beschreibung'] . '</p>';
        $output .= '</div>';
    }
} else {
    $output = "Keine ";
    $output .= isset($_POST['search']) ? "Ergebnisse" : "Einträge";
    $output .= " gefunden.";
}

// Verbindung zur Datenbank schließen
$conn->close();

$pageTitle = "Rezeptsuche";
include '../module/navbar.php';
?>

<div class="container">
    <div class="search">
        <div class="rezeptsuche-suche">
            <h1>Rezeptesuche</h1>
            <form method="post" class="rezeptsuche-suchform">
                <input type="text" name="search" placeholder="Suchen..." class="rezeptsuche-search-bar">
                <button type="submit" class="rezeptsuche-search-button">Suchen <i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    <div class="container2">
        <h2>Suchergebnisse</h2>
        <div id="myUL" class="flex-container">
            <?= $output ?>
        </div>
    </div>
    <?php include '../module/footer.php'; ?>
</div>

<script>
    function showRecipe(recipeId) {
        // Weiterleitung zur Seite mit den vollständigen Informationen
        window.location.href = 'rezept.php?id=' + recipeId;
    }
</script>
</body>
</html>
