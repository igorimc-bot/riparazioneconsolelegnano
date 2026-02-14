<?php
require_once 'includes/db_connect.php';
require_once 'includes/functions.php';

$services = get_all_services($pdo);
$zones = get_all_zones($pdo);
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PNRRBC5F4B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-PNRRBC5F4B');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riparazione Console Legnano e Provincia - PlayStation, Xbox, Nintendo</title>
    <meta name="description"
        content="Assistenza specializzata console a Legnano, Milano e provincia. Riparazione PlayStation 5, PS4, Xbox Series X, Switch e controller. Interventi rapidi e garantiti.">
    <link rel="icon" type="image/svg+xml" href="/assets/img/favicon.svg">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/cookie-banner.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <?php include 'includes/head_analytics.php'; ?>
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <section class="hero">
        <div class="hero-slider">
            <div class="slide"
                style="background-image: url('/assets/img/hero-homepage-riparazioneconsole-legnano.webp')"></div>
        </div>
        <div class="hero-overlay"></div>
        <div class="container">
            <h1>Riparazione Console, Accessori e Retrogaming a Legnano</h1>
            <p>Interventi rapidi su tutte le Console moderne e Retrogaming.<br>Torna a giocare subito!</p>
            <div class="hero-buttons">
                <a href="#contatti" class="btn-hero">Contattaci Subito</a>
                <a href="#servizi" class="btn-hero-secondary">I Nostri Servizi</a>
            </div>
        </div>
    </section>

    <?php
    $newgen_services = array_filter($services, function ($s) {
        return $s['category'] === 'NewGEN';
    });
    $retro_services = array_filter($services, function ($s) {
        return $s['category'] === 'Retrogaming';
    });

    // Mappa immagini servizi
    $service_images = [
        'riparazione-ps5' => 'Sony PlayStation 5.webp',
        'riparazione-ps4' => 'Sony PlayStation 4.webp',
        'riparazione-xbox-series' => 'Xbox Series X.webp',
        'riparazione-xbox-one' => 'Xbox One S.webp',
        'riparazione-nintendo-switch' => 'Nintendo Switch OLED.webp',
        'riparazione-nintendo-ds-3ds' => 'Nintendo 3DS XL.webp',
        'riparazione-steam-deck' => 'Valve Steam Deck.webp',
        'riparazione-psp-vita' => 'Sony PS Vita and PSP.webp',
        'riparazione-gameboy' => 'Nintendo Game Boy DMG and Game Boy Color.webp',
        'riparazione-playstation-1-2' => 'Sony PlayStation 1 grey console stacked with a PlayStation 2 Slim.webp',
        'riparazione-nes-snes' => 'Nintendo Entertainment System (NES) and Super Nintendo (SNES) consoles.webp',
        'riparazione-nintendo-64-gamecube' => 'Nintendo 64 charcoal grey console next to a purple GameCube.webp',
        'riparazione-sega-mega-drive' => 'SEGA Dreamcast.webp', // Placeholder/Fallback
        'riparazione-sega-dreamcast' => 'SEGA Dreamcast.webp',
        'riparazione-xbox-classic-360' => 'Original Xbox console.webp',
        'riparazione-atari-commodore' => 'Atari 2600 wood-grain console and a Commodore 64 keyboard computer.webp'
    ];
    ?>

    <section id="servizi" class="services-section">
        <div class="container">
            <h2 class="section-title">Riparazione Console <span>NewGEN</span></h2>
            <p class="section-subtitle">Assistenza specializzata per le console di ultima generazione. PlayStation 5,
                Xbox Series X/S, Nintendo Switch e Steam Deck.</p>
            <div class="services-grid">
                <?php foreach ($newgen_services as $service): ?>
                    <?php
                    $img_file = $service_images[$service['slug']] ?? '';
                    $img_path = $img_file ? "/assets/img/servizi/$img_file" : '';
                    ?>
                    <a href="/<?= $service['slug'] ?>/legnano" class="service-card">
                        <div class="card-image-placeholder"
                            style="<?= $img_path ? "background-image: url('$img_path'); background-size: cover;" : '' ?>">
                        </div>
                        <h3><?= htmlspecialchars($service['name']) ?></h3>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="retrogaming" class="services-section bg-light">
        <div class="container">
            <h2 class="section-title">Riparazione <span>Retrogaming</span></h2>
            <p class="section-subtitle">Riportiamo in vita le tue console classiche. Game Boy, PlayStation 1/2, Nintendo
                64 e molto altro.</p>
            <div class="services-grid">
                <?php foreach ($retro_services as $service): ?>
                    <?php
                    $img_file = $service_images[$service['slug']] ?? '';
                    $img_path = $img_file ? "/assets/img/servizi/$img_file" : '';
                    ?>
                    <a href="/<?= $service['slug'] ?>/legnano" class="service-card">
                        <div class="card-image-placeholder"
                            style="<?= $img_path ? "background-image: url('$img_path'); background-size: cover;" : '' ?>">
                        </div>
                        <h3><?= htmlspecialchars($service['name']) ?></h3>
                    </a>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <section id="zone" class="zones-section bg-light">
        <div class="container">
            <h2 class="section-title">Dove Operiamo</h2>
            <p class="section-subtitle">La nostra rete di assistenza console copre Legnano, Milano e i comuni limitrofi.
                Porta la tua console in laboratorio o richiedi il ritiro a domicilio per un servizio comodo e veloce.
            </p>
            <div class="zones-wrapper">
                <div class="zones-column">
                    <h3><i class="fas fa-map-marker-alt"></i> Comuni Limitrofi</h3>
                    <div class="zones-list">
                        <?php foreach ($zones as $zone): ?>
                            <?php if ($zone['type'] == 'Comune'): ?>
                                <a href="/riparazione-ps5/<?= $zone['slug'] ?>"><?= htmlspecialchars($zone['name']) ?></a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="zones-column">
                    <h3><i class="fas fa-city"></i> Milano Città</h3>
                    <div class="zones-list">
                        <?php foreach ($zones as $zone): ?>
                            <?php if ($zone['type'] == 'Quartiere'): ?>
                                <a href="/riparazione-ps5/<?= $zone['slug'] ?>"><?= htmlspecialchars($zone['name']) ?></a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contatti" class="contact-section">
        <div class="container">
            <h2 class="section-title">Contattaci</h2>
            <form action="process_lead.php" method="POST" class="contact-form">
                <div class="form-row">
                    <input type="text" name="name" placeholder="Nome" required>
                    <input type="tel" name="phone" placeholder="Telefono" required>
                </div>
                <input type="email" name="email" placeholder="Email">

                <div class="form-row">
                    <div class="form-group">
                        <label>Tipo di Servizio</label>
                        <select name="service_id" required>
                            <option value="" disabled selected>-- Seleziona --</option>
                            <?php foreach ($services as $s): ?>
                                <option value="<?= $s['id'] ?>"><?= htmlspecialchars($s['name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Zona di Intervento</label>
                        <select name="zone_id" required>
                            <option value="" disabled selected>-- Seleziona --</option>
                            <?php foreach ($zones as $z): ?>
                                <option value="<?= $z['id'] ?>"><?= htmlspecialchars($z['name']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="request-types">
                    <p>Cosa ti serve? (Selezione multipla):</p>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="request_type[]" value="info" checked> Richiesta
                            Informazioni</label>
                        <label><input type="checkbox" name="request_type[]" value="quote"> Richiesta Preventivo</label>
                        <label><input type="checkbox" name="request_type[]" value="visit"> Uscita Assistenza</label>
                    </div>
                </div>

                <textarea name="message" placeholder="Descrivi il problema" rows="4"></textarea>

                <div class="privacy-wrapper">
                    <input type="checkbox" id="privacy_home" name="privacy" required>
                    <label for="privacy_home">Accetto la <a href="/privacy-policy" target="_blank">Privacy Policy</a> e
                        i <a href="/termini-servizio" target="_blank">Termini del Servizio</a>. Acconsento al
                        trattamento dei dati per la gestione della richiesta.</label>
                </div>

                <button type="submit" class="btn-submit">Invia Richiesta</button>
                <p class="legal-notice">I tuoi dati saranno trattati nel rispetto del GDPR e utilizzati esclusivamente
                    per ricontattarti in merito alla tua richiesta di assistenza.</p>
            </form>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <!-- Cookie Consent Banner -->
    <div id="cookie-consent-banner">
        <div class="cookie-content">
            <div class="cookie-text">
                <h3>Questo sito utilizza i cookie</h3>
                <p>
                    Utilizziamo i cookie per migliorare la tua esperienza di navigazione.
                    <a href="/cookie-policy" target="_blank">Maggiori informazioni</a>
                </p>
            </div>
            <div class="cookie-buttons">
                <button id="cookie-accept-all" class="cookie-btn">Accetta tutti</button>
                <button id="cookie-reject-all" class="cookie-btn">Rifiuta tutti</button>
                <button id="cookie-manage" class="cookie-btn">Gestisci preferenze</button>
            </div>
        </div>
    </div>

    <!-- Cookie Preferences Modal -->
    <div id="cookie-preferences-modal">
        <div class="cookie-modal-content">
            <div class="cookie-modal-header">
                <h2>Gestisci le tue preferenze sui cookie</h2>
                <button id="cookie-modal-close">&times;</button>
            </div>
            <div class="cookie-modal-body">
                <div class="cookie-category">
                    <div class="cookie-category-header">
                        <h3>Cookie Necessari</h3>
                        <label class="cookie-toggle">
                            <input type="checkbox" checked disabled>
                            <span class="cookie-toggle-slider"></span>
                        </label>
                    </div>
                    <p>
                        Questi cookie sono essenziali per il funzionamento del sito e non possono essere disabilitati.
                        Vengono utilizzati per la navigazione e per fornire le funzionalità di base.
                    </p>
                </div>

                <div class="cookie-category">
                    <div class="cookie-category-header">
                        <h3>Cookie Analitici</h3>
                        <label class="cookie-toggle">
                            <input type="checkbox" id="cookie-analytics">
                            <span class="cookie-toggle-slider"></span>
                        </label>
                    </div>
                    <p>
                        Questi cookie ci aiutano a capire come i visitatori interagiscono con il nostro sito.
                        Raccogliamo e analizziamo dati in forma anonima tramite Google Analytics.
                    </p>
                </div>
            </div>
            <div class="cookie-modal-footer">
                <button id="cookie-save-preferences" class="cookie-btn">Salva preferenze</button>
            </div>
        </div>
    </div>

    <script src="/assets/js/cookie-consent.js"></script>

</body>

</html>