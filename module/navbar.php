<!DOCTYPE html>
<html lang="de">
<head>
    <title>Kochkompass -
        <?php
        global$pageTitle;
        echo $pageTitle; ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar">
    <a href="../index.php" class="logo">Kochkompass</a>
    <div class="menu-toggle">
        <div class="burger"></div>
    </div>
    <ul class="nav">
        <li><a href="../index.php">Startseite</a></li>
        <li><a href="../sites/rezeptsuche.php">Rezepte</a></li>
        <li><a href="../sites/kontakt.php">Kontakt</a></li>
        <li class="search-container">
            <input type="text" placeholder="Suchen..." class="search-bar">
            <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
        </li>
    </ul>
</nav>