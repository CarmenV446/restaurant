<?php
$connectie = new PDO('mysql:host=mysql_db;dbname=school', 'root', 'rootpassword');
$sql = $connectie->prepare("SELECT * FROM menu");
$sql->execute();
$result = $sql->fetchAll();
?>

<?php
if (isset($_POST['toevoegen'])) {
    $connectie = new PDO('mysql:host=mysql_db;dbname=school', 'root', 'rootpassword');
    $sql = $connectie->prepare("INSERT INTO menu (categorie, naam, beschrijving, prijs) VALUES (:categorie, :naam, :beschrijving, :prijs)");
    $sql->bindValue(':categorie', $_POST['categorie']);
    $sql->bindValue(':naam', $_POST['naam']);
    $sql->bindValue(':beschrijving', $_POST['beschrijving']);
    $sql->bindValue(':prijs', $_POST['prijs']);
    $sql->execute();
}
?>




<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Product Toevoegen — Umai 旨い</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"/>
    <link href="product-aanpassen.css" rel="stylesheet"/>

</head>
<body>

<!-- NAV -->
<nav>
    <a href="../../index.php" class="nav-logo">
        <span class="kanji">旨い · Masarap · 맛있어</span>
        <span class="brand">Umai</span>
    </a>
    <div class="nav-right">
        <span class="nav-tag">✦ Admin</span>
        <a href="admin.php" class="nav-link">← Terug naar overzicht</a>
    </div>
</nav>

<!-- MAIN -->
<main>

    <!-- HEADER -->
    <div class="page-header">
        <span class="section-label">✦ Beheer — Nieuw product</span>
        <h1 class="page-title">Product<br><span class="green">Toevoegen</span></h1>
    </div>

    <!-- FORM -->
    <form method="POST">

        <div class="form-card">

            <div class="form-card-header">
                <span class="dot">✦</span>
                <span class="form-card-title">Nieuw product invullen</span>
            </div>

            <div class="form-body">

                <!-- Naam + Categorie -->
                <div class="field-row">

                    <div class="field-group">
                        <label for="naam">Naam <span class="required">*</span></label>
                        <div class="field-wrap">
                            <input type="text" id="naam" name="naam" placeholder="bv. Tonkotsu Ramen" required/>
                        </div>
                    </div>

                    <div class="field-group">
                        <label for="categorie">Categorie <span class="required">*</span></label>
                        <div class="field-wrap select-wrap">
                            <select id="categorie" name="categorie" required>
                                <option value="" disabled selected>Kies een categorie</option>
                                <option value="Ramen">Ramen</option>
                                <option value="Small Plates">Small Plates</option>
                                <option value="Bao & Rice">Bao &amp; Rice Bowls</option>
                                <option value="Soepen">Soepen &amp; Noodles</option>
                                <option value="Desserts">Desserts</option>
                                <option value="Dranken">Dranken</option>
                            </select>
                        </div>
                    </div>

                </div>

                <!-- Prijs + Vegan -->
                <div class="field-row">

                    <div class="field-group">
                        <label for="prijs">Prijs (€) <span class="required">*</span></label>
                        <div class="field-wrap">
                            <input type="number" id="prijs" name="prijs" placeholder="0.00" min="0" step="0.50" required/>
                        </div>
                    </div>



                </div>

                <!-- Beschrijving -->
                <div class="field-group">
                    <label for="beschrijving">Beschrijving</label>
                    <div class="field-wrap">
                        <textarea id="beschrijving" name="beschrijving" placeholder="Omschrijf het gerecht…"></textarea>
                    </div>
                </div>

            </div>

            <!-- FOOTER -->
            <div class="form-footer">
                <a href="admin.php" class="btn btn-outline">Annuleren</a>
                <button name="toevoegen" type="submit" class="btn btn-primary">＋ Product Toevoegen</button>
            </div>

        </div>

    </form>

</main>

<!-- MARQUEE -->
<div class="marquee-band">
    <div class="marquee-track">
        <span>Tonkotsu Ramen</span><span class="dot">✦</span>
        <span>Halo-Halo Sundae</span><span class="dot">✦</span>
        <span>Bulgogi Bao</span><span class="dot">✦</span>
        <span>Ube Latte</span><span class="dot">✦</span>
        <span>Adobo Ramen</span><span class="dot">✦</span>
        <span>Matcha Tiramisu</span><span class="dot">✦</span>
        <span>Tonkotsu Ramen</span><span class="dot">✦</span>
        <span>Halo-Halo Sundae</span><span class="dot">✦</span>
        <span>Bulgogi Bao</span><span class="dot">✦</span>
        <span>Ube Latte</span><span class="dot">✦</span>
        <span>Adobo Ramen</span><span class="dot">✦</span>
        <span>Matcha Tiramisu</span><span class="dot">✦</span>
    </div>
</div>


</body>
</html>
