<?php
require_once 'includes/db_connect.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - La Legnano Informatica</title>
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        .legal-content {
            padding: 120px 0 80px;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
            color: var(--text-main);
        }

        .legal-content h1 {
            margin-bottom: 30px;
            color: var(--primary-accent);
        }

        .legal-content h2 {
            margin: 30px 0 15px;
            font-size: 1.3rem;
        }

        .legal-content p {
            margin-bottom: 15px;
        }
    </style>
    <?php include 'includes/head_analytics.php'; ?>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="container">
        <article class="legal-content">
            <h1>Privacy Policy</h1>
            <p>Questa Privacy Policy descrive le modalità con cui La Legnano Informatica Srls ("noi", "ci", "nostro")
                raccoglie, utilizza e protegge i dati personali forniti dagli utenti attraverso questo sito web.</p>

            <h2>1. Titolare del Trattamento</h2>
            <p>Il titolare del trattamento dei dati è:<br>
                <strong>La Legnano Informatica Srls</strong><br>
                Via Palermo n°3, 20025 Legnano (MI)<br>
                P.Iva: 13983930960<br>
                Email: lalegnanoinformatica@gmail.com
            </p>

            <h2>2. Tipologia di dati raccolti</h2>
            <p>Attraverso i moduli di contatto presenti sul sito, raccogliamo i seguenti dati personali:</p>
            <ul>
                <li>Nome</li>
                <li>Indirizzo Email</li>
                <li>Recapito Telefonico</li>
                <li>Dettagli della richiesta e zona di intervento</li>
            </ul>

            <h2>3. Finalità del trattamento</h2>
            <p>I dati forniti verranno utilizzati esclusivamente per:</p>
            <ul>
                <li>Gestire e rispondere alle tue richieste di assistenza o preventivo.</li>
                <li>Ricontattarti per fornirti informazioni tecniche o commerciali relative ai nostri servizi.</li>
            </ul>

            <h2>4. Base giuridica</h2>
            <p>Il trattamento dei dati si basa sul tuo esplicito consenso, fornito tramite la selezione delle caselle di
                controllo (checkbox) presenti nei moduli di contatto, e sulla necessità di eseguire misure
                pre-contrattuali su tua richiesta.</p>

            <h2>5. Conservazione dei dati</h2>
            <p>I dati saranno conservati solo per il tempo strettamente necessario a gestire la tua richiesta o per
                scopi amministrativi e legali, in conformità con la normativa vigente (GDPR).</p>

            <h2>6. Diritti dell'utente</h2>
            <p>Ai sensi del GDPR (Regolamento UE 2016/679), hai il diritto di accedere ai tuoi dati, chiederne la
                rettifica, la cancellazione o la limitazione del trattamento. Puoi esercitare tali diritti inviando
                un'email a lalegnanoinformatica@gmail.com.</p>
        </article>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>

</html>