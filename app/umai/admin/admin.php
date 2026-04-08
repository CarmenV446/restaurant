<?php
session_start();
if(!isset($_SESSION['isIngelogd']) || $_SESSION['isIngelogd'] == false) {
    header("location: login.php");
}
?>

<?php
$connectie = new PDO('mysql:host=mysql_db;dbname=school', 'root', 'rootpassword');
$sql = $connectie->prepare("SELECT * FROM menu");
$sql->execute();
$result = $sql->fetchAll();
?>

<?php
if (isset($_POST['verwijderen'])) {
    $connectie = new PDO('mysql:host=mysql_db;dbname=school', 'root', 'rootpassword');
    $sql = $connectie->prepare("DELETE FROM menu WHERE id = :id");
    $sql->bindParam(':id', $_POST['delete_id']);
    $sql->execute();
}
?>



<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admin — Umai 旨い</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"/>
    <link href="admin.css" rel="stylesheet" />

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
        <a href="login.php" class="nav-link">← Uitloggen</a>
    </div>
</nav>

<!-- MAIN -->
<main>

    <!-- HEADER -->
    <div class="page-header">
        <div class="page-header-left">
            <span class="section-label">✦ Beheer — Productenoverzicht</span>
            <h1 class="page-title">Producten<br><span class="green">Overzicht</span></h1>
        </div>
        <div class="page-header-actions">
            <a href="product-toevoegen.php" class="btn btn-primary">＋ Product Toevoegen</a>
        </div>
    </div>

    <!-- STATS -->
    <div class="stats-bar">
        <div class="stat-card">
            <span class="stat-label">Totaal producten</span>
            <!-- PHP: -->
            <span class="stat-value"><?php
               echo count($result)
            ?>
            </span>
        </div>

        <div class="stat-card">
            <span class="stat-label">Categorieën</span>
            <span class="stat-value">
                  <?php
                  $sql = $connectie->prepare("SELECT COUNT(DISTINCT categorie) FROM menu");
                  $sql->execute();
                  $cat = $sql->fetchColumn();
                  echo $cat;
                  ?>
            </span>
        </div>
        <form method="get" class="form-main" action="admin.php">
            <div class="form-box">
                <input class="form-text" type="text" id="search" name="search" placeholder="search..">
            </div>
            <input class="form-button" name="submit" type="submit" value="Submit">
        </form>
        <?php
        if (isset($_GET['submit'])) {
            $sql = $connectie->prepare("SELECT * FROM menu WHERE naam LIKE :search");
            $sql->bindValue(':search', '%' . $_GET['search'] . '%');
            $sql->execute();
            $result = $sql->fetchAll();
        } else {
            $sql = $connectie->prepare("SELECT * FROM menu");
            $sql->execute();
            $result = $sql->fetchAll();
        }

        ?>
    </div>

    <!-- PRODUCT LIST -->
    <div class="table-wrapper">
        <div class="table-header">
            <span class="table-title">
                <span class="dot">✦</span> Alle producten
            </span>
            <span class="product-count"><?php
                echo count($result)
                ?> producten</span>
        </div>

        <div class="product-list">

             <?php foreach ($result as $menuItem){?>

            <div class="product-row">
                <span class="product-emoji">
                    <?php
                    if($menuItem["categorie"] == "Ramen"){
                        echo "🍜";
                    }
                    elseif ($menuItem["categorie"] == "Soepen"){
                        echo "🍲";
                    }
                    elseif ($menuItem["categorie"] == "Desserts"){
                        echo "🍦";
                    }
                    elseif ($menuItem["categorie"] == "Bao & Rice"){
                        echo "🍚";
                    }
                    elseif ($menuItem["categorie"] == "Dranken"){
                        echo "🍵";
                    }
                    elseif ($menuItem["categorie"] == "Small Plates"){
                        echo "🍡";
                    }
                    ?>
                    </span>
                <div class="product-info">
                    <span class="product-name">
                        <?php
                        echo $menuItem['naam'];
                        ?>
                    </span>
                    <span class="product-category">
                        <?php
                        echo $menuItem['categorie'];
                        ?>
                    </span>
                </div>
                <span class="product-price">€
                    <?php
                    echo $menuItem['prijs'];
                    ?>
                </span>
                <div class="product-actions">
                    <a href="product-aanpassen.php?id=<?php
    echo $menuItem['id'];
    ?>" class="btn btn-edit">✎ Aanpassen</a>
                    <button class="btn btn-danger" onclick="askDelete('<?php echo $menuItem['naam'] ?>')">✕ Verwijderen</button>
                    <form method="post" action="admin.php" class="overlay" id="overlay">
                        <input type="hidden" id="delete_id" name="delete_id" value="<?php echo $menuItem['id'] ?>"/>
                        <div class="dialog">
                            <div class="dialog-label">⚠ Verwijderen</div>
                            <div class="dialog-title" id="dialog-title">Product verwijderen?</div>
                            <p class="dialog-sub">Weet je zeker dat je dit product wilt verwijderen? Dit kan niet ongedaan worden gemaakt.</p>
                            <div class="dialog-actions">
                                <button type="submit" name="verwijderen" class="btn btn-danger">Verwijderen</button>
                                <button class="btn btn-outline" id="cancel-delete">Annuleren</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <?php } ?>



        </div>
    </div>

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
        <span>Calamansi Cooler</span><span class="dot">✦</span>
        <span>Tonkotsu Ramen</span><span class="dot">✦</span>
        <span>Halo-Halo Sundae</span><span class="dot">✦</span>
        <span>Bulgogi Bao</span><span class="dot">✦</span>
        <span>Ube Latte</span><span class="dot">✦</span>
        <span>Adobo Ramen</span><span class="dot">✦</span>
        <span>Matcha Tiramisu</span><span class="dot">✦</span>
        <span>Calamansi Cooler</span><span class="dot">✦</span>
    </div>
</div>

<!-- CONFIRM DIALOG -->


<script>
    function askDelete(naam) {
        document.getElementById('dialog-title').textContent = '"' + naam + '" verwijderen?';
        document.getElementById('overlay').classList.add('open');
    }

    document.getElementById('cancel-delete').addEventListener('click', function () {
        document.getElementById('overlay').classList.remove('open');
    });

    document.getElementById('overlay').addEventListener('click', function (e) {
        if (e.target === e.currentTarget) {
            document.getElementById('overlay').classList.remove('open');
        }
    });



</script>
</body>
</html>
