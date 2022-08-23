<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="codents">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <title>HPZP</title>
</head>

<body>
    <div id="uvodniFoto"></div>
    <h1>HP Zemní Práce s.r.o.</h1>
    <section class="header">
        <div class="wrapper">
            <div class="container">
                <div class="menulogo"></div>
                <div class="menulogo"></div>
                <div class="menulogo"></div>
            </div>
        </div>
        <ul class="menu">
            <li><a href="#onas">O nás</a></li>
            <li><a href="sluzby">Mechanizace</a></li>
            <li><a href="#">Služby</a></li>
            <li><a href="#">Kontakt</a></li>
        </ul>
    </section>
    <h2>Petr Hradil</h2>

    <div class="onas">
        <h3>O NÁS</h3>
        <p>Působíme v oboru zemních prací a stavebnictví od roku 2013.</p>
        <div class="specializace">
            <img src="specializace.png">
            <p>Přípravné a dokončovací <br> stavební práce.</p>
        </div>
        <div class="lokalita">
            <img src="lokalita.jpg">
            <p>Přerov a okolí</p>
        </div>
        <div class="profesionalita">
            <img src="profesionalita.png">
            <p>Zakázky řešíme v co nejkratším možném termínu, svědomitě a s maximální profesionalitou</p>
        </div>
        <hr>
        <p>Snažíme se neustále zlepšovat a rozšiřovat náš strojový park technikou, <br>která šetří životní prostředí,
            čas i finanční náklady.</p>
    </div>

    <div class="sluzby">
        <h3>SLUŽBY</h3>
        <div class="zemniprace">
            <h4>ZEMNÍ PRÁCE</h4>
            <p>Terénní úpravy rovinných i svažitých terénů, hloubení rýh pro inženýrské sítě, kladení vodovodů a
                kanalizací, hutnění terénu, modelace terénu, odvoz přebytečné zeminy a uložení na skládku, výstavba
                komunikací - zakládání chodníků a zpevněných ploch</p>
        </div>

        <div class="demolice">
            <h4>DEMOLICE</h4>
            <p>Strojní demolice objektů a zpevněných ploch, úprava pozemku po demolici
                Novinka! - drcení sutě (beton, cihla, asfalt) pomocí drticí lžíce přímo na pozemku. Není nutné odvážet
                suť na skládku, drcením vznikne materiál vhodný na zpětnou recyklaci, např. obsyp potrubí. Finanční
                úspora je 50% proti skládce.</p>
        </div>

        <div class="tridenizeminy">
            <h4>TŘÍDĚNÍ ZEMINY</h4>
            <p>Třídění zeminy pomocí třídící lžíce přímo na pozemku. Vyčesání plevele, separace zeminy od drnů, třídění
                zeminy nebo suti do frakce 0-20 mm a 20 mm.</p>
        </div>

        <div class="doprava">
            <h4>DOPRAVA</h4>
            <p>Přeprava stavebních materiálů s možností složení hydraulickou rukou; kontejnerová doprava; prodej a dovoz
                písku, štěrku, kačírku.</p>
        </div>
    </div>

    <div class="form-container">
        <form method="POST" action="send-email.php">
            <div class="input-row">
                <label>Jméno <em>*</em></label>
                <input type="text" name="userName" required>
            </div>
            <div class="input-row">
                <label>Email <em>*</em></label>
                <input type="email" name="userEmail" required>
            </div>
            <div class="input-row">
                <label>Mobilní číslo <em>*</em></label>
                <input type="tel" name="userPhone" required>
            </div>
            <div class="input-row">
                <label>Zpráva <em>*</em></label>
                <textarea name="userMessage" required></textarea>
            </div>
            <div class="input-row">
                <input type="submit" value="Submit">
                <?php if (isset($_SESSION['email_status']) && $_SESSION['email_status']  == 'successfully') : ?>
                    <div class="success">
                        <strong>Odesláno!</strong>
                    </div>
                <?php endif; ?>

                <?php if (isset($_SESSION['email_status']) && $_SESSION['email_status']  == 'error') : ?>
                    <div class="success">
                        <strong>Nastala chyba...!</strong>
                    </div>
                <?php endif; ?>

                <?php if (isset($_SESSION['email_status']) && $_SESSION['email_status']  == 'required_all') : ?>
                    <div class="success">
                        <strong>Vsetky polia su povinne!</strong>
                    </div>
                <?php endif; ?>

                <?php unset($_SESSION['email_status']); ?>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>