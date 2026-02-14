<?php
// Content definitions for specific services
// Using HTML structures compatible with existing CSS classes

$service_contents = [];

// --- PS5 ---
$service_contents['riparazione-ps5'] = '
<div class="service-rich-content">
    <h3>Riparazioni Hardware PlayStation 5</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-microchip"></i>
            <div>
                <strong>Riparazione Porta HDMI</strong>
                <p>Sostituzione connettore video danneggiato o staccato dalla scheda madre. Risolviamo problemi di "nessun segnale" o schermo nero.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-compact-disc"></i>
            <div>
                <strong>Lettore Ottico / Blu-ray</strong>
                <p>La tua PS5 non legge i dischi o fa rumori strani? Sostituiamo il lettore o la lente laser per farla tornare come nuova.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-thermometer-half"></i>
            <div>
                <strong>Surriscaldamento e Ventole</strong>
                <p>Sostituzione ventola di raffreddamento e ripristino del metallo liquido. Stop agli spegnimenti improvvisi.</p>
            </div>
        </div>
    </div>

    <div class="service-details-box" style="margin-top: 30px;">
        <h3>Interventi su Scheda Madre PS5</h3>
        <p>Il nostro laboratorio è specializzato in micro-saldature. Effettuiamo <strong>reflow e reballing di CPU/GPU</strong> per risolvere artefatti grafici e il famigerato "Blue Light of Death" (BLOD). Ripariamo anche circuiti di alimentazione e moduli Wi-Fi/Bluetooth difettosi.</p>
    </div>

    <div class="benefits-grid" style="margin-top: 30px; grid-template-columns: 1fr 1fr;">
        <div class="benefit-item">
            <i class="fas fa-gamepad"></i>
            <div>
                <strong>Riparazione Controller DualSense</strong>
                <p>Risolviamo problemi di <strong>drift degli stick analogici</strong>, tasti bloccati e connettori di ricarica USB-C danneggiati. Sostituiamo anche batterie esauste.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-tools"></i>
            <div>
                <strong>Manutenzione Software</strong>
                <p>Aggiornamento firmware, ripristino sistema operativo da Safe Mode e risoluzione errori di database. Pulizia interna professionale inclusa.</p>
            </div>
        </div>
    </div>
</div>
';

// --- PS4 ---
$service_contents['riparazione-ps4'] = '
<div class="service-rich-content">
    <h3>Riparazioni Hardware PlayStation 4</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-tv"></i>
            <div>
                <strong>Porta HDMI e Video</strong>
                <p>Sostituzione porta HDMI e chip Panasonic/MN864729 filtri video. Soluzione definitiva per console che si accendono ma non mostrano video.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-hdd"></i>
            <div>
                <strong>Sostituzione Hard Disk / SSD</strong>
                <p>Console lenta o bloccata? Installiamo nuovi Hard Disk o velocissimi SSD per ridurre i tempi di caricamento e risolvere crash di sistema.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-wind"></i>
            <div>
                <strong>Pulizia e Pasta Termica</strong>
                <p>La tua PS4 sembra un aereo in decollo? Pulizia completa e sostituzione pasta termica professionale per renderla silenziosa.</p>
            </div>
        </div>
    </div>

    <div class="service-details-box" style="margin-top: 30px;">
        <h3>Problemi di Alimentazione e Scheda Madre</h3>
        <p>Se la tua PS4 non si accende proprio o si spegne dopo pochi secondi (Blue Light of Death), interveniamo sull\'alimentatore interno o sui componenti della scheda madre. Effettuiamo diagnosi precise per identificare corto circuiti o fusibili bruciati.</p>
    </div>

    <div class="benefits-grid" style="margin-top: 30px; grid-template-columns: 1fr 1fr;">
        <div class="benefit-item">
            <i class="fas fa-gamepad"></i>
            <div>
                <strong>Riparazione DualShock 4</strong>
                <p>Addio <strong>stick analogico drift</strong>! Sostituiamo potenziometri, gomme conduttive e batterie che non tengono più la carica.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-compact-disc"></i>
            <div>
                <strong>Lettore e Meccanica</strong>
                <p>Sostituzione rulli di trascinamento, lente laser KEM-490/860 e meccanismi inceppati. La tua PS4 tornerà a leggere ogni gioco.</p>
            </div>
        </div>
    </div>
</div>
';

// --- Xbox Series ---
$service_contents['riparazione-xbox-series'] = '
<div class="service-rich-content">
    <h3>Assistenza Xbox Series X e Series S</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-plug"></i>
            <div>
                <strong>Riparazione Porta HDMI 2.1</strong>
                <p>Sostituzione professionale del connettore HDMI su Xbox Series X e S. Utilizziamo ricambi rinforzati per garantire durata nel tempo.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-memory"></i>
            <div>
                <strong>Espansione Memoria SSD</strong>
                <p>Problemi con l\'SSD interno? Diagnosi e sostituzione memorie, oltre a riparazioni su slot di espansione Seagate danneggiati.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-power-off"></i>
            <div>
                <strong>Alimentazione e Avvio</strong>
                <p>Risoluzione problemi di accensione, spegnimenti improvvisi e guasti all\'alimentatore interno o ai mosfet della scheda madre.</p>
            </div>
        </div>
    </div>

    <div class="service-details-box" style="margin-top: 30px;">
        <h3>Manutenzione Avanzata</h3>
        <p>Xbox Series X è una macchina potente che necessita di respirare. Effettuiamo pulizia approfondita dalla polvere e sostituzione pasta termica qualora necessario. Interveniamo anche su moduli Wi-Fi e Bluetooth per problemi di connessione controller.</p>
    </div>
</div>
';

// --- Nintendo Switch ---
$service_contents['riparazione-nintendo-switch'] = '
<div class="service-rich-content">
    <h3>Riparazione Nintendo Switch, Lite e OLED</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-charging-station"></i>
            <div>
                <strong>Connettore USB-C e Ricarica</strong>
                <p>Sostituzione porta di ricarica USB-C danneggiata. Se la console non carica o non va in dock, ripariamo anche il chip M92T36 di gestione alimentazione.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-gamepad"></i>
            <div>
                <strong>Joy-Con Drift e Binari</strong>
                <p>Soluzione definitiva al <strong>Drift dei Joy-Con</strong> con sostituzione stick. Riparazione binari laterali per controller che non si sincronizzano.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-tablet-alt"></i>
            <div>
                <strong>Sostituzione Schermo LCD/Touch</strong>
                <p>Riparazione vetri rotti, touch screen non funzionanti e display LCD/OLED danneggiati o con righe.</p>
            </div>
        </div>
    </div>

    <div class="service-details-box" style="margin-top: 30px;">
        <h3>Problemi di Avvio e Scheda Madre</h3>
        <p>Tua Switch è bloccata suschermo blu o arancione? Effettuiamo <strong>reflow CPU/RAM</strong> e riparazione chip WiFi. Sostituiamo anche batterie esauste che durano poco in portabilità e lettori cartucce giochi che non leggono più le schede.</p>
    </div>
</div>
';

// --- Nintendo 3DS / 2DS ---
$service_contents['riparazione-nintendo-3ds'] = '
<div class="service-rich-content">
    <h3>Assistenza Nintendo 2DS e 3DS (Tutti i modelli)</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-mobile-alt"></i>
            <div>
                <strong>Sostituzione Schermi LCD</strong>
                <p>Riparazione schermo superiore o inferiore danneggiato per 2DS, 3DS e versioni XL. Risolviamo problemi di pixel bruciati o schermi neri.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-charging-station"></i>
            <div>
                <strong>Connettore di Ricarica</strong>
                <p>La console non carica più? Sostituiamo il connettore di alimentazione saldato su scheda madre per ripristinare la corretta carica.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-gamepad"></i>
            <div>
                <strong>Circle Pad e Tasti</strong>
                <p>Sostituzione stick analogico "Circle Pad" rotto o usurato e riparazione tasti L/R che non cliccano più.</p>
            </div>
        </div>
    </div>
    
    <div class="service-details-box" style="margin-top: 30px;">
        <h3>Problemi Software e Cerniere</h3>
        <p>Riparazione cerniere spezzate che dividono la console in due. Risoluzione problemi software, console che si accende e spegne subito (pop sound) e sostituzione slot cartucce gioco.</p>
    </div>
</div>
';

// --- Game Boy / Color / Advance ---
$content_gameboy = '
<div class="service-rich-content">
    <h3>Restauro e Riparazione Game Boy</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-battery-full"></i>
            <div>
                <strong>Sostituzione Batteria interna</strong>
                <p>I tuoi giochi non salvano più? Sostituiamo la batteria tampone nelle cartucce e ripariamo contatti batteria ossidati nella console.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-volume-up"></i>
            <div>
                <strong>Audio e Speaker</strong>
                <p>Volume basso o assente? Sostituzione speaker e riparazione jack cuffie per sentire di nuovo la musica a 8-bit.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-tv"></i>
            <div>
                <strong>Schermo e Vetro</strong>
                <p>Sostituzione vetrino protettivo graffiato e installazione kit <strong>Schermo IPS Retroilluminato</strong> per una visibilità perfetta.</p>
            </div>
        </div>
    </div>
    
    <div class="service-details-box" style="margin-top: 30px;">
        <h3>Pulizia e Recapping</h3>
        <p>Il tempo è nemico dell\'elettronica. Effettuiamo pulizia approfondita da ossido tasti e sostituzione condensatori (Recapping) per ridare vita a Game Boy classici che non si accendono più.</p>
    </div>
</div>
';
$service_contents['riparazione-gameboy'] = $content_gameboy;
$service_contents['riparazione-gameboy-advance'] = $content_gameboy;

// --- PlayStation 2 / 3 ---
$content_ps2_ps3 = '
<div class="service-rich-content">
    <h3>Assistenza RetroSony: PS2 e PS3</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-compact-disc"></i>
            <div>
                <strong>Lettura Dischi</strong>
                <p>La tua PS2 non legge più i DVD? O la PS3 non vede i Blu-ray? Taratura e sostituzione ottica laser per tornare a giocare.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-thermometer-half"></i>
            <div>
                <strong>Surriscaldamento YLOD</strong>
                <p>Per PS3 Fat/Slim: Pulizia profonda, sostituzione pasta termica e, se necessario, reflow per tentare il ripristino da Yellow Light of Death.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-power-off"></i>
            <div>
                <strong>Alimentazione</strong>
                <p>Riparazione alimentatori interni e sostituzione cavi flat danneggiati che impediscono l\'accensione della console.</p>
            </div>
        </div>
    </div>
</div>
';
$service_contents['riparazione-ps2'] = $content_ps2_ps3;
$service_contents['riparazione-ps3'] = $content_ps2_ps3;

// --- Xbox 360 ---
$service_contents['riparazione-xbox360'] = '
<div class="service-rich-content">
    <h3>Riparazione Xbox 360 e One</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-circle-notch"></i>
            <div>
                <strong>Red Ring of Death</strong>
                <p>Diagnosi avanzata per i 3 LED rossi. Sostituzione pasta termica (modifica X-Clamp) e pulizia ventole per prevenire surriscaldamenti.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-compact-disc"></i>
            <div>
                <strong>Lettore DVD inceppato</strong>
                <p>Il carrello non si apre o non legge il gioco? Riparazione meccanismo cinghia e sostituzione lente laser.</p>
            </div>
        </div>
    </div>
</div>
';

// --- Generic / Other ---
$service_contents['assemblaggio-pc-gaming'] = '
<div class="service-rich-content">
    <h3>Assemblaggio e Ottimizzazione PC Gaming</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-tools"></i>
            <div>
                <strong>Assemblaggio Su Misura</strong>
                <p>Costruiamo il tuo PC da zero: scelta componenti, assemblaggio pulito con cable management professionale e test stress.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-tachometer-alt"></i>
            <div>
                <strong>Ottimizzazione e Overclock</strong>
                <p>Installazione Windows ottimizzata, aggiornamento BIOS e driver, curve ventole personalizzate per massime prestazioni.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-stethoscope"></i>
            <div>
                <strong>Diagnosi e Upgrade</strong>
                <p>Il PC non parte o è lento? Identifichiamo il guasto o ti consigliamo i migliori upgrade (RAM, GPU, SSD) per tornare al top.</p>
            </div>
        </div>
    </div>
</div>
';