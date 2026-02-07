<?php
/**
 * SCRIPT DI RIPRISTINO E AGGIORNAMENTO CONTENUTI
 * Eseguire questo script dal browser: http://localhost/fix_content.php
 */

require_once 'includes/db_connect.php';

echo "<h2>Avvio ripristino contenuti...</h2>";

try {
    // 1. Assicuriamoci che la colonna esista
    echo "Verifica struttura database... ";
    try {
        $pdo->exec("ALTER TABLE services ADD COLUMN short_description TEXT AFTER name");
        echo "<span style='color:green'>Colonna aggiunta.</span><br>";
    } catch (PDOException $e) {
        if ($e->getCode() == '42S21') {
            echo "<span style='color:orange'>Colonna già presente.</span><br>";
        } else {
            throw $e;
        }
    }

    // 2. Mappa dei contenuti (Versione breve e lunga)
    $updates = [
        'assemblaggio-pc' => [
            'short' => 'Progettiamo e assembliamo il tuo computer ideale. Dalle potenti workstation per professionisti ai PC gaming più estremi, curiamo ogni dettaglio hardware.',
            'long' => 'Il nostro servizio di assemblaggio PC offre una consulenza tecnica completa per creare una macchina su misura per le tue reali necessità. Non ci limitiamo a montare i componenti: studiamo il bilanciamento hardware, ottimizziamo il flusso d\'aria per il raffreddamento e gestiamo il cablaggio in modo professionale.'
        ],
        'riparazione-console' => [
            'short' => 'Assistenza rapida per PS5, Xbox e Nintendo. Ripariamo porte HDMI, lettori, joy-con e problemi di surriscaldamento per farti tornare a giocare subito.',
            'long' => 'Siamo esperti nella riparazione delle console da gioco di ultima e penultima generazione. Interveniamo su guasti hardware complessi come la sostituzione di chip video o porte HDMI danneggiate. Offriamo inoltre servizi di manutenzione preventiva come la pulizia interna profonda.'
        ],
        'servizi-digitali' => [
            'short' => 'Supporto completo per la tua vita digitale: attivazione SPID, configurazione PEC, firma digitale e assistenza per la burocrazia online.',
            'long' => 'Navigare tra le piattaforme della Pubblica Amministrazione può essere frustrante. Noi ti offriamo un supporto passo-passo per attivare e imparare a usare gli strumenti digitali indispensabili oggi: dallo SPID alla Posta Elettronica Certificata (PEC), fino alla Firma Digitale.'
        ],
        'consulenza-acquisto' => [
            'short' => 'Non sprecare soldi in acquisti sbagliati. Ti aiutiamo a scegliere il miglior PC, notebook o tablet in base al tuo budget e utilizzo reale.',
            'long' => 'Il mercato informatico è invaso da modelli simili ma con prestazioni molto diverse. Con il nostro servizio di consulenza all\'acquisto, analizziamo le tue abitudini di studio, lavoro o svago per consigliarti il dispositivo con il miglior rapporto qualità-prezzo.'
        ],
        'contenuti-ai' => [
            'short' => 'Sfrutta la potenza dell\'Intelligenza Artificiale per la tua attività. Generiamo testi creativi, immagini e soluzioni di automazione intelligenti.',
            'long' => 'L\'Intelligenza Artificiale è la nuova frontiera della produttività. Ti aiutiamo a integrare strumenti di AI nel tuo flusso di lavoro per generare contenuti di qualità in tempi record. Offriamo copywriting assistito per blog e social.'
        ],
        'creazioni-grafiche' => [
            'short' => 'Diamo un volto professionale al tuo brand. Realizziamo loghi, biglietti da visita, brochure e grafiche coordinate per social e web.',
            'long' => 'L\'immagine coordinata è il primo biglietto da visita per un professionista o una piccola impresa. Il nostro servizio grafico si occupa di tradurre la tua visione in elementi visivi concreti: dalla creazione di loghi vettoriali unici alla progettazione di materiale cartaceo.'
        ],
        'ripristino-so' => [
            'short' => 'Il tuo PC è bloccato o lentissimo? Reinstalliamo Windows, macOS o Linux salvando i tuoi dati e configurando tutto per un riavvio perfetto.',
            'long' => 'A volte la pulizia software non basta e l\'unica soluzione è un ripristino profondo. Il nostro servizio di installazione sistema operativo prevede il backup completo dei tuoi dati, la formattazione sicura dell\'unità e l\'installazione dell\'ultima versione stabile.'
        ],
        'software-antivirus' => [
            'short' => 'Installazione programmi professionali e protezione totale contro virus, malware e cyber-attacchi. Metti al sicuro i tuoi dati preziosi.',
            'long' => 'Un PC senza un software adeguato ed una protezione solida è vulnerabile e inefficiente. Ci occupiamo dell\'installazione e configurazione di pacchetti Office, software di grafica e suite gestionali. Fondamentale è poi la nostra consulenza sulla sicurezza.'
        ],
        'siti-web' => [
            'short' => 'La tua vetrina online professionale. Creiamo siti web moderni, veloci e ottimizzati per Google per farti trovare dai tuoi clienti.',
            'long' => 'Non basta esserci, bisogna farsi notare. Progettiamo siti web "responsive" (perfetti su smartphone e tablet) che caricano istantaneamente. Dalla semplice landing page per promuovere un unico servizio, al sito vetrina per liberi professionisti.'
        ],
        'recupero-dati' => [
            'short' => 'Recuperiamo i tuoi ricordi e documenti importanti da Hard Disk rotti, chiavette USB danneggiate e schede di memoria non funzionanti.',
            'long' => 'Un file cancellato per errore o un Hard Disk che non viene più rilevato non significano necessariamente la perdita definitiva dei dati. Con tecniche software avanzate recuperiamo dati da supporti magnetici e stati solidi (SSD).'
        ],
        'pulizia-sicurezza' => [
            'short' => 'Rimozione virus e pulizia interna del computer. Eliminiamo polvere e file inutili per evitare surriscaldamenti e rallentamenti.',
            'long' => 'La manutenzione preventiva è il segreto per longevi dispositivi. Offriamo una doppia pulizia: digitale e fisica. Digitalmente, rimuoviamo file temporanei e programmi spia. Fisicamente, apriamo il dispositivo per rimuovere la polvere.'
        ],
        'riparazione-pc' => [
            'short' => 'Diagnosi e riparazione hardware/software per ogni tipo di computer. Risolviamo guasti alla scheda madre, alimentatori e periferiche.',
            'long' => 'Il nostro core business è la risoluzione di qualsiasi anomalia informatica. Gestiamo riparazioni hardware come la sostituzione di componenti bruciati (alimentatori, schede video) o schede madri difettose. In ambito software, risolviamo conflitti.'
        ],
        'smaltimento' => [
            'short' => 'Smaltiamo correttamente il tuo vecchio materiale elettronico (RAEE) proteggendo l\'ambiente e cancellando i tuoi dati personali.',
            'long' => 'I rifiuti elettronici non vanno gettati nella spazzatura comune. Offriamo un servizio di ritiro e smaltimento a norma di legge per computer rotti, stampanti, monitor e cavi con cancellazione sicura dei dati.'
        ],
        'schermi-batterie' => [
            'short' => 'Sostituzione display notebook e smartphone. Cambiamo la tua batteria vecchia o gonfia per ridare autonomia ai tuoi dispositivi.',
            'long' => 'Schermo rotto o batteria che dura pochi minuti? Siamo rapidi nella sostituzione di pannelli display per notebook di ogni marca e per i principali modelli di smartphone e tablet. Utilizziamo componenti di ricambio certificati.'
        ],
        'upgrade-pc' => [
            'short' => 'Potenzia il tuo computer con dischi SSD e più memoria RAM. Prestazioni raddoppiate senza cambiare il tuo attuale PC.',
            'long' => 'La maggior parte dei computer lenti può rinascere con un semplice upgrade. Passare da un vecchio Hard Disk meccanico a un moderno disco a stato solido (SSD) garantisce una velocità fino a 10 volte superiore.'
        ],
        'vendita-accessori' => [
            'short' => 'Ampia scelta di cavi, alimentatori, mouse, borse e periferiche esterne. Tutto ciò che serve per completare la tua postazione IT.',
            'long' => 'Presso il nostro centro o su ordinazione rapida, trovi ogni accessorio indispensabile per il tuo ecosistema informatico. Selezioniamo solo periferiche affidabili: da tastiere ergonomiche a caricatori universali certificati.'
        ],
        'vendita-pc' => [
            'short' => 'Computer nuovi e ricondizionati con garanzia. Ti guidiamo nella scelta della macchina perfetta già pronta all\'uso.',
            'long' => 'Offriamo una selezione di computer desktop e notebook accuratamente scelti. I nostri PC nuovi sono configurati e ottimizzati prima della consegna. Disponiamo inoltre di macchine "Ricondizionate Professionali".'
        ],
        'assistenza-stampanti' => [
            'short' => 'Riparazione e configurazione di stampanti laser e inkjet. Risolviamo inceppamenti di carta, problemi di rete e qualità stampa.',
            'long' => 'Le stampanti sono spesso il punto debole della produttività. Interveniamo su inceppamenti meccanici, errori di testine otturate o sensori sporchi. Ti supportiamo nella configurazione wireless e di rete.'
        ]
    ];

    echo "Aggiornamento testi dei servizi...<br>";
    $stmt = $pdo->prepare("UPDATE services SET short_description = :short, description = :long WHERE slug = :slug");

    foreach ($updates as $slug => $content) {
        $stmt->execute([
            ':short' => $content['short'],
            ':long' => $content['long'],
            ':slug' => $slug
        ]);
        echo " - Servizio $slug: <span style='color:green'>OK</span><br>";
    }

    echo "<h3>Tutto completato con successo!</h3>";
    echo "<p>Controlla la homepage: ora dovresti vedere le descrizioni brevi.</p>";
    echo "<p><a href='/'>Torna alla Home</a></p>";

} catch (Exception $e) {
    echo "<h3 style='color:red'>ERRORE: " . $e->getMessage() . "</h3>";
}
?>