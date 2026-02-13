-- Full Database Setup Script (V3)
-- 1. Creates all tables (users, services, zones, leads).
-- 2. Inserts default admin user.
-- 3. Inserts V3 Detailed Console & Retrogaming services.

SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------
-- 1. Table Creation
-- ---------------------------------------------------------

DROP TABLE IF EXISTS `leads`;
DROP TABLE IF EXISTS `zones`;
DROP TABLE IF EXISTS `services`;
DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `category` enum('NewGEN','Retrogaming') NOT NULL DEFAULT 'NewGEN',
  `description` text,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keywords` text,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `zones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `type` enum('Comune','Quartiere') NOT NULL DEFAULT 'Comune',
  `parent_city` varchar(100) DEFAULT NULL,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `zone_id` int(11) DEFAULT NULL,
  `message` text,
  `status` enum('Nuovo','Contattato','In Corso','Chiuso','Cancellato') NOT NULL DEFAULT 'Nuovo',
  `notes` text,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `service_id` (`service_id`),
  KEY `zone_id` (`zone_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ---------------------------------------------------------
-- 2. Default User
-- ---------------------------------------------------------

INSERT INTO `users` (`username`, `password`) VALUES ('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

-- ---------------------------------------------------------
-- 3. Service Data Insertion (V3 List)
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

SET FOREIGN_KEY_CHECKS = 1;
