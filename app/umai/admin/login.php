<?php

session_start();



if (isset($_POST['login'])) {
if ($_POST['username'] == "admin" && $_POST['password'] == "admin") {
    $_SESSION['isIngelogd'] = true;
    $_SESSION['username'] = 'admin';
    header('Location: admin.php');
}
}
else {
$_SESSION['isIngelogd'] =  false;
$_SESSION['username'] = "";
}

?>





<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login — Umai 旨い</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"/>
    <link href="login.css" rel="stylesheet"/>
</head>
<body>

<!-- NAV -->
<nav>
    <a href="../../index.php" class="nav-logo">
        <span class="kanji">旨い · Masarap · 맛있어</span>
        <span class="brand">Umai</span>
    </a>
    <a href="../../index.php" class="nav-back">← Terug naar de website</a>
</nav>

<!-- PLANT LEFT -->
<svg class="plant plant-left" width="180" height="400" viewBox="0 0 220 500" fill="none">
    <path d="M30 500 Q-10 380 60 280 Q110 200 40 100 Q80 150 100 240 Q130 170 90 60 Q140 120 120 260 Q170 200 160 80 Q200 150 170 300 Q200 260 210 160 Q230 250 190 380 Q220 340 230 260 Q240 360 200 470 L30 500Z" fill="#AEC289"/>
    <path d="M80 240 Q120 220 160 200" stroke="#5a7a3a" stroke-width="1.5" fill="none" opacity="0.5"/>
    <path d="M70 290 Q115 270 155 250" stroke="#5a7a3a" stroke-width="1.5" fill="none" opacity="0.5"/>
    <path d="M65 340 Q110 320 148 300" stroke="#5a7a3a" stroke-width="1.5" fill="none" opacity="0.5"/>
</svg>

<!-- PLANT RIGHT -->
<svg class="plant plant-right" width="160" height="380" viewBox="0 0 220 500" fill="none">
    <path d="M30 500 Q-10 380 60 280 Q110 200 40 100 Q80 150 100 240 Q130 170 90 60 Q140 120 120 260 Q170 200 160 80 Q200 150 170 300 Q200 260 210 160 Q230 250 190 380 Q220 340 230 260 Q240 360 200 470 L30 500Z" fill="#AEC289"/>
    <path d="M80 240 Q120 220 160 200" stroke="#5a7a3a" stroke-width="1.5" fill="none" opacity="0.4"/>
    <path d="M70 290 Q115 270 155 250" stroke="#5a7a3a" stroke-width="1.5" fill="none" opacity="0.4"/>
</svg>

<!-- MAIN -->
<main>
    <div class="login-card">

        <div class="login-badge">✦ Admin Portaal</div>

        <div class="login-label">✦ Welkom terug</div>

        <h1 class="login-title">
            <span class="red">Log</span> in bij<br>
            <span class="green">Umai</span>
        </h1>
        <span class="login-kanji">旨い · Masarap · 맛있어</span>

        <form class="login-form" method="POST">

            <div class="field-group">
                <label for="username">Gebruikersnaam</label>
                <div class="field-wrap">
                    <input type="text" id="username" name="username" placeholder="jouw gebruikersnaam" autocomplete="username" required/>
                </div>
            </div>

            <div class="field-group">
                <label for="password">Wachtwoord</label>
                <div class="field-wrap">
                    <input type="password" id="password" name="password" placeholder="••••••••" autocomplete="current-password" required/>
                </div>
            </div>

            <button name="login" type="submit" class="login-btn">✦ Inloggen →</button>

        </form>

        <div class="login-divider"><span>Umai Asian Fusion</span></div>
        <a href="../../index.php" class="login-back-link">← Terug naar de website</a>

    </div>
</main>

<!-- MARQUEE -->
<div class="marquee-band">
    <div class="marquee-track">
        <span>Tonkotsu Ramen</span><span class="dot">✦</span>
        <span>Halo-Halo Sundae</span><span class="dot">✦</span>
        <span>Ube Black Sesame Latte</span><span class="dot">✦</span>
        <span>Adobo Ramen</span><span class="dot">✦</span>
        <span>Calamansi Yuzu Cooler</span><span class="dot">✦</span>
        <span>Matcha Tiramisu</span><span class="dot">✦</span>
        <span>Bulgogi Bao</span><span class="dot">✦</span>
        <span>Tonkotsu Ramen</span><span class="dot">✦</span>
        <span>Halo-Halo Sundae</span><span class="dot">✦</span>
        <span>Ube Black Sesame Latte</span><span class="dot">✦</span>
        <span>Adobo Ramen</span><span class="dot">✦</span>
        <span>Calamansi Yuzu Cooler</span><span class="dot">✦</span>
        <span>Matcha Tiramisu</span><span class="dot">✦</span>
        <span>Bulgogi Bao</span><span class="dot">✦</span>
    </div>
</div>

</body>
</html>
