<?php
// Content definitions for specific services
// Matches slugs in 'services' table exactly

$service_contents = [];

// ==========================================
// NEW GEN (8 Items)
// ==========================================

// 1. Riparazione PlayStation 5
$service_contents['riparazione-ps5'] = '
<div class="service-rich-content">
    <h3>Riparazioni Hardware PlayStation 5</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-microchip"></i>
            <div>
                <strong>Riparazione Porta HDMI</strong>
                <p>Sostituzione connettore video danneggiato. Risolviamo problemi di schermo nero o nessun segnale con ricambi rinforzati.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-compact-disc"></i>
            <div>
                <strong>Lettore Blu-ray</strong>
                <p>La console non legge i dischi? Sostituiamo la lente laser o il meccanismo di trascinamento per tornare a giocare.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-thermometer-half"></i>
            <div>
                <strong>Surriscaldamento</strong>
                <p>Pulizia interna, sostituzione ventola e ripristino metallo liquido per evitare spegnimenti improvvisi.</p>
            </div>
        </div>
    </div>
    <div class="service-details-box" style="margin-top: 30px;">
        <h3>Scheda Madre e Controller</h3>
        <p>Interventi di <strong>reballing APU</strong> per guasti gravi (BLOD). Riparazione <strong>DualSense drift</strong>, tasti bloccati e connettori USB-C di ricarica. Sostituzione scheda WiFi/Bluetooth.</p>
    </div>
</div>';

// 2. Riparazione PlayStation 4
$service_contents['riparazione-ps4'] = '
<div class="service-rich-content">
    <h3>Riparazioni Hardware PlayStation 4</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-tv"></i>
            <div>
                <strong>Porta HDMI e Chip Video</strong>
                <p>Sostituzione porta HDMI e chip Panasonic (WLOD) per console che si accendono ma non mostrano immagini.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-hdd"></i>
            <div>
                <strong>Upgrade SSD</strong>
                <p>Sostituzione Hard Disk con SSD veloce per ridurre i tempi di caricamento e risolvere blocchi o lentezza di sistema.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-plane-departure"></i>
            <div>
                <strong>Ventola Rumorosa</strong>
                <p>La tua PS4 sembra un aereo? Pulizia completa e pasta termica di alta qualità per renderla silenziosa.</p>
            </div>
        </div>
    </div>
    <div class="service-details-box" style="margin-top: 30px;">
        <h3>Alimentazione e DualShock 4</h3>
        <p>Riparazione alimentatori interni per console che non si accendono. Sostituzione batterie, gommini e stick analogici (Drift) per controller DualShock 4.</p>
    </div>
</div>';

// 3. Riparazione Xbox Series X/S
$service_contents['riparazione-xbox-series'] = '
<div class="service-rich-content">
    <h3>Assistenza Xbox Series X e Series S</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-plug"></i>
            <div>
                <strong>Porta HDMI 2.1</strong>
                <p>Sostituzione connettore HDMI 2.1 danneggiato su Series X e S con saldature professionali al microscopio.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-memory"></i>
            <div>
                <strong>Espansione SSD</strong>
                <p>Diagnosi e riparazione circuito SSD interno o slot espansione. Risoluzione errori di sistema E100/E101.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-power-off"></i>
            <div>
                <strong>Problemi Accensione</strong>
                <p>Riparazione scheda madre per guasti ai mosfet o all\'alimentatore interno. Risoluzione spegnimenti immediati.</p>
            </div>
        </div>
    </div>
    <div class="service-details-box" style="margin-top: 30px;">
        <h3>Manutenzione e Controller</h3>
        <p>Pulizia dalla polvere per prevenire surriscaldamenti. Riparazione Elite Controller e pad standard: tasti LB/RB, drift analogici e grip scollati.</p>
    </div>
</div>';

// 4. Riparazione Xbox One
$service_contents['riparazione-xbox-one'] = '
<div class="service-rich-content">
    <h3>Riparazione Xbox One (Fat, S, X)</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-compact-disc"></i>
            <div>
                <strong>Lettore Dischi</strong>
                <p>Riparazione meccanica carrello inceppato e sostituzione lente laser per giochi non riconosciuti.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-hdd"></i>
            <div>
                <strong>Green Screen of Death</strong>
                <p>Risoluzione blocco su logo verde tramite sostituzione HDD/SSD e ripristino software di sistema (OSU1).</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-microchip"></i>
            <div>
                <strong>Chip Retimer HDMI</strong>
                <p>Sostituzione chip controllo video per console con schermo nero nonostante la porta HDMI sembri integra.</p>
            </div>
        </div>
    </div>
   <div class="service-details-box" style="margin-top: 30px;">
        <h3>Aggiornamenti e Pulizia</h3>
        <p>Sostituzione pasta termica essiccata. Aggiornamento dashboard offline per console che non riescono a completare l\'update via internet.</p>
    </div>
</div>';

// 5. Riparazione Nintendo Switch
$service_contents['riparazione-nintendo-switch'] = '
<div class="service-rich-content">
    <h3>Assistenza Nintendo Switch, Lite e OLED</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-charging-station"></i>
            <div>
                <strong>Connettore USB-C</strong>
                <p>Sostituzione porta ricarica e chip M92T36. Risolviamo problemi di carica lenta o mancata connessione alla TV (Dock).</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-gamepad"></i>
            <div>
                <strong>Joy-Con Drift</strong>
                <p>Sostituzione stick analogici difettosi che "si muovono da soli". Riparazione tasti SL/SR e binari laterali.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-tablet-alt"></i>
            <div>
                <strong>Schermo LCD/Touch</strong>
                <p>Riparazione vetro rotto (digitizer) o display LCD/OLED danneggiato. Sostituzione lettore cartucce gioco.</p>
            </div>
        </div>
    </div>
    <div class="service-details-box" style="margin-top: 30px;">
        <h3>Scheda Madre e Batteria</h3>
        <p>Reflow CPU/RAM per schermate blu/arancioni. Sostituzione batteria esausta che dura poco. Riparazione modulo WiFi per segnale debole.</p>
    </div>
</div>';

// 6. Riparazione Nintendo DS & 3DS
$service_contents['riparazione-ds-3ds'] = '
<div class="service-rich-content">
    <h3>Riparazione Nintendo 3DS, 2DS, DSi e XL</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-mobile-alt"></i>
            <div>
                <strong>Sostituzione Schermi</strong>
                <p>Riparazione display superiore o inferiore rotto. Risoluzione problemi di pixel o schermo nero all\'accensione.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-plug"></i>
            <div>
                <strong>Porta Ricarica</strong>
                <p>Sostituzione connettore di alimentazione dissaldato o danneggiato. La console tornerà a caricarsi perfettamente.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-gamepad"></i>
            <div>
                <strong>Circle Pad e Cerniere</strong>
                <p>Sostituzione stick Circle Pad rotto gomme. Riparazione cerniera spezzata (case replacement).</p>
            </div>
        </div>
    </div>
    <div class="service-details-box" style="margin-top: 30px;">
        <h3>Lettore Giochi e Software</h3>
        <p>Sostituzione slot cartucce che non leggono i giochi. Interventi su software brickato e fusibili su scheda madre.</p>
    </div>
</div>';

// 7. Riparazione Steam Deck & ASUS ROG
$service_contents['riparazione-steam-deck'] = '
<div class="service-rich-content">
    <h3>Assistenza Steam Deck, ASUS ROG Ally, Lenovo Legion</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-gamepad"></i>
            <div>
                <strong>Stick Drift Hall Effect</strong>
                <p>Sostituzione stick analogici con versioni Hall Effect magnetiche anti-drift per una precisione assoluta.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-hdd"></i>
            <div>
                <strong>Upgrade SSD NVMe</strong>
                <p>Installazione SSD maggiorati (1TB/2TB) con clonazione dati e reinstallazione SteamOS/Windows.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-fan"></i>
            <div>
                <strong>Ventola e Temperature</strong>
                <p>Sostituzione ventola rumorosa (Huaying/Delta) e applicazione pasta termica PTM7950 per temperature ottimali.</p>
            </div>
        </div>
    </div>
     <div class="service-details-box" style="margin-top: 30px;">
        <h3>Schermo e Batteria</h3>
        <p>Sostituzione display rotto (incollaggio professionale anti-lightbleed). Cambio batteria esausta per ripristinare l\'autonomia in mobilità.</p>
    </div>
</div>';

// 8. Riparazione PSP & PS Vita
$service_contents['riparazione-psp-vita'] = '
<div class="service-rich-content">
    <h3>Riparazione Sony PSP e PS Vita</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-tv"></i>
            <div>
                <strong>Display LCD/OLED</strong>
                <p>Sostituzione schermo rotto su PSP 1000/2000/3000/Go e PS Vita (OLED/LCD). Ripristino colori vividi.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-compact-disc"></i>
            <div>
                <strong>Lettore UMD</strong>
                <p>La tua PSP non legge i giochi UMD? Ripariamo il meccanismo laser rumoroso o che non gira.</p>
            </div>
        </div>
         <div class="benefit-item">
            <i class="fas fa-gamepad"></i>
            <div>
                <strong>Stick Analogico</strong>
                <p>Sostituzione stick che drifta o "ghost movement" durante il gioco. Pulizia contatti pulsanti.</p>
            </div>
        </div>
    </div>
     <div class="service-details-box" style="margin-top: 30px;">
        <h3>Batteria e Unbrick</h3>
        <p>Sostituzione batteria rigonfia o che dura poco. Sblocco console "brickate" (schermo nero fisso led verde) via software o hardware.</p>
    </div>
</div>';

// ==========================================
// RETROGAMING (8 Items)
// ==========================================

// 9. Riparazione Game Boy Family
$service_contents['riparazione-gameboy'] = '
<div class="service-rich-content">
    <h3>Restauro Game Boy (Classic, Color, Advance, SP)</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-battery-full"></i>
            <div>
                <strong>Batterie Cartucce</strong>
                <p>I salvataggi spariscono? Sostituiamo le batterie tampone CR1616/CR2025 nelle tue cartucce Pokémon e Zelda.</p>
            </div>
        </div>
         <div class="benefit-item">
            <i class="fas fa-lightbulb"></i>
            <div>
                <strong>Schermi IPS Retroilluminati</strong>
                <p>Installazione mod schermi IPS moderni: luminosi, nitidi e retroilluminati per giocare al buio.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-volume-up"></i>
            <div>
                <strong>Speaker e Jack Audio</strong>
                <p>Audio basso o gracchiante? Sostituzione altoparlante e pulizia connettore cuffie ossidato.</p>
            </div>
        </div>
    </div>
    <div class="service-details-box" style="margin-top: 30px;">
        <h3>Recapping e Pulizia Tasti</h3>
        <p>Pulizia contatti accensione ossidati (Power switch). Sostituzione condensatori (Recapping) per ridare vita a console che non si accendono più.</p>
    </div>
</div>';

// 10. Riparazione PlayStation 1 & 2
$service_contents['riparazione-ps1-ps2'] = '
<div class="service-rich-content">
    <h3>Assistenza Sony PlayStation 1 e 2</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-compact-disc"></i>
            <div>
                <strong>Taratura Ottica Laser</strong>
                <p>PS1 o PS2 fatica a leggere i giochi o i video scattano? Taratura professionale o sostituzione blocco ottico.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-memory"></i>
            <div>
                <strong>Memory Card Slot</strong>
                <p>Riparazione slot Memory Card difettosi che non rilevano i salvataggi. Pulizia porte controller.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-power-off"></i>
            <div>
                <strong>Alimentatore Interno</strong>
                <p>Sostituzione condensatori su alimentatore per console che non danno segni di vita.</p>
            </div>
        </div>
    </div>
</div>';

// 11. Riparazione NES & SNES
$service_contents['riparazione-nes-snes'] = '
<div class="service-rich-content">
    <h3>Restauro Nintendo NES e Super Nintendo</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-search"></i>
            <div>
                <strong>Pin Connector 72-Pin</strong>
                <p>Il NES lampeggia (Blinking Light)? Ricondizionamento o sostituzione connettore cartucce a 72 pin.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-tv"></i>
            <div>
                <strong>Uscita Video</strong>
                <p>Riparazione uscite RF/AV disturbate. Modifiche RGB per la massima qualità video su TV moderne.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-tools"></i>
            <div>
                <strong>Sbiancamento (Retrobright)</strong>
                <p>Trattamento plastiche ingiallite dal sole per riportare la scocca al grigio originale.</p>
            </div>
        </div>
    </div>
</div>';

// 12. Riparazione N64 & GameCube
$service_contents['riparazione-n64-gamecube'] = '
<div class="service-rich-content">
    <h3>Assistenza Nintendo 64 e GameCube</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-gamepad"></i>
            <div>
                <strong>Stick Analogico N64</strong>
                <p>Lo stick del pad N64 "balla"? Sostituzione bowl e ingranaggi o installazione stick stile GameCube moderno.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-compact-disc"></i>
            <div>
                <strong>Laser GameCube</strong>
                <p>Taratura potenziometro laser per giochi che danno "Disc Read Error". Sostituzione condensatori scheda ottica.</p>
            </div>
        </div>
         <div class="benefit-item">
            <i class="fas fa-plug"></i>
            <div>
                <strong>Alimentazione</strong>
                <p>Riparazione alimentatori esterni originali e sostituzione fusibili interni su scheda madre.</p>
            </div>
        </div>
    </div>
</div>';

// 13. Riparazione SEGA Mega Drive
$service_contents['riparazione-sega-mega-drive'] = '
<div class="service-rich-content">
    <h3>Riparazione SEGA Mega Drive / Genesis</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-bolt"></i>
            <div>
                <strong>Problemi Alimentazione</strong>
                <p>Riparazione jack di alimentazione dissaldato (problema comune). Sostituzione regolatori di tensione 7805.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-tv"></i>
            <div>
                <strong>Chip Video e Audio</strong>
                <p>Miglioramento uscita video e riparazione chip audio Yamaha FM danneggiati. Pulizia slot cartucce.</p>
            </div>
        </div>
    </div>
</div>';

// 14. Riparazione Dreamcast & Saturn
$service_contents['riparazione-dreamcast-saturn'] = '
<div class="service-rich-content">
    <h3>Assistenza SEGA Dreamcast e Saturn</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-recycle"></i>
            <div>
                <strong>Reboot Casuale</strong>
                <p>Risoluzione problema classico del Dreamcast che si riavvia: pulizia pin alimentatore ossidati.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-compact-disc"></i>
            <div>
                <strong>GD-ROM e Laser</strong>
                <p>Taratura lettore GD-ROM e Saturn CD. Sostituzione batteria tampone ML2032 ricaricabile.</p>
            </div>
        </div>
    </div>
</div>';

// 15. Riparazione Xbox Original & 360
$service_contents['riparazione-xbox-360'] = '
<div class="service-rich-content">
    <h3>Assistenza Xbox Original e 360</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-exclamation-triangle"></i>
            <div>
                <strong>RROD (Red Ring of Death)</strong>
                <p>Diagnosi LED rossi. Sostituzione pasta termica, X-Clamp fix e reflow GPU per tentare il ripristino.</p>
            </div>
        </div>
         <div class="benefit-item">
            <i class="fas fa-compact-disc"></i>
            <div>
                <strong>Lettore DVD</strong>
                <p>Sostituzione cinghia carrello che non si apre. Taratura laser Samsung/Hitachi/LiteOn.</p>
            </div>
        </div>
         <div class="benefit-item">
            <i class="fas fa-clock"></i>
            <div>
                <strong>Clock Capacitor (Xbox OG)</strong>
                <p>Rimozione "Clock Capacitor" marcio che rischia di corrodere la scheda madre della prima Xbox.</p>
            </div>
        </div>
    </div>
</div>';

// 16. Riparazione Atari & Altri
$service_contents['riparazione-atari'] = '
<div class="service-rich-content">
    <h3>Restauro Atari 2600, Commodore, Amiga</h3>
    <div class="benefits-grid">
        <div class="benefit-item">
            <i class="fas fa-tv"></i>
            <div>
                <strong>Modifiche Video AV</strong>
                <p>Conversione da vecchio segnale antenna RF a Video Composito (AV) per compatibilità con TV moderne.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-gamepad"></i>
            <div>
                <strong>Joystick e Controller</strong>
                <p>Riparazione joystick a microswitch o contatti. Sostituzione cavi danneggiati.</p>
            </div>
        </div>
        <div class="benefit-item">
            <i class="fas fa-bolt"></i>
            <div>
                <strong>Alimentatori Vintage</strong>
                <p>Controllo tensioni alimentatori originali 40+ anni. Recapping per sicurezza e stabilità.</p>
            </div>
        </div>
    </div>
</div>';