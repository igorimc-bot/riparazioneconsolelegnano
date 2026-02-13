-- Disable foreign key checks to allow truncation
SET FOREIGN_KEY_CHECKS = 0;

-- Truncate tables to start fresh
TRUNCATE TABLE services;
TRUNCATE TABLE leads;

-- Re-enable foreign key checks
SET FOREIGN_KEY_CHECKS = 1;

-- Insert new Console Services
INSERT INTO services (name, slug, description, sort_order) VALUES 
('Riparazione PlayStation 5', 'riparazione-playstation-5', 'Riparazione porta HDMI, lettore, alimentatore e problemi di spegnimento su PS5.', 10),
('Riparazione PlayStation 4', 'riparazione-playstation-4', 'Sostituzione Hard Disk, porta HDMI, alimentatore e risoluzione problemi software PS4.', 20),
('Riparazione Xbox Series X/S', 'riparazione-xbox-series', 'Assistenza hardware e software per Xbox Series X e Series S.', 30),
('Riparazione Xbox One', 'riparazione-xbox-one', 'Riparazione lettore, HDMI e problemi di avvio su Xbox One, S e X.', 40),
('Riparazione Nintendo Switch', 'riparazione-nintendo-switch', 'Riparazione Joy-Con drift, connettore di ricarica, schermo e lettore giochi.', 50),
('Riparazione Controller', 'riparazione-controller', 'Riparazione drift analogici, tasti non funzionanti e batterie per DualSense, Xbox e Joy-Con.', 60),
('Pulizia e Pasta Termica', 'pulizia-console', 'Pulizia interna profonda e sostituzione pasta termica per prevenire surriscaldamento e rumore.', 70),
('Riparazione Porta HDMI', 'riparazione-hdmi', 'Sostituzione connettore HDMI danneggiato su PS5, PS4, Xbox Series X/S e One.', 80),
('Upgrade SSD Console', 'upgrade-ssd-console', 'Espansione memoria con SSD per PS5 e sostituzione Hard Disk con SSD su PS4 e Xbox One.', 90),
('Recupero Dati Console', 'recupero-dati-console', 'Recupero salvataggi e dati da Hard Disk console danneggiati.', 100),
('Vendita Console Usate', 'vendita-console', 'Vendita console ricondizionate e garantite.', 110),
('Accessori Gaming', 'accessori-gaming', 'Vendita controller, cuffie e cavi per console.', 120);
