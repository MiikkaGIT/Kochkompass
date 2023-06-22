<?php
global $conn;
include '../module/dbconnect.php';

// Initialisierung der Variablen
$row = null;

// Überprüfen, ob eine Rezept-ID übergeben wurde
if (isset($_GET['id'])) {
    $recipeId = $_GET['id'];

    // Rezeptdaten aus der Datenbank abrufen
    $sql = "SELECT * FROM rezepte WHERE id = $recipeId";
    $result = $conn->query($sql);

    // Überprüfen der Ergebnisse
    if ($result->num_rows > 0) {
        // Rezeptinformationen abrufen
        $row = $result->fetch_assoc();
    }
}

// Verbindung zur Datenbank schließen
$conn->close();

$pageTitle = $row ? $row['name'] : '';
include '../module/navbar.php';
?>

<!-- Hier kannst du das Layout für die Rezeptdetails-Seite gestalten -->
<div class="rezept-container">
    <?php if ($row) { ?>
        <div class="rezept-bild">
            <img src="../assets/img/<?php echo $row['bild']; ?>" alt="Bild des Rezepts">
        </div>

        <div class="rezept-details">
            <h1><?php echo $row['name']; ?></h1>
            <p><?php echo $row['beschreibung']; ?></p>
            <table>
                <tr>
                    <th>Nährwerte</th>
                    <th>Menge</th>
                </tr>
                <tr>
                    <td>Energie</td>
                    <td><?php echo $row['energie']; ?></td>
                </tr>
                <tr>
                    <td>Fett</td>
                    <td><?php echo $row['fett']; ?></td>
                </tr>
                <tr>
                    <td>Kohlenhydrate</td>
                    <td><?php echo $row['kohlenhydrate']; ?></td>
                </tr>
                <tr>
                    <td>Eiweiß</td>
                    <td><?php echo $row['eiweiß']; ?></td>
                </tr>
            </table>
        </div>
    <?php } ?>
</div>

<?php include '../module/footer.php'; ?>
</body>
</html>
