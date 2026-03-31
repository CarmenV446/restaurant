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
    <title>Umai 旨い — Asian Fusion</title>
    <link rel="stylesheet" href="umai/index.css"/>

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400&display=swap"
          rel="stylesheet"/>

</head>
<body>

<!-- ──────────────────────── NAV ──────────────────────────── -->
<nav>
    <div class="nav-logo">
        <span class="kanji">旨い · Masarap · 맛있어</span>
        <span class="brand">Umai</span>
    </div>
    <ul class="nav-links">
        <li><a href="#about">Ons Verhaal</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#pilipinas">Pilipinas</a></li>
        <li><a href="#vibes">Vibes</a></li>
        <li><a href="#promo" class="nav-cta">Kain Na! →</a></li>
        <li><a href="umai/admin/login.php" class="nav-cta"> Login </a></li>


    </ul>
</nav>

<!-- ──────────────────────── HERO ─────────────────────────── -->
<section id="hero">

    <!-- Plant links -->
    <svg class="plant-left leaf-deco" width="220" height="500" viewBox="0 0 220 500" fill="none"
         xmlns="http://www.w3.org/2000/svg" style="bottom:0;left:-20px;">
        <path d="M30 500 Q-10 380 60 280 Q110 200 40 100 Q80 150 100 240 Q130 170 90 60 Q140 120 120 260 Q170 200 160 80 Q200 150 170 300 Q200 260 210 160 Q230 250 190 380 Q220 340 230 260 Q240 360 200 470 L30 500Z"
              fill="#AEC289" opacity="0.7"/>
        <path d="M10 500 Q-30 390 50 290 Q90 210 20 110" stroke="#5a7a3a" stroke-width="2" fill="none" opacity="0.4"/>
        <!-- Banana leaf veins -->
        <path d="M80 240 Q120 220 160 200" stroke="#5a7a3a" stroke-width="1.5" fill="none" opacity="0.5"/>
        <path d="M70 290 Q115 270 155 250" stroke="#5a7a3a" stroke-width="1.5" fill="none" opacity="0.5"/>
        <path d="M65 340 Q110 320 148 300" stroke="#5a7a3a" stroke-width="1.5" fill="none" opacity="0.5"/>
    </svg>

    <!-- Plant rechts -->
    <svg class="plant-right leaf-deco" width="200" height="500" viewBox="0 0 200 500" fill="none"
         xmlns="http://www.w3.org/2000/svg" style="bottom:0;right:-20px;">
        <path d="M30 500 Q-10 380 60 280 Q110 200 40 100 Q80 150 100 240 Q130 170 90 60 Q140 120 120 260 Q170 200 160 80 Q200 150 170 300 Q200 260 210 160 Q230 250 190 380 Q220 340 230 260 Q240 360 200 470 L30 500Z"
              fill="#AEC289" opacity="0.55"/>
        <path d="M80 240 Q120 220 160 200" stroke="#5a7a3a" stroke-width="1.5" fill="none" opacity="0.4"/>
        <path d="M70 290 Q115 270 155 250" stroke="#5a7a3a" stroke-width="1.5" fill="none" opacity="0.4"/>
    </svg>

    <!-- Extra bloemplant hero -->
    <svg class="leaf-deco" width="120" height="280" viewBox="0 0 120 280" fill="none"
         style="bottom:0;left:160px;opacity:0.5;">
        <rect x="55" y="200" width="8" height="80" fill="#5a7a3a"/>
        <ellipse cx="59" cy="200" rx="45" ry="30" fill="#AEC289" transform="rotate(-30 59 200)"/>
        <ellipse cx="59" cy="200" rx="45" ry="28" fill="#AEC289" transform="rotate(30 59 200)"/>
        <ellipse cx="59" cy="160" rx="35" ry="22" fill="#c5d9a0" transform="rotate(-15 59 160)"/>
    </svg>

    <div class="hero-inner">
        <div class="hero-text">
            <div class="hero-tag">✦ Kain Na! — Now Open in Amsterdam</div>
            <h1 class="hero-title">
                <span class="kanji-big">旨い · Masarap · おいしい</span>
                <span class="red">Asian</span><br>
                Fusion<br>
                <span class="green">Kitchen</span>
            </h1>
            <p class="hero-sub">
                Authentieke smaken uit Japan, Korea, de <strong>Filipijnen</strong>, Taiwan en China —
                samengesmolten in één warm en cozy restaurant. Jouw plek om bij te komen, te genieten en te connecten.
                🍜🌴
            </p>
            <div class="hero-actions">
                <a href="#menu" class="btn-primary">✦ Bekijk ons Menu</a>
                <a href="#about" class="btn-outline">Ons Verhaal</a>
            </div>
        </div>

        <div class="hero-visual">
            <div class="bowl-wrap">
                <div class="steam">
                    <span></span><span></span><span></span>
                </div>
                <div class="bowl-circle">🍜</div>
                <div class="float-badge one">✦ Salamat! 🌸</div>
                <div class="float-badge two">🌿 Masarap Guaranteed</div>
            </div>

            <!-- Sampaguita bloom deco -->
            <svg class="sampaguita-deco" width="70" height="70" viewBox="0 0 70 70" fill="none"
                 style="top:-10px;left:10px;opacity:0.7;">
                <g transform="translate(35,35)">
                    <ellipse cx="0" cy="-18" rx="7" ry="12" fill="white" opacity="0.85" transform="rotate(0)"/>
                    <ellipse cx="0" cy="-18" rx="7" ry="12" fill="white" opacity="0.85" transform="rotate(45)"/>
                    <ellipse cx="0" cy="-18" rx="7" ry="12" fill="white" opacity="0.85" transform="rotate(90)"/>
                    <ellipse cx="0" cy="-18" rx="7" ry="12" fill="white" opacity="0.85" transform="rotate(135)"/>
                    <ellipse cx="0" cy="-18" rx="7" ry="12" fill="white" opacity="0.85" transform="rotate(180)"/>
                    <ellipse cx="0" cy="-18" rx="7" ry="12" fill="white" opacity="0.85" transform="rotate(225)"/>
                    <ellipse cx="0" cy="-18" rx="7" ry="12" fill="white" opacity="0.85" transform="rotate(270)"/>
                    <ellipse cx="0" cy="-18" rx="7" ry="12" fill="white" opacity="0.85" transform="rotate(315)"/>
                    <circle r="8" fill="#F4DBDB"/>
                    <circle r="4" fill="#CD4662"/>
                </g>
            </svg>
        </div>
    </div>
</section>

<!-- ────────────────────── MARQUEE ─────────────────────────── -->
<div class="marquee-band" role="marquee" aria-label="Menu highlights">
    <div class="marquee-track">
        <span>Tonkotsu Ramen</span><span class="dot">✦</span>
        <span>Sinigang Miso Soup</span><span class="dot">✦</span>
        <span>Bulgogi Bao</span><span class="dot">✦</span>
        <span>Lechon Kawali Bites</span><span class="dot">✦</span>
        <span>Kare-Kare Udon</span><span class="dot">✦</span>
        <span>Matcha Tiramisu</span><span class="dot">✦</span>
        <span>Halo-Halo Sundae</span><span class="dot">✦</span>
        <span>Pancit Canton Fusion</span><span class="dot">✦</span>
        <span>Ube Black Sesame Latte</span><span class="dot">✦</span>
        <span>Taro Soft Serve</span><span class="dot">✦</span>
        <span>Adobo Ramen</span><span class="dot">✦</span>
        <span>Calamansi Yuzu Cooler</span><span class="dot">✦</span>
        <!-- duplicate -->
        <span>Tonkotsu Ramen</span><span class="dot">✦</span>
        <span>Sinigang Miso Soup</span><span class="dot">✦</span>
        <span>Bulgogi Bao</span><span class="dot">✦</span>
        <span>Lechon Kawali Bites</span><span class="dot">✦</span>
        <span>Kare-Kare Udon</span><span class="dot">✦</span>
        <span>Matcha Tiramisu</span><span class="dot">✦</span>
        <span>Halo-Halo Sundae</span><span class="dot">✦</span>
        <span>Pancit Canton Fusion</span><span class="dot">✦</span>
        <span>Ube Black Sesame Latte</span><span class="dot">✦</span>
        <span>Taro Soft Serve</span><span class="dot">✦</span>
        <span>Adobo Ramen</span><span class="dot">✦</span>
        <span>Calamansi Yuzu Cooler</span><span class="dot">✦</span>
    </div>
</div>

<!-- ──────── MASARAP SECONDARY BAND ──────────────────────── -->
<div class="masarap-band">
    <div class="masarap-track">
        <span>Masarap</span><span class="light">·</span>
        <span>Salamat</span><span class="light">·</span>
        <span>Kain Na!</span><span class="light">·</span>
        <span>Sarap Grabe</span><span class="light">·</span>
        <span>Pampagana</span><span class="light">·</span>
        <span>Ang Sarap!</span><span class="light">·</span>
        <span>Kumain Tayo</span><span class="light">·</span>
        <span>Masarap</span><span class="light">·</span>
        <span>Salamat</span><span class="light">·</span>
        <span>Kain Na!</span><span class="light">·</span>
        <span>Sarap Grabe</span><span class="light">·</span>
        <span>Pampagana</span><span class="light">·</span>
        <span>Ang Sarap!</span><span class="light">·</span>
        <span>Kumain Tayo</span><span class="light">·</span>
    </div>
</div>

<!-- ──────────────────────── ABOUT ─────────────────────────── -->
<section id="about" aria-label="Ons verhaal">
    <!-- Plant deco about -->
    <svg class="leaf-deco" width="140" height="320" viewBox="0 0 140 320" fill="none"
         style="right:0;top:0;opacity:0.35;">
        <path d="M140 0 Q100 60 110 160 Q120 240 140 320" stroke="#AEC289" stroke-width="6" fill="none"/>
        <ellipse cx="100" cy="80" rx="55" ry="22" fill="#AEC289" transform="rotate(-40 100 80)"/>
        <ellipse cx="118" cy="160" rx="48" ry="20" fill="#AEC289" transform="rotate(-20 118 160)"/>
        <ellipse cx="110" cy="240" rx="42" ry="18" fill="#AEC289" transform="rotate(-10 110 240)"/>
    </svg>

    <div class="about-inner">
        <div class="about-text">
            <p class="section-label">✦ Ons Verhaal — Ang Aming Kwento</p>
            <h2 class="section-title">Waar Oost<br>en <em>West</em> samenkomen</h2>
            <p>
                Umai (旨い) betekent "heerlijk" in het Japans — en <em>Masarap</em> in het Tagalog. We begonnen als een
                klein ramen-stalletje
                geïnspireerd op de dampende lantaarn-verlichte shophouses van Tokyo én de kleurrijke
                <em>karinderia's</em> van Manila — en groeiden uit tot
                de cozyste Asian fusion spot van de stad.
            </p>
            <p>
                Onze chef's combineren eeuwenoude recepten uit Japan, Korea, de Filipijnen, China en Taiwan
                met lokale, verse ingrediënten. Van <em>sinigang</em> tot shoyu, van <em>ube</em> tot matcha — elk
                gerecht is een viering van de rijke aziatische culturen die ons inspireren. 🌸
            </p>
            <div class="parol-badge">
                <svg width="16" height="16" viewBox="0 0 32 32" fill="none">
                    <polygon points="16,2 18,12 28,12 20,18 23,28 16,22 9,28 12,18 4,12 14,12" fill="#CD4662"/>
                </svg>
                Geïnspireerd op de Filipijnse parol-lantaarn 🇵🇭
            </div>
        </div>

        <div class="about-cards">
            <div class="about-card">
                <div class="icon">🏮</div>
                <div>
                    <h4>Ramen Shop & Karinderia</h4>
                    <p>Warm hout, papieren lantaarns én de kleurrijke sfeer van een Filipijnse <em>karinderia</em> —
                        gezellig en echt.</p>
                </div>
            </div>
            <div class="about-card">
                <div class="icon">🌿</div>
                <div>
                    <h4>Pandan · Ube · Calamansi</h4>
                    <p>Wij werken met authentieke Filipijnse ingrediënten: pandan, ube, calamansi en gata
                        (kokosmelk).</p>
                </div>
            </div>
            <div class="about-card">
                <div class="icon">⭐</div>
                <div>
                    <h4>Parol & Anime Corner</h4>
                    <p>De iconische Filipijnse ster-lantaarn (<em>parol</em>) siert onze muren, naast anime fan-art en
                        culturele murals.</p>
                </div>
            </div>
            <div class="about-card">
                <div class="icon">💌</div>
                <div>
                    <h4>Bayanihan Spirit</h4>
                    <p><em>Bayanihan</em> — samen sterk. Voor iedereen die van Aziatische culturen houdt. Maligayang
                        pagdating!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ──────────────────────── MENU ──────────────────────────── -->
<section id="menu" aria-label="Ons menu">

    <!-- Plant deco menu -->
    <svg class="leaf-deco" width="180" height="400" viewBox="0 0 180 400" fill="none"
         style="left:0;top:0;opacity:0.15;">
        <path d="M0 0 Q40 80 30 200 Q20 300 0 400" stroke="#AEC289" stroke-width="5" fill="none"/>
        <ellipse cx="50" cy="100" rx="60" ry="20" fill="#AEC289" transform="rotate(35 50 100)"/>
        <ellipse cx="42" cy="200" rx="55" ry="20" fill="#AEC289" transform="rotate(20 42 200)"/>
        <ellipse cx="36" cy="300" rx="48" ry="18" fill="#AEC289" transform="rotate(10 36 300)"/>
    </svg>

    <div class="menu-header">

        <div>

            <p class="section-label">✦ Menu</p>
            <h2 class="section-title">Onze <em>Signatuur</em><br>Gerechten</h2>
            <form method="get" class="form-main" action="#menu">
                <div class="form-box">
                    <input class="form-text" type="text" id="search" name="search" placeholder="search..">
                </div>
                <input class="form-button" name="submit" type="submit" value="Submit">
            </form>
            <?php
            if (isset($_GET['submit'])) {
                $sql = $connectie->prepare("SELECT * FROM menu WHERE beschrijving LIKE :search");
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
        <div class="menu-tabs" role="tablist" aria-label="Menu categorieën">
            <button class="tab-btn active" onclick="showTab('alles')" role="tab" aria-selected="true">Alles</button>
            <button class="tab-btn" onclick="showTab('ramen')" role="tab" >Ramen</button>
            <button class="tab-btn" onclick="showTab('small')" role="tab">Small Plates</button>
            <button class="tab-btn" onclick="showTab('bao')" role="tab">Bao & Rice</button>
            <button class="tab-btn" onclick="showTab('soep')" role="tab">Soepen</button>
            <button class="tab-btn" onclick="showTab('desserts')" role="tab">Desserts</button>
            <button class="tab-btn" onclick="showTab('dranken')" role="tab">Dranken</button>
        </div>
    </div>

    <div class="menu-grid">

        <!-- ALLES -->
        <div class="menu-category active" id="tab-alles">

            <p class="menu-category-title">✦ Alles</p>
            <div class="menu-cards" <?php foreach ($result

            as $menuItem){
             ?>
            >

                <article class="menu-card" >
                    <div class="menu-card-top">
                        <h3> <?php
                            echo $menuItem['naam'];
                            ?>
                        </h3>
                        <span class="price">€
                            <?php
                            echo $menuItem['prijs'];
                            ?>
                        </span>
                    </div>
                    <p>
                        <?php
                        echo $menuItem['beschrijving'];
                        ?>
                    </p>
                    <?php
                    if ($menuItem['vega'] == 1) { ?>
                    <span class="tag">
                       <?php
                       echo "Vega";
                       }
                       ?>

                    </span>                </article>
                <?php }
                 ?>


            </div>
        </div>

        <!-- RAMEN -->
        <div class="menu-category" id="tab-ramen">

            <p class="menu-category-title">✦ Ramen — 라멘 — ラーメン</p>
            <div class="menu-cards" <?php foreach ($result

            as $menuItem){
            if ($menuItem['categorie'] == "Ramen") { ?>
            >

                <article class="menu-card" >
                    <div class="menu-card-top">
                        <h3> <?php
                            echo $menuItem['naam'];
                            ?>
                        </h3>
                        <span class="price">€
                            <?php
                            echo $menuItem['prijs'];
                            ?>
                        </span>
                    </div>
                    <p>
                        <?php
                        echo $menuItem['beschrijving'];
                        ?>
                    </p>
                    <?php
                    if ($menuItem['vega'] == 1) { ?>
                    <span class="tag">
                       <?php
                       echo "Vega";
                       }
                       ?>

                    </span>                </article>
                <?php }
                } ?>


            </div>
        </div>
        <div class="menu-category" id="tab-small">
            <p class="menu-category-title">✦ Small Plates — 小吃 — 前菜</p>
            <div class="menu-cards"
                    <?php foreach ($result

                    as $menuItem){
                    if ($menuItem['categorie'] == "Small Plates") { ?>
            >

                <article class="menu-card" >
                    <div class="menu-card-top">
                        <h3> <?php
                            echo $menuItem['naam'];
                            ?>
                        </h3>
                        <span class="price">€
                            <?php
                            echo $menuItem['prijs'];
                            ?>
                        </span>
                    </div>
                    <p>
                        <?php
                        echo $menuItem['beschrijving'];
                        ?>
                    </p>
                    <?php
                    if ($menuItem['vega'] == 1) { ?>
                    <span class="tag">
                       <?php
                       echo "Vega";
                       }
                       ?>

                    </span>
                </article>
                <?php }
                } ?>

            </div>
        </div>

        <!-- BAO & RICE -->
        <div class="menu-category" id="tab-bao">
            <p class="menu-category-title">✦ Bao Buns & Rice Bowls — 包子 — 御飯</p>
            <div class="menu-cards"<?php foreach ($result

            as $menuItem){
            if ($menuItem['categorie'] == "Bao & Rice") { ?>
            >

                <article class="menu-card" >
                    <div class="menu-card-top">
                        <h3> <?php
                            echo $menuItem['naam'];
                            ?>
                        </h3>
                        <span class="price">€
                            <?php
                            echo $menuItem['prijs'];
                            ?>
                        </span>
                    </div>
                    <p>
                        <?php
                        echo $menuItem['beschrijving'];
                        ?>
                    </p>
                    <?php
                    if ($menuItem['vega'] == 1) { ?>
                    <span class="tag">
                       <?php
                            echo "Vega";
                        }
                        ?>

                    </span>
                </article>
                <?php }
                } ?>

            </div>
        </div>



        <!-- SOEPEN -->
        <div class="menu-category" id="tab-soep">
            <p class="menu-category-title">✦ Soepen & Noodles — 麺類 — 국물</p>
            <div class="menu-cards"<?php foreach ($result

            as $menuItem){
            if ($menuItem['categorie'] == "Soepen") { ?>
            >

                <article class="menu-card" >
                    <div class="menu-card-top">
                        <h3> <?php
                            echo $menuItem['naam'];
                            ?>
                        </h3>
                        <span class="price">€
                            <?php
                            echo $menuItem['prijs'];
                            ?>
                        </span>
                    </div>
                    <p>
                        <?php
                        echo $menuItem['beschrijving'];
                        ?>
                    </p>
                    <?php
                    if ($menuItem['vega'] == 1) { ?>
                    <span class="tag">
                       <?php
                       echo "Vega";
                       }
                       ?>

                    </span>
                </article>
                <?php }
                } ?>

            </div>
        </div>

        <!-- DESSERTS -->
        <div class="menu-category" id="tab-desserts">
            <p class="menu-category-title">✦ Desserts & Sweet Endings — 甘いもの — 디저트</p>
            <div class="menu-cards"<?php foreach ($result

            as $menuItem){
            if ($menuItem['categorie'] == "Desserts") { ?>
            >

                <article class="menu-card" >
                    <div class="menu-card-top">
                        <h3> <?php
                            echo $menuItem['naam'];
                            ?>
                        </h3>
                        <span class="price">€
                            <?php
                            echo $menuItem['prijs'];
                            ?>
                        </span>
                    </div>
                    <p>
                        <?php
                        echo $menuItem['beschrijving'];
                        ?>
                    </p>
                    <?php
                    if ($menuItem['vega'] == 1) { ?>
                    <span class="tag">
                       <?php
                       echo "Vega";
                       }
                       ?>

                    </span>
                </article>
                <?php }
                } ?>

            </div>
        </div>

        <!-- DRANKEN -->
        <div class="menu-category" id="tab-dranken">
            <p class="menu-category-title">✦ Dranken & Elixirs — 飲み物 — 음료</p>
            <div class="menu-cards"<?php foreach ($result

            as $menuItem){
            if ($menuItem['categorie'] == "Dranken") { ?>
            >

                <article class="menu-card" >
                    <div class="menu-card-top">
                        <h3> <?php
                            echo $menuItem['naam'];
                            ?>
                        </h3>
                        <span class="price">€
                            <?php
                            echo $menuItem['prijs'];
                            ?>
                        </span>
                    </div>
                    <p>
                        <?php
                        echo $menuItem['beschrijving'];
                        ?>
                    </p>
                    <?php
                    if ($menuItem['vega'] == 1) { ?>
                    <span class="tag">
                       <?php
                       echo "Vega";
                       }
                       ?>

                    </span>
                </article>
                <?php }
                } ?>

            </div>
        </div>

    </div>
</section>

<!-- ──────────────────────── VIBES ─────────────────────────── -->
<section id="vibes" aria-label="Onze sfeer">

    <!-- Banana leaf deco -->
    <svg class="leaf-deco" width="200" height="350" viewBox="0 0 200 350" fill="none"
         style="right:0;bottom:0;opacity:0.35;">
        <path d="M200 350 Q160 280 170 180 Q178 100 200 0" stroke="#AEC289" stroke-width="5" fill="none"/>
        <ellipse cx="155" cy="270" rx="60" ry="22" fill="#AEC289" transform="rotate(30 155 270)"/>
        <ellipse cx="162" cy="180" rx="55" ry="20" fill="#AEC289" transform="rotate(15 162 180)"/>
        <ellipse cx="170" cy="100" rx="48" ry="18" fill="#AEC289" transform="rotate(5 170 100)"/>
        <path d="M155 270 Q175 255 195 240" stroke="#5a7a3a" stroke-width="1.5" fill="none" opacity="0.6"/>
        <path d="M162 180 Q182 165 200 150" stroke="#5a7a3a" stroke-width="1.5" fill="none" opacity="0.6"/>
    </svg>

    <div class="vibes-inner">
        <p class="section-label">✦ De Sfeer</p>
        <h2 class="section-title">Warm, Cozy<br>& <em>Onvergetelijk</em></h2>

        <div class="vibes-grid">
            <div class="vibe-card">
                <div class="emoji">🏮</div>
                <h3>Ramen Shop Vibes</h3>
                <p>Warm hout, papieren lantaarns en noren-gordijnen die je meenemen naar een zijstraat in Shinjuku.</p>
            </div>
            <div class="vibe-card">
                <div class="emoji">🌿</div>
                <h3>Banana Leaf Jungle</h3>
                <p>Filipijnse bananenbladeren, monstera's en potplanten langs iedere muur — tropisch en breathable.</p>
            </div>
            <div class="vibe-card">
                <div class="emoji">⭐</div>
                <h3>Parol Glow</h3>
                <p>Filipijnse parol-lantaarns verlichten het hele restaurant met een warme, feestelijke gloed.
                    Kahanga-hanga!</p>
            </div>
            <div class="vibe-card">
                <div class="emoji">🎌</div>
                <h3>Anime Corner</h3>
                <p>Fan-art murals, figure displays en wekelijkse anime-avonden. De community staat centraal.</p>
            </div>
            <div class="vibe-card">
                <div class="emoji">🎶</div>
                <h3>OPM + City Pop</h3>
                <p>Original Pilipino Music, Japanse city pop en K-indie. Onze curated playlist zet altijd de juiste
                    sfeer.</p>
            </div>
            <div class="vibe-card">
                <div class="emoji">📸</div>
                <h3>Insta-Worthy</h3>
                <p>Van ons servies tot de plating — elk moment is het waard om te delen. Licht altijd perfect.</p>
            </div>
        </div>
    </div>
</section>

<!-- ──────────────────── PILIPINAS SECTION ─────────────────── -->
<section id="pilipinas" aria-label="Filipijnse cultuur">

    <!-- Philippine Sun SVG deco -->
    <svg class="ph-sun" width="500" height="500" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="20" fill="#AEC289"/>
        <line x1="50" y1="5" x2="50" y2="25" stroke="#AEC289" stroke-width="4" stroke-linecap="round"/>
        <line x1="50" y1="75" x2="50" y2="95" stroke="#AEC289" stroke-width="4" stroke-linecap="round"/>
        <line x1="5" y1="50" x2="25" y2="50" stroke="#AEC289" stroke-width="4" stroke-linecap="round"/>
        <line x1="75" y1="50" x2="95" y2="50" stroke="#AEC289" stroke-width="4" stroke-linecap="round"/>
        <line x1="18" y1="18" x2="32" y2="32" stroke="#AEC289" stroke-width="4" stroke-linecap="round"/>
        <line x1="68" y1="68" x2="82" y2="82" stroke="#AEC289" stroke-width="4" stroke-linecap="round"/>
        <line x1="82" y1="18" x2="68" y2="32" stroke="#AEC289" stroke-width="4" stroke-linecap="round"/>
        <line x1="32" y1="68" x2="18" y2="82" stroke="#AEC289" stroke-width="4" stroke-linecap="round"/>
    </svg>

    <!-- Parol SVG decorations -->
    <svg class="leaf-deco" width="120" height="180" viewBox="0 0 120 180" fill="none"
         style="top:2rem;right:6rem;opacity:0.3;">
        <!-- Parol star -->
        <polygon points="60,10 68,40 98,40 74,58 84,88 60,70 36,88 46,58 22,40 52,40" fill="#CD4662"/>
        <!-- Parol sticks -->
        <line x1="60" y1="88" x2="40" y2="140" stroke="#CD4662" stroke-width="3"/>
        <line x1="60" y1="88" x2="80" y2="140" stroke="#CD4662" stroke-width="3"/>
        <!-- Tassels -->
        <line x1="35" y1="140" x2="30" y2="165" stroke="#AEC289" stroke-width="2"/>
        <line x1="40" y1="140" x2="38" y2="168" stroke="#AEC289" stroke-width="2"/>
        <line x1="45" y1="140" x2="46" y2="165" stroke="#AEC289" stroke-width="2"/>
        <line x1="75" y1="140" x2="74" y2="165" stroke="#AEC289" stroke-width="2"/>
        <line x1="80" y1="140" x2="82" y2="168" stroke="#AEC289" stroke-width="2"/>
        <line x1="85" y1="140" x2="90" y2="165" stroke="#AEC289" stroke-width="2"/>
    </svg>

    <div class="pilipinas-inner">
        <!-- Baybayin decorative text row -->
        <div class="baybayin-strip" aria-hidden="true">ᜊᜌᜊᜌᜒᜈ᜔ ᜃᜏᜄᜏᜃᜒᜈ᜔ ᜋᜐᜀᜇᜉ᜔ ᜉᜒᜎᜒᜉᜒᜈᜐ᜔ ᜊᜌᜊᜌᜒᜈ᜔ ᜃᜏᜄᜏᜃᜒᜈ᜔ ᜋᜐᜀᜇᜉ᜔</div>

        <p class="section-label">✦ Pilipinas — 🇵🇭 Puso ng Kusina</p>
        <h2 class="section-title">Het Hart van<br>onze <em>Keuken</em></h2>

        <div class="ph-grid">

            <div class="ph-card">
                <span class="ph-icon">🍋</span>
                <h3>Calamansi</h3>
                <span class="ph-tagalog">Citrus microcarpa · Surot</span>
                <p>De kleine zure citrusvrucht die álles beter maakt. In onze dranken, dressings en marinades.
                    Onmisbaar.</p>
            </div>

            <div class="ph-card">
                <span class="ph-icon">💜</span>
                <h3>Ube</h3>
                <span class="ph-tagalog">Dioscorea alata · Paarse Yam</span>
                <p>De paarse, nootachtige ube is de trots van de Filipijnse keuken — in onze desserts, lattes en soft
                    serve.</p>
            </div>

            <div class="ph-card">
                <span class="ph-icon">🌿</span>
                <h3>Pandan</h3>
                <span class="ph-tagalog">Pandanus amaryllifolius · Screwpine</span>
                <p>Tropisch, vanille-achtig en fris groen. Pandan geeft onze rijst, custards en dranken een unieke
                    diepte.</p>
            </div>

            <div class="ph-card">
                <span class="ph-icon">🥥</span>
                <h3>Gata</h3>
                <span class="ph-tagalog">Kokosmelk · Puso ng niyog</span>
                <p>Verse gata (kokosmelk) is de basis van onze kare-kare, laksa en desserts. Romig, zoet en
                    tropisch.</p>
            </div>

            <div class="ph-card">
                <span class="ph-icon">⭐</span>
                <h3>Parol</h3>
                <span class="ph-tagalog">Ster-lantaarn · Simbolo ng Pag-asa</span>
                <p>De vijfpuntige ster-lantaarn — symbool van hoop en licht. Siert onze ruimte en inspireert ons
                    design.</p>
            </div>

            <div class="ph-card">
                <span class="ph-icon">🌸</span>
                <h3>Sampaguita</h3>
                <span class="ph-tagalog">Jasminum sambac · Pambansang Bulaklak</span>
                <p>De nationale bloem van de Filipijnen. Delicaat wit, intens geurend — te vinden in onze decoraties en
                    siroop.</p>
            </div>

        </div>
    </div>
</section>

<!-- ─────────────────────── PROMO BANNER ───────────────────── -->
<section id="promo" aria-label="Promotie en reservering">
    <h2>Kumain Na Tayo! 🌸<br><span style="font-size:0.55em;opacity:0.85;">Reserveer jouw tafel vandaag</span></h2>
    <p>Walk-ins welkom · Reserveren aanbevolen in het weekend · Bezorging via Uber Eats & Thuisbezorgd · <em>Salamat
            po!</em></p>
    <a href="#" class="btn-white">✦ Kain Na! — Reserveer Nu</a>
</section>

<!-- ──────────────────────── FOOTER ────────────────────────── -->
<footer>

    <!-- Footer plant deco -->
    <svg style="position:absolute;bottom:0;left:0;opacity:0.08;pointer-events:none;" width="250" height="300"
         viewBox="0 0 250 300" fill="none">
        <path d="M0 300 Q30 220 20 140 Q10 60 0 0" stroke="#AEC289" stroke-width="6" fill="none"/>
        <ellipse cx="40" cy="220" rx="70" ry="25" fill="#AEC289" transform="rotate(-25 40 220)"/>
        <ellipse cx="30" cy="140" rx="60" ry="22" fill="#AEC289" transform="rotate(-15 30 140)"/>
        <ellipse cx="25" cy="70" rx="52" ry="20" fill="#AEC289" transform="rotate(-5 25 70)"/>
    </svg>

    <div class="footer-inner">
        <div class="footer-grid">
            <div class="footer-brand">
                <div class="kanji">旨い · Masarap · 맛있어</div>
                <div class="brand">Umai</div>
                <p>Een warm plekje voor iedereen die houdt van aziatische culturen, lekker eten en echte verbinding.
                    <em>Salamat at maligayang pagdating.</em></p>
                <!-- Small parol deco in footer -->
                <svg width="40" height="60" viewBox="0 0 80 110" fill="none" style="margin-top:1rem;opacity:0.4;">
                    <polygon points="40,5 46,28 70,28 50,42 58,65 40,51 22,65 30,42 10,28 34,28" fill="#CD4662"/>
                    <line x1="40" y1="65" x2="28" y2="95" stroke="#CD4662" stroke-width="2.5"/>
                    <line x1="40" y1="65" x2="52" y2="95" stroke="#CD4662" stroke-width="2.5"/>
                    <line x1="24" y1="95" x2="20" y2="108" stroke="#AEC289" stroke-width="1.5"/>
                    <line x1="28" y1="95" x2="27" y2="110" stroke="#AEC289" stroke-width="1.5"/>
                    <line x1="52" y1="95" x2="53" y2="110" stroke="#AEC289" stroke-width="1.5"/>
                    <line x1="56" y1="95" x2="60" y2="108" stroke="#AEC289" stroke-width="1.5"/>
                </svg>
            </div>

            <div class="footer-col">
                <h4>Menu</h4>
                <ul>
                    <li>Ramen</li>
                    <li>Small Plates</li>
                    <li>Bao & Rice Bowls</li>
                    <li>Soepen & Noodles</li>
                    <li>Desserts</li>
                    <li>Dranken</li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Bezoek Ons</h4>
                <ul>
                    <li>Ma–Vr: 11:00 – 22:00</li>
                    <li>Za–Zo: 10:00 – 23:00</li>
                    <li>Zeedijk 42, Amsterdam</li>
                    <li><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                           data-cfemail="0c65626a634c79616d65226260">[email&#160;protected]</a></li>
                    <li>+31 20 123 4567</li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Info</h4>
                <ul>
                    <li>Over Ons</li>
                    <li>Reserveren</li>
                    <li>Bezorging</li>
                    <li>Cadeaubon</li>
                    <li>Catering</li>
                    <li>Evenementen</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2025 Umai Asian Fusion Kitchen · Alle rechten voorbehouden · KVK 98765432</p>
            <div class="footer-socials">
                <a href="#">Instagram</a>
                <a href="#">TikTok</a>
                <a href="#">Pinterest</a>
                <a href="#">Discord</a>
            </div>
        </div>
    </div>
</footer>

<!-- ──────────────────────── JS ────────────────────────────── -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="umai/index.js"></script>

</body>
</html>
