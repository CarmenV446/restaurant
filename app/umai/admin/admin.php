<?php
session_start();
if(!isset($_SESSION['isIngelogd']) || $_SESSION['isIngelogd'] == false) {
    header('Location: login.php');
}
?>

<?php
$connectie = new PDO('mysql:host=mysql_db;dbname=school', 'root', 'rootpassword');
$sql = $connectie->prepare("SELECT * FROM menu");
$sql->execute();
$result = $sql->fetchAll();
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admin — Umai 旨い</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"/>
    <link href="admin.css" rel="stylesheet" type="text/css"/

</head>
<body>

<!-- NAV -->
<nav>
    <a href="../..index.php" class="nav-logo">
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

    <!-- PAGE HEADER -->
    <div class="page-header">
        <div class="page-header-left">
            <span class="section-label">✦ Beheer — Productenoverzicht</span>
            <h1 class="page-title">Producten<br><span class="green">Overzicht</span></h1>
        </div>
        <div class="page-header-actions">
            <a href="product-aanpassen.html" class="btn btn-outline">✎ Aanpassen</a>
            <a href="product-toevoegen.html" class="btn btn-primary">＋ Product Toevoegen</a>
        </div>
    </div>

    <!-- STATS -->
    <div class="stats-bar">
        <div class="stat-card">
            <span class="stat-label">Totaal producten</span>
            <span class="stat-value" id="stat-total">8</span>
        </div>
        <div class="stat-card">
            <span class="stat-label">Actief</span>
            <span class="stat-value" id="stat-active">7</span>
        </div>
        <div class="stat-card">
            <span class="stat-label">Categorieën</span>
            <span class="stat-value">4</span>
        </div>
        <div class="stat-card">
            <span class="stat-label">Gem. prijs</span>
            <span class="stat-value">€12<span class="unit">,50</span></span>
        </div>
    </div>

    <!-- PRODUCT TABLE -->
    <div class="table-wrapper">
        <div class="table-header">
            <span class="table-title">
                <span class="dot">✦</span> Alle producten
            </span>
            <span class="product-count" id="count-label">8 producten</span>
        </div>

        <div class="product-list" id="product-list">
            <!-- rows inserted by JS -->
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
<div class="overlay" id="overlay">
    <div class="dialog">
        <div class="dialog-label">⚠ Verwijderen</div>
        <div class="dialog-title" id="dialog-title">Product verwijderen?</div>
        <p class="dialog-sub" id="dialog-sub">Weet je zeker dat je dit product wilt verwijderen? Dit kan niet ongedaan worden gemaakt.</p>
        <div class="dialog-actions">
            <button class="btn btn-danger" id="confirm-delete">✕ Verwijderen</button>
            <button class="btn btn-outline" id="cancel-delete">Annuleren</button>
        </div>
    </div>
</div>

<script>
    // ── PRODUCT DATA ──
    let products = [
        { id: 1, name: 'Tonkotsu Ramen',        category: 'Ramen',        price: '14,50', emoji: '🍜', active: true  },
        { id: 2, name: 'Bulgogi Bao',            category: 'Small Plates', price: '9,00',  emoji: '🥟', active: true  },
        { id: 3, name: 'Halo-Halo Sundae',       category: 'Desserts',     price: '7,50',  emoji: '🍨', active: true  },
        { id: 4, name: 'Ube Black Sesame Latte', category: 'Dranken',      price: '5,50',  emoji: '🧋', active: true  },
        { id: 5, name: 'Adobo Ramen',            category: 'Ramen',        price: '15,00', emoji: '🍲', active: true  },
        { id: 6, name: 'Matcha Tiramisu',        category: 'Desserts',     price: '6,50',  emoji: '🍵', active: false },
        { id: 7, name: 'Calamansi Yuzu Cooler',  category: 'Dranken',      price: '4,50',  emoji: '🍋', active: true  },
        { id: 8, name: 'Sinigang Miso Soup',     category: 'Small Plates', price: '11,00', emoji: '🥣', active: true  },
    ];

    let pendingDeleteId = null;

    // ── RENDER ──
    function render() {
        const list = document.getElementById('product-list');
        list.innerHTML = '';

        if (products.length === 0) {
            list.innerHTML = `
                <div class="empty-state">
                    <span class="emoji">🍜</span>
                    <p>Geen producten gevonden</p>
                </div>`;
        } else {
            products.forEach(p => {
                const row = document.createElement('div');
                row.className = 'product-row';
                row.setAttribute('data-id', p.id);
                row.innerHTML = `
                    <span class="product-emoji">${p.emoji}</span>
                    <div class="product-info">
                        <span class="product-name">${p.name}</span>
                        <span class="product-category">${p.category}</span>
                    </div>
                    <span class="product-price">€${p.price}</span>
                    <div class="product-status">
                        <span class="status-badge ${p.active ? 'active' : 'inactive'}">
                            ${p.active ? '● Actief' : '○ Inactief'}
                        </span>
                    </div>
                    <div class="product-actions">
                        <a href="product-aanpassen.html?id=${p.id}" class="btn btn-edit">✎ Aanpassen</a>
                        <button class="btn btn-danger" onclick="askDelete(${p.id}, '${p.name}')">✕ Verwijderen</button>
                    </div>
                `;
                list.appendChild(row);
            });
        }

        // update stats
        document.getElementById('stat-total').textContent = products.length;
        document.getElementById('stat-active').textContent = products.filter(p => p.active).length;
        document.getElementById('count-label').textContent = `${products.length} product${products.length !== 1 ? 'en' : ''}`;
    }

    // ── DELETE FLOW ──
    function askDelete(id, name) {
        pendingDeleteId = id;
        document.getElementById('dialog-title').textContent = `"${name}" verwijderen?`;
        document.getElementById('overlay').classList.add('open');
    }

    document.getElementById('confirm-delete').addEventListener('click', () => {
        products = products.filter(p => p.id !== pendingDeleteId);
        pendingDeleteId = null;
        document.getElementById('overlay').classList.remove('open');
        render();
    });

    document.getElementById('cancel-delete').addEventListener('click', () => {
        pendingDeleteId = null;
        document.getElementById('overlay').classList.remove('open');
    });

    document.getElementById('overlay').addEventListener('click', (e) => {
        if (e.target === e.currentTarget) {
            pendingDeleteId = null;
            document.getElementById('overlay').classList.remove('open');
        }
    });

    // ── INIT ──
    render();
</script>
</body>
</html>
