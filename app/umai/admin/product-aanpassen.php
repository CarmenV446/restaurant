

<?php
$connectie = new PDO('mysql:host=mysql_db;dbname=school', 'root', 'rootpassword');
$sql = $connectie->prepare("SELECT * FROM menu WHERE id = :idplaceholder");
$sql->bindParam(':idplaceholder', $_GET['id']);
$sql->execute();
$data = $sql->fetch();

if(isset($_POST['veranderen'])) {
    $sql = $connectie->prepare("
            UPDATE menu 
            SET categorie = :categorie, naam = :naam, beschrijving = :beschrijving, prijs= :prijs 
            WHERE id = :idph
            ");

// Haal ik alle velden op en vul ik de placeholders
    $sql->bindParam(':categorie', $_POST['categorie']);
    $sql->bindParam(':naam', $_POST['naam']);
    $sql->bindParam(':beschrijving', $_POST['beschrijving']);
    $sql->bindParam(':prijs', $_POST['prijs']);
    $sql->bindParam(':idph', $_GET['id']);
// Dan uitvoeren
    $sql->execute();

}
?>








<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Product Aanpassen — Umai 旨い</title>
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
        <span class="section-label">✦ Beheer — Product bewerken</span>
        <h1 class="page-title">Product<br><span class="green">Aanpassen</span></h1>
    </div>

    <!-- FORM -->
    <form method="POST">

        <input type="hidden" name="id" value=" <?php $data['id'] ?>; ?>"/>

        <div class="form-card">

            <div class="form-card-header">
                <span class="dot">✦</span>
                <span class="form-card-title">Product #<?php echo $data['naam'] ?> bewerken</span>
            </div>

            <div class="form-body">

                <!-- Naam + Categorie -->
                <div class="field-row">

                    <div class="field-group">
                        <label for="naam">Naam <span class="required">*</span></label>
                        <div class="field-wrap">
                            <input type="text" id="naam" name="naam" value="<?=  htmlspecialchars($data['naam']) ?>" required/>
                        </div>
                    </div>

                    <div class="field-group">
                        <label for="categorie">Categorie <span class="required">*</span></label>
                        <div class="field-wrap select-wrap">
                            <select id="categorie" name="categorie" required>
                                <!-- PHP: voeg selected toe waar $product['categorie'] overeenkomt -->
                                <option value="Ramen" selected>Ramen</option>
                                <option value="Small Plates">Small Plates</option>
                                <option value="Bao & Rice Bowls">Bao &amp; Rice Bowls</option>
                                <option value="Soepen & Noodles">Soepen &amp; Noodles</option>
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
                            <input type="number" id="prijs" name="prijs" value="<?php echo $data['prijs'] ?>" min="0" step="0.50" required/>
                        </div>
                    </div>

                    <div class="vegan-group">
                        <span class="main-label">Vegan</span>
                        <label class="toggle-row<?= $data['vega'] ? ' checked' : '' ?>" id="vegan-row">
                            <input type="checkbox" id="vegan" name="vegan" value="<?php if ($data['vega']): ?> checked <?php endif; ?>"/>
                            <div class="toggle-box"></div>
                            <div class="toggle-text">
                                <strong id="vegan-label">Niet vegan</strong>
                                <span>Klik om te wijzigen</span>
                            </div>
                        </label>
                    </div>

                </div>

                <!-- Beschrijving -->
                <div class="field-group">
                    <label for="beschrijving">Beschrijving</label>
                    <div class="field-wrap">
                        <textarea id="beschrijving" name="beschrijving"><?php echo $data['beschrijving'] ?></textarea>
                    </div>
                </div>

            </div>

            <!-- FOOTER -->
            <div class="form-footer">
                <a href="admin.php" class="btn btn-outline">Annuleren</a>
                <button type="submit" name="veranderen" value="veranderen" class="btn btn-primary">✦ Wijzigingen Opslaan</button>
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

<script>
    // Vegan toggle — synchroon met checkbox state (PHP vult 'checked' in)
    var veganRow   = document.getElementById('vegan-row');
    var veganCheck = document.getElementById('vegan');
    var veganLabel = document.getElementById('vegan-label');

    function syncToggle() {
        veganRow.classList.toggle('checked', veganCheck.checked);
        veganLabel.textContent = veganCheck.checked ? '🌱 Vegan' : 'Niet vegan';
    }

    syncToggle(); // beginstaat instellen

    veganRow.addEventListener('click', function () {
        veganCheck.checked = !veganCheck.checked;
        syncToggle();
    });
</script>
</body>
</html>
