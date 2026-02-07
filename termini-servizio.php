<?php
require_once 'includes/db_connect.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termini del Servizio - La Legnano Informatica</title>
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
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="container">
        <article class="legal-content">
            <h1>Termini del Servizio</h1>
            <p>Benvenuti su La Legnano Informatica. L'utilizzo di questo sito e dei nostri servizi è regolato dai
                seguenti termini e condizioni.</p>

            <h2>1. Descrizione del Servizio</h2>
            <p>La Legnano Informatica Srls offre servizi di assistenza informatica, riparazione hardware, consulenza e
                servizi digitali. Questo sito ha lo scopo di presentare tali servizi e permettere agli utenti di
                richiedere preventivi.</p>

            <h2>2. Accettazione dei Termini</h2>
            <p>Richiedendo un preventivo o un intervento tramite i nostri moduli di contatto, l'utente dichiara di aver
                letto e accettato le presenti condizioni di servizio e la nostra informativa sulla privacy.</p>

            <h2>3. Preventivi e Interventi</h2>
            <p>I preventivi forniti tramite email o telefono hanno valore puramente indicativo fino all'ispezione fisica
                del dispositivo da parte dei nostri tecnici. Ci riserviamo il diritto di rifiutare interventi se
                ritenuti non fattibili o non convenienti per il cliente.</p>

            <h2>4. Garanzia sulle Riparazioni</h2>
            <p>Tutte le nostre riparazioni sono coperte da una garanzia limitata sui componenti sostituiti. La garanzia
                decade in caso di manomissione del dispositivo da parte di terzi o in caso di danni accidentali
                successivi all'intervento.</p>

            <h2>5. Limite di Responsabilità</h2>
            <p>Non siamo responsabili per la perdita di dati sui dispositivi consegnati in riparazione. È responsabilità
                del cliente eseguire un backup completo dei propri dati prima di consegnare qualsiasi supporto hardware.
            </p>

            <h2>6. Contatti</h2>
            <p>Per qualsiasi chiarimento in merito ai presenti termini, è possibile contattarci all'indirizzo
                lalegnanoinformatica@gmail.com.</p>
        </article>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>

</html>