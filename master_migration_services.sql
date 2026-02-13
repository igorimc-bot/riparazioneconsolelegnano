-- Master Migration Script for Console Repair Services
-- 1. Adds 'category' column to 'services' table if missing.
-- 2. Truncates old PC services.
-- 3. Inserts new Console & Retrogaming services (V3 detailed list).

-- Disable foreign key checks to allow truncation
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------
-- Schema Updates
-- ---------------------------------------------------------

-- Attempt to add 'category' column. 
-- Note: MySQL does not support "IF NOT EXISTS" for ADD COLUMN in a simple statement.
-- If this fails (column exists), the script might stop unless handled. 
-- For safety in this specific "fix" scenario where we might run on a fresh clone (no column) 
-- or a partially updated one, we use a stored procedure approach OR just run it and ignore error if manual.
-- Here we'll try a safe approach using a dummy procedure if possible, or just the ALTER statement 
-- assuming the user is resetting to the "wrong" DB state which was a clone of the PC site (so no category column).

-- However, if the user restored a backup of "riparazionepclegnano", it DEFINITELY won't have the column.
-- So we can safely run:
-- ALTER TABLE `services` ADD COLUMN `category` enum('NewGEN','Retrogaming') NOT NULL DEFAULT 'NewGEN' AFTER `slug`;
-- COMMENTED OUT dynamic add, we will handle it in PHP runner or assume clean state.
-- Actually, let's TRY to add it. If it fails, the PHP runner catches it.
ALTER TABLE `services` ADD COLUMN `category` enum('NewGEN','Retrogaming') NOT NULL DEFAULT 'NewGEN' AFTER `slug`;

-- ---------------------------------------------------------
-- Data Reset
-- ---------------------------------------------------------

TRUNCATE TABLE `services`;

-- ---------------------------------------------------------
-- Data Insertion (V3 List)
-- ---------------------------------------------------------

INSERT INTO `services` (`name`, `slug`, `category`, `description`, `meta_title`, `meta_description`) VALUES
-- NewGEN
('Riparazione PlayStation 5 & 4', 'riparazione-ps5-ps4', 'NewGEN', 'Assistenza completa per PlayStation 5 e 4 (Standard, Slim, Pro). Riparazione HDMI, lettore, drift controller DualSense/DualShock, problemi di surriscaldamento e spegnimento. Sostituzione Hard Disk/SSD.', 'Riparazione PlayStation 5 e PS4 Legnano | HDMI e Lettore', 'Assistenza PlayStation 5 e 4 a Legnano. Riparazione porta HDMI, lettore, ventola rumorosa e drift controller.'),
('Riparazione Xbox Series X/S & One', 'riparazione-xbox-series-one', 'NewGEN', 'Riparazione Xbox Series X, Series S e famiglia Xbox One. Sostituzione porta HDMI, alimentatore interna, risoluzione errori sistema (E100/E101/E102) e problemi di lettura giochi.', 'Riparazione Xbox Series X/S e One Legnano | HDMI e Errori', 'Assistenza Xbox Series X/S e One a Legnano. Riparazione HDMI, errore sistema, lettore dischi e surriscaldamento.'),
('Riparazione Nintendo Switch', 'riparazione-nintendo-switch', 'NewGEN', 'Riparazione Nintendo Switch Standard, OLED e Lite. Sostituzione schermo vetro/LCD, connettore ricarica USB-C, risoluzione Joy-Con drift, batteria e problemi di accensione (Orange Screen/Blue Screen).', 'Riparazione Nintendo Switch Legnano | Schermo e Joy-Con', 'Assistenza Nintendo Switch a Legnano. Cambio schermo, batteria, connettore ricarica e riparazione Joy-Con drift.'),
('Riparazione Nintendo DS & 3DS', 'riparazione-nintendo-ds-3ds', 'NewGEN', 'Assistenza per Nintendo DS, DSi, 2DS e 3DS (inclusi modelli XL/New). Sostituzione schermi LCD superiore/inferiore, riparazione cerniere, slot cartucce e connettori ricarica.', 'Riparazione Nintendo 3DS e DS Legnano | Schermi e Cerniere', 'Riparazione Nintendo 3DS e DS a Legnano. Sostituzione schermi, cerniere rotte, slot giochi e batterie.'),
('Riparazione PSP & PS Vita', 'riparazione-psp-vita', 'NewGEN', 'Riparazione Sony PSP (1000/2000/3000/Go/Street) e PS Vita. Sostituzione display LCD/OLED, analogici drift, lettore UMD, batteria e modding software.', 'Riparazione PSP e PS Vita Legnano | Display e Lettore UMD', 'Assistenza Sony PSP e PS Vita a Legnano. Cambio schermo, riparazione analogici e lettore UMD.'),
('Riparazione Nintendo Wii & Wii U', 'riparazione-wii-wiiu', 'NewGEN', 'Assistenza console Nintendo Wii e Wii U. Riparazione lettore dischi, problemi di sincronizzazione GamePad, alimentazione e uscite video.', 'Riparazione Wii e Wii U Legnano | Lettore e GamePad', 'Riparazione Nintendo Wii e Wii U a Legnano. Assistenza lettore ottico, GamePad e problemi video.'),

-- Retrogaming
('Riparazione Game Boy Family', 'riparazione-gameboy-family', 'Retrogaming', 'Restauro completo per Game Boy Classic (DMG), Pocket, Color e Advance (GBA/SP). Installazione schermi IPS retroilluminati, recap condensatori, riparazione audio e pulizia contatti.', 'Riparazione Game Boy Legnano | Modifiche IPS e Restauro', 'Assistenza Game Boy Classic, Color e Advance a Legnano. Modifiche schermo IPS, recap audio e video, pulizia.'),
('Riparazione PlayStation 1 & 2', 'riparazione-ps1-ps2', 'Retrogaming', 'Assistenza per PS One e PS2 (Fat/Slim). Taratura e sostituzione ottica laser, modchip, riparazione problemi di lettura e video. Pulizia e manutenzione.', 'Riparazione PS1 e PS2 Legnano | Lettore e Modifiche', 'Riparazione PlayStation 1 e 2 a Legnano. Sostituzione laser, alimentatore e problemi di lettura dischi.'),
('Riparazione Nintendo Home Retro', 'riparazione-nintendo-retro-home', 'Retrogaming', 'Interventi su NES, SNES, Nintendo 64 e GameCube. Riparazione 72-pin connector (NES), slot cartucce, uscita video e recap condensatori. Modifiche RGB/HDMI.', 'Riparazione Nintendo NES SNES N64 GameCube Legnano', 'Assistenza console Nintendo retro a Legnano. Riparazione NES, SNES, N64 e GameCube. Recap e uscite video.'),
('Riparazione SEGA & Game Gear', 'riparazione-sega', 'Retrogaming', 'Riparazione SEGA Master System, Mega Drive, Dreamcast e Game Gear. Recap completo (indispensabile per Game Gear), riparazione lettore GD-ROM Dreamcast e alimentazione.', 'Riparazione SEGA Mega Drive Dreamcast Game Gear Legnano', 'Assistenza console SEGA a Legnano. Recap Game Gear, riparazione Mega Drive e Dreamcast.'),
('Riparazione Xbox & 360', 'riparazione-xbox-360', 'Retrogaming', 'Assistenza per Xbox Original e Xbox 360 (Arcade, Elite, Slim). Riparazione Red Ring of Death (RROD) se riparabile, lettore DVD, sostituzione pasta termica e Hard Disk.', 'Riparazione Xbox 360 e Original Legnano | Assistenza RROD', 'Riparazione Xbox 360 e Original a Legnano. Pulizia, cambio pasta termica, riparazione lettore e RROD.'),
('Riparazione Atari & Altri', 'riparazione-atari', 'Retrogaming', 'Restauro console Atari (2600, 7800, Lynx) e altri sistemi vintage. Riparazione joystick, uscite video RF/AV e alimentazione.', 'Riparazione Atari Legnano | Assistenza Console Vintage', 'Assistenza Atari 2600 e console vintage a Legnano. Riparazione video, joystick e alimentatori.');

-- Re-enable foreign key checks
SET FOREIGN_KEY_CHECKS = 1;

-- Output confirmation if run manually via SQL client
-- SELECT "Master Migration Completed Successfully" as Status;
