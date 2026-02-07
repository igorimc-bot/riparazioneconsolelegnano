-- Services (Computer Services from lalegnanoinformatica.it)
INSERT INTO services (name, slug, description) VALUES 
('Assemblaggio PC', 'assemblaggio-pc', 'Assemblaggio computer su misura per gaming e workstation.'),
('Riparazione Console', 'riparazione-console', 'Assistenza e riparazione per PlayStation, Xbox e Nintendo.'),
('Servizi Digitali', 'servizi-digitali', 'Supporto per SPID, PEC, firma digitale e altri servizi online.'),
('Consulenza Acquisto', 'consulenza-acquisto', 'Consulenza professionale per l\'acquisto di nuovi dispositivi.'),
('Contenuti AI', 'contenuti-ai', 'Generazione di testi e immagini con Intelligenza Artificiale.'),
('Creazioni Grafiche', 'creazioni-grafiche', 'Realizzazione loghi, biglietti da visita e materiale pubblicitario.'),
('Ripristino S.O.', 'ripristino-so', 'Formattazione e ripristino sistemi operativi Windows, macOS e Linux.'),
('Software e Antivirus', 'software-antivirus', 'Installazione e configurazione software e protezione antivirus.'),
('Siti Web', 'siti-web', 'Realizzazione siti web vetrina, e-commerce e landing page.'),
('Recupero Dati', 'recupero-dati', 'Recupero dati da hard disk, SSD, chiavette USB e memory card.'),
('Pulizia e Sicurezza', 'pulizia-sicurezza', 'Rimozione virus, malware e ottimizzazione prestazioni PC.'),
('Riparazione PC', 'riparazione-pc', 'Diagnosi e riparazione hardware e software per computer fissi e notebook.'),
('Smaltimento', 'smaltimento', 'Ritiro e smaltimento corretto di apparecchiature elettroniche (RAEE).'),
('Schermi e Batterie', 'schermi-batterie', 'Sostituzione display e batterie per notebook, smartphone e tablet.'),
('Upgrade PC', 'upgrade-pc', 'Potenziamento computer con SSD, RAM e schede video.'),
('Vendita Accessori', 'vendita-accessori', 'Vendita cavi, periferiche, borse e accessori informatici.'),
('Vendita PC', 'vendita-pc', 'Computer nuovi e ricondizionati garantiti.'),
('Assistenza Stampanti', 'assistenza-stampanti', 'Riparazione e configurazione stampanti laser e inkjet.');

-- Zones - Comuni (Legnano + 40km radius)
INSERT INTO zones (name, slug, type, parent_city) VALUES 
('Legnano', 'legnano', 'Comune', NULL),
('Busto Arsizio', 'busto-arsizio', 'Comune', NULL),
('Castellanza', 'castellanza', 'Comune', NULL),
('Canegrate', 'canegrate', 'Comune', NULL),
('San Giorgio su Legnano', 'san-giorgio-su-legnano', 'Comune', NULL),
('Cerro Maggiore', 'cerro-maggiore', 'Comune', NULL),
('San Vittore Olona', 'san-vittore-olona', 'Comune', NULL),
('Villa Cortese', 'villa-cortese', 'Comune', NULL),
('Rescaldina', 'rescaldina', 'Comune', NULL),
('Dairago', 'dairago', 'Comune', NULL),
('Parabiago', 'parabiago', 'Comune', NULL),
('Nerviano', 'nerviano', 'Comune', NULL),
('Rho', 'rho', 'Comune', NULL),
('Lainate', 'lainate', 'Comune', NULL),
('Saronno', 'saronno', 'Comune', NULL),
('Milano', 'milano', 'Comune', NULL),
('Gallarate', 'gallarate', 'Comune', NULL),
('Tradate', 'tradate', 'Comune', NULL),
('Magenta', 'magenta', 'Comune', NULL),
('Abbiategrasso', 'abbiategrasso', 'Comune', NULL);

-- Zones - Milano Quartieri
INSERT INTO zones (name, slug, type, parent_city) VALUES 
('Milano Centro', 'milano-centro', 'Quartiere', 'Milano'),
('Milano Stazione Centrale', 'milano-stazione-centrale', 'Quartiere', 'Milano'),
('Milano Porta Nuova', 'milano-porta-nuova', 'Quartiere', 'Milano'),
('Milano Navigli', 'milano-navigli', 'Quartiere', 'Milano'),
('Milano Città Studi', 'milano-citta-studi', 'Quartiere', 'Milano'),
('Milano Isola', 'milano-isola', 'Quartiere', 'Milano'),
('Milano Bicocca', 'milano-bicocca', 'Quartiere', 'Milano'),
('Milano San Siro', 'milano-san-siro', 'Quartiere', 'Milano'),
('Milano Lambrate', 'milano-lambrate', 'Quartiere', 'Milano'),
('Milano Ticinese', 'milano-ticinese', 'Quartiere', 'Milano');
