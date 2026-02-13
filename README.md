# Riparazione Console Legnano

## Installazione

1.  Clonare il repository:
    ```bash
    git clone https://github.com/igorimc-bot/riparazioneconsolelegnano.git
    cd riparazioneconsolelegnano
    ```

2.  Configurare il database:
    *   Copia `config.sample.php` in `config.php` (se disponibile) o crea un file `config.php` nella root con il seguente contenuto:
        ```php
        <?php
        return [
            'db_host' => 'localhost',
            'db_name' => 'arvcl_db',
            'db_user' => 'tuo_utente_db',
            'db_pass' => 'tua_password_db',
        ];
        ```
    *   Assicurarsi che il database `arvcl_db` esista (o il nome scelto).

3.  Importare i dati:
    *   Eseguire lo script di installazione aprendo nel browser (se configurato):
        `http://localhost/install_db.php`
    *   Oppure importare manualmente `database.sql` e `seed_data.sql` nel database.

4.  Configurazione Web Server:
    *   Configurare Apache/Nginx per puntare alla cartella del progetto.
    *   Assicurarsi che il modulo `mod_rewrite` sia abilitato se si usa Apache (per `.htaccess`).

## Struttura

*   `admin/` - Pannello di amministrazione
*   `includes/` - File inclusi (header, footer, db config)
*   `assets/` - Risorse statiche (cSS, JS, immagini)
