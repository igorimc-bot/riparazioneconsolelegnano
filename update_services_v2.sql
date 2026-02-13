-- Add category column if it doesn't exist
-- We can't easily check IF EXISTS in standard SQL for columns without a stored procedure, 
-- but we can just try to add it and ignore error, or better, since we are truncating, we can recreate or alter.
-- For simplicity in this environment, I'll attempt to ADD COLUMN.

ALTER TABLE `services` ADD COLUMN `category` enum('NewGEN','Retrogaming') NOT NULL DEFAULT 'NewGEN' AFTER `slug`;

-- Clear existing PC services
TRUNCATE TABLE `services`;

-- Insert NewGEN Console Services
INSERT INTO `services` (`name`, `slug`, `category`, `description`, `meta_title`, `meta_description`) VALUES
('Riparazione PlayStation 5', 'riparazione-ps5', 'NewGEN', 'Assistenza completa per PlayStation 5. Sostituzione porta HDMI, riparazione lettore, risoluzione problemi di surriscaldamento e spegnimento improvviso. Pulizia interna approfondita e cambio pasta termica.', 'Riparazione PS5 Legnano | Assistenza PlayStation 5 HDMI e Lettore', 'Riparazione PlayStation 5 a Legnano. Sostituzione porta HDMI, riparazione lettore Blu-Ray, risoluzione surriscaldamento PS5. Tecnici specializzati.'),

('Riparazione PlayStation 4', 'riparazione-ps4', 'NewGEN', 'Interventi su PS4 Standard, Slim e Pro. Sostituzione Hard Disk con SSD per velocizzare la console, riparazione porta HDMI, sostituzione ventola rumorosa e alimentatore.', 'Riparazione PS4 Legnano | Assistenza PlayStation 4 HDMI e SSD', 'Assistenza PS4 a Legnano. Riparazione porta HDMI, sostituzione Hard Disk con SSD, pulizia ventola rumorosa e cambio pasta termica PlayStation 4.'),

('Riparazione Nintendo Switch', 'riparazione-nintendo-switch', 'NewGEN', 'Riparazione Nintendo Switch, Lite e OLED. Sostituzione schermo LCD/OLED rotto, riparazione connettore di ricarica USB-C, risoluzione problemi Joy-Con drift e batteria.', 'Riparazione Nintendo Switch Legnano | Sostituzione Schermo e Drift', 'Assistenza Nintendo Switch a Legnano. Cambio vetro e LCD, riparazione Joy-Con drift, sostituzione batteria e connettore ricarica.'),

('Riparazione Xbox Series X/S', 'riparazione-xbox-series', 'NewGEN', 'Assistenza per Xbox Series X e Series S. Riparazione porta HDMI, sostituzione SSD, risoluzione errori di sistema e problemi di accensione. Pulizia sistema di raffreddamento.', 'Riparazione Xbox Series X/S Legnano | Assistenza Microsoft Xbox', 'Riparazione Xbox Series X e S a Legnano. Sostituzione porta HDMI danneggiata, riparazione scheda madre e risoluzione problemi di surriscaldamento.'),

('Riparazione Controller', 'riparazione-controller', 'NewGEN', 'Riparazione controller DualSense (PS5), DualShock 4 (PS4), Xbox Controller e Joy-Con. Sostituzione analogici per drift, tasti non funzionanti e batterie esauste.', 'Riparazione Controller Console Legnano | DualSense e Joy-Con Drift', 'Riparazione controller PS5, PS4 e Xbox a Legnano. Risoluzione problema drift analogici, sostituzione tasti e batterie. Assistenza rapida.');

-- Insert Retrogaming Services
INSERT INTO `services` (`name`, `slug`, `category`, `description`, `meta_title`, `meta_description`) VALUES
('Riparazione Game Boy & Handheld', 'riparazione-gameboy', 'Retrogaming', 'Restauro e riparazione Game Boy Classico, Color, Advance e SP. Installazione schermi IPS retroilluminati, sostituzione speaker, recap condensatori e pulizia contatti.', 'Riparazione Game Boy Legnano | Modifiche IPS e Restauro', 'Assistenza e restauro Game Boy a Legnano. Installazione schermi IPS, sostituzione batteria interna, recap e riparazione tasti.'),

('Riparazione PlayStation Retro (PS1/PS2/PS3)', 'riparazione-playstation-retro', 'Retrogaming', 'Assistenza per le storiche console Sony. Taratura e sostituzione ottica laser PS1 e PS2, reballing e delid PS3, sostituzione condensatori e alimentatori interni.', 'Riparazione PS1 PS2 PS3 Legnano | Assistenza Retroconsole Sony', 'Riparazione console retro Sony a Legnano. Cambio laser PS1/PS2, riparazione YLOD PS3, manutenzione e pulizia approfondita.'),

('Riparazione Nintendo Retro', 'riparazione-nintendo-retro', 'Retrogaming', 'Interventi su NES, SNES, N64 e GameCube. Riparazione slot cartucce, uscita video, sostituzione condensatori (recap) e modding video (RGB/HDMI).', 'Riparazione Console Nintendo Retro Legnano | NES SNES N64', 'Assistenza console Nintendo vintage a Legnano. Riparazione NES, SNES, Nintendo 64 e GameCube. Recap e modifiche video.'),

('Riparazione SEGA & Altre', 'riparazione-sega-retro', 'Retrogaming', 'Assistenza per SEGA Master System, Mega Drive, Dreamcast e altre console storiche. Riparazione problemi di lettura, video e alimentazione.', 'Riparazione Console SEGA Legnano | Mega Drive Dreamcast Saturn', 'Riparazione console SEGA a Legnano. Assistenza per Mega Drive, Dreamcast e Saturn. Restauro e riparazione hardware.');
