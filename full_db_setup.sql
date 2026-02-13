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
-- NewGEN (8 items)
('Riparazione PlayStation 5', 'riparazione-ps5', 'NewGEN', 'Assistenza completa per PlayStation 5.', 'Riparazione PlayStation 5 Legnano', 'Assistenza PS5 a Legnano.'),
('Riparazione PlayStation 4', 'riparazione-ps4', 'NewGEN', 'Assistenza completa per PlayStation 4.', 'Riparazione PlayStation 4 Legnano', 'Assistenza PS4 a Legnano.'),
('Riparazione Xbox Series X/S', 'riparazione-xbox-series', 'NewGEN', 'Assistenza per Xbox Series X e S.', 'Riparazione Xbox Series X/S Legnano', 'Assistenza Xbox Series a Legnano.'),
('Riparazione Xbox One', 'riparazione-xbox-one', 'NewGEN', 'Assistenza per Xbox One.', 'Riparazione Xbox One Legnano', 'Assistenza Xbox One a Legnano.'),
('Riparazione Nintendo Switch', 'riparazione-nintendo-switch', 'NewGEN', 'Riparazione Nintendo Switch, Lite e OLED.', 'Riparazione Nintendo Switch Legnano', 'Assistenza Switch a Legnano.'),
('Riparazione Nintendo DS & 3DS', 'riparazione-ds-3ds', 'NewGEN', 'Assistenza per famiglia Nintendo DS e 3DS.', 'Riparazione Nintendo DS 3DS Legnano', 'Assistenza DS e 3DS a Legnano.'),
('Riparazione Steam Deck & ASUS ROG', 'riparazione-steam-deck', 'NewGEN', 'Assistenza console PC handheld come Steam Deck.', 'Riparazione Steam Deck Legnano', 'Assistenza Steam Deck a Legnano.'),
('Riparazione PSP & PS Vita', 'riparazione-psp-vita', 'NewGEN', 'Riparazione portatili Sony PSP e Vita.', 'Riparazione PSP PS Vita Legnano', 'Assistenza PSP e Vita a Legnano.'),

-- Retrogaming (8 items)
('Riparazione Game Boy Family', 'riparazione-gameboy', 'Retrogaming', 'Game Boy Classic, Color, Pocket, Advance.', 'Riparazione Game Boy Legnano', 'Assistenza Game Boy a Legnano.'),
('Riparazione PlayStation 1 & 2', 'riparazione-ps1-ps2', 'Retrogaming', 'Assistenza PS1 e PS2.', 'Riparazione PS1 PS2 Legnano', 'Assistenza PS1 e PS2 a Legnano.'),
('Riparazione NES & SNES', 'riparazione-nes-snes', 'Retrogaming', 'Nintendo Entertainment System e Super Nintendo.', 'Riparazione NES SNES Legnano', 'Assistenza NES e SNES a Legnano.'),
('Riparazione N64 & GameCube', 'riparazione-n64-gamecube', 'Retrogaming', 'Nintendo 64 e GameCube.', 'Riparazione N64 GameCube Legnano', 'Assistenza N64 e GameCube a Legnano.'),
('Riparazione SEGA Mega Drive', 'riparazione-sega-mega-drive', 'Retrogaming', 'Master System e Mega Drive.', 'Riparazione SEGA Legnano', 'Assistenza SEGA a Legnano.'),
('Riparazione Dreamcast & Saturn', 'riparazione-dreamcast-saturn', 'Retrogaming', 'SEGA Dreamcast e Saturn.', 'Riparazione Dreamcast Legnano', 'Assistenza Dreamcast a Legnano.'),
('Riparazione Xbox Original & 360', 'riparazione-xbox-360', 'Retrogaming', 'Xbox Original e Xbox 360.', 'Riparazione Xbox 360 Legnano', 'Assistenza Xbox 360 a Legnano.'),
('Riparazione Atari & Altri', 'riparazione-atari', 'Retrogaming', 'Atari, Commodore e altre piattaforme vintage.', 'Riparazione Atari Legnano', 'Assistenza Atari a Legnano.');

SET FOREIGN_KEY_CHECKS = 1;
