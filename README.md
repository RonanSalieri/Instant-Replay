# Instant-Replay
Outil Instant Replay dans un navigateur Internet

Lien de démonstration : http://soft.rf.gd/instantreplay/

Dans la version démonstration, il n'est pas possible d'insérer ou d'effacer les fichiers.

I - INTRODUCTION

Un instant Replay, dans le domaine de la sonorisation, est un appareil permettant de lancer des morceaux audio comme des jingles et des virgules.
Cette application permet d'avoir, en ligne, neufs lecteurs programmables avec 3 points de démarrage (CUE) programmables grâce à un éditeur interne.

II - LECTEURS

Au démarrage de l'application, l'écran affiche neufs players sous forme de cartouche.
Un player contient un seul morceau audio. Le titre est affiché en haut à gauche après le numéro du slot.
Chaque lecteur, identique dans leurs fonctions, possèdent 3 boutons CUE programmés, permettant de démarrer le morceau audio choisi au temps voulu.
Le bouton PLAY permet de lancer le morceau au temps 0. La PAUSE à stopper la lecture à un temps précis, qui peut être relancé avec le bouton PLAY.
Le bouton STOP, arrête la lecture du titre audio et le remet au temps début (temps 0).
Le slider VOLUME gère le niveau de sortie audio du morceau.
Le menu "Lecteurs" permet de revenir dans cette partie du logiciel.

III - GESTION DES FICHIERS

En cliquant, dans le menu FICHIER, on entre dans le gestionnaire de fichiers.
La partie haute permet de télécharger un nouveau fichier dans le logiciel. La partie basse, permet de visualiser, sous forme d'un tableau, les titres déjà présents dans la bibiothèque.
Pour chaque titres de la bibliothèque, un lecteur est disponible pour pré-écouter le fichier audio.
1 - AJOUTER UN TITRE DANS LA BIBLIOTHEQUE
Annoter le titre du morceau qui va être insérer dans la bibliothèque dans le champs "Titre du morceau".
Cliquer sur la partie grise "Choisir un ficher" afin d'ouvrir la fenêtre permettant de choisir, sur le disque dur de l'ordinateur, le fichier MP3 ou WAV à insérer dans la base de données.
Cliquer sur le bouton ajouter pour télécharger le fichier audio.

NOTA

Les fichiers téléchargeables ne peuvent posséder que l'extension WAV ou du MP3.
La taille des fichiers, par défaut, ne doit pas dépasser 2 Mo mais ceci est en fonction de l'hébergement de l'application. Voir la section installation.
2 - TABLEAU DE LA BIBLIOTHEQUE & FONCTIONS
Le tableau de la bibliothèque de fichier reprends le numéro interne à la bibliotèque des titres.
Le nom fourni lors du téléchargement du fichier, le nom du fichier inscrit sur le disque dur, un lecteur pour écouter le titre audio et une colonne action, qui possède un bouton DETRUIRE pour effacer définitivement le fichier de la base de données et du disque dur.

NOTA

Dans la version Démonstration du logiciel, aucune de ces fonctions n'est actives.
IV - EDITION DES SLOTS
Pour éditer un morceau et programmer ses points CUE, utiliser le menu SLOTS et choisir le slot numéroté approprié.
1 - Le premier champs permet de choisir un titre inclu dans la bibliothèque. Une fois sélectionné, il se met en place automatiquement et le nom du fichier s'inscrit après EDITION DU FICHIER.
2 - La forme du fichier apparaît avec en dessous la position exprimée en seconde.
3 - Le cartouche DEPLACEMENT va permettre de se déplacer dans le morceau avec des paliers de 5, 1, 0,5 et 0,1 seconde.
Le bouton PLAY lit le titre audio et la PAUSE stop le fichier au temps de l'arrêt.
4 - Déplacer le curseur au point voulu et appuyer sur l'un des boutons CUE pour enregistrer la position. Cette cartouche EDITION & SAUVEGARDE DES CUES contient aussi un champ et trois autres boutons :
Le champs ou est indiqué la position temporelle de la CUE. Ce champs peut être modifié en édition pur. Il suffit de se positionner dessus et d'entré, au clavier un temps au format XX.XX
Un bouton de lecture qui démarre le titre audio à la position inscrite dans le champs. Un stop pour arrêter la lecture et remettre le morceau au début du temps indiqué dans le champs. Enfin, un bouton orange qui permet d'effacer le contenu du champs et de remettre la position du CUE à zéro.
5 - Pour enregistrer la totalité des données inscrites dans les champs CUE, appuyer sur le bouton rouge SAUVEGARDER.

IV - INSTALLATION

Ce script est sous license libre.
Ce script doit être installé sur un serveur Internet utilisant les technologies APACHE, PHP MYSQL et PHPMYADMIN pour administrer la base de données.
Les sources BOOTSTRAP et WAVESURFER.JS sont intégrées avec le script.
Pour le bon fonctionnement de ce dernier, le logiciel doit tourné avec une connection Internet active.

ETAPE 1
Copier le contenu du dossier dans un répertoire accessible sur votre serveur web.

ETAPE 2
Créer une base de données MYSQL ou utiliser une déjà existante et executer le code SQL ci-dessous :
CREATE TABLE music (
id int(11) NOT NULL,
musicname text NOT NULL,
musicfile text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE slot1 (
id int(11) NOT NULL,
musicid int(11) NOT NULL,
cue1 double(11,5) NOT NULL,
cue2 double(11,5) NOT NULL,
cue3 double(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO slot1 (id, musicid, cue1, cue2, cue3) VALUES
(1, 1, 13.70000, 82.30000, 121.13094);

CREATE TABLE slot2 (
id int(11) NOT NULL,
musicid int(11) NOT NULL,
cue1 double(11,5) NOT NULL,
cue2 double(11,5) NOT NULL,
cue3 double(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO slot2 (id, musicid, cue1, cue2, cue3) VALUES
(1, 2, 7.11670, 38.98118, 104.76979);

CREATE TABLE slot3 (
id int(11) NOT NULL,
musicid int(11) NOT NULL,
cue1 double(11,5) NOT NULL,
cue2 double(11,5) NOT NULL,
cue3 double(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO slot3 (id, musicid, cue1, cue2, cue3) VALUES
(1, 3, 15.50000, 15.33916, 0.00000);

CREATE TABLE slot4 (
id int(11) NOT NULL,
musicid int(11) NOT NULL,
cue1 double(11,5) NOT NULL,
cue2 double(11,5) NOT NULL,
cue3 double(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO slot4 (id, musicid, cue1, cue2, cue3) VALUES
(1, 4, 10.08256, 0.00000, 0.00000);

CREATE TABLE slot5 (
id int(11) NOT NULL,
musicid int(11) NOT NULL,
cue1 double(11,5) NOT NULL,
cue2 double(11,5) NOT NULL,
cue3 double(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO slot5 (id, musicid, cue1, cue2, cue3) VALUES
(1, 5, 78.19458, 113.73946, 0.00000);

CREATE TABLE slot6 (
id int(11) NOT NULL,
musicid int(11) NOT NULL,
cue1 double(11,5) NOT NULL,
cue2 double(11,5) NOT NULL,
cue3 double(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO slot6 (id, musicid, cue1, cue2, cue3) VALUES
(1, 6, 0.00000, 0.00000, 0.00000);

CREATE TABLE slot7 (
id int(11) NOT NULL,
musicid int(11) NOT NULL,
cue1 double(11,5) NOT NULL,
cue2 double(11,5) NOT NULL,
cue3 double(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO slot7 (id, musicid, cue1, cue2, cue3) VALUES
(1, 7, 0.87884, 21.09986, 56.19458);

CREATE TABLE slot8 (
id int(11) NOT NULL,
musicid int(11) NOT NULL,
cue1 double(11,5) NOT NULL,
cue2 double(11,5) NOT NULL,
cue3 double(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO slot8 (id, musicid, cue1, cue2, cue3) VALUES
(1, 8, 0.00000, 0.00000, 0.00000);

CREATE TABLE slot9 (
id int(11) NOT NULL,
musicid int(11) NOT NULL,
cue1 double(11,5) NOT NULL,
cue2 double(11,5) NOT NULL,
cue3 double(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO slot9 (id, musicid, cue1, cue2, cue3) VALUES
(1, 9, 0.00000, 0.00000, 0.00000);

ALTER TABLE music
ADD PRIMARY KEY (id);

ALTER TABLE slot1
ADD PRIMARY KEY (id);

ALTER TABLE slot2
ADD PRIMARY KEY (id);

ALTER TABLE slot3
ADD PRIMARY KEY (id);

ALTER TABLE slot4
ADD PRIMARY KEY (id);

ALTER TABLE slot5
ADD PRIMARY KEY (id);

ALTER TABLE slot6
ADD PRIMARY KEY (id);

ALTER TABLE slot7
ADD PRIMARY KEY (id);

ALTER TABLE slot8
ADD PRIMARY KEY (id);

ALTER TABLE slot9
ADD PRIMARY KEY (id);

ALTER TABLE music
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE slot1
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE slot2
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE slot3
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE slot4
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE slot5
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE slot6
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE slot7
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE slot8
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE slot9
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

ETAPE 3

Modifier le fichier "connect.php" qui se trouve dans le répertoire principal du script.
Entrer les informations liées au serveur Internet utilisé :
$bdd = new PDO('mysql:host=localhost;port=3306;dbname=nom_de_la_base_de_donnee;charset=utf8', 'login', 'motdepasse');

HOST : doit comporter le host sur lequel est hébergé la base de donnée. Sur un serveur unique pour APACHE et MYSQL, le plus souvent on reste en localhost. Sinon il faut regarder la notice d'utilisation fournie par le fournisseur de service.
PORT : Le port par défaut est le 3306. Le modifier si les informations du serveur MYSQL sont différentes
DBNAME : doit comporter le nom de la base de données utilisée.
A la place de LOGIN et MOTDEPASSE, entrer les informations d'accès à la base de données fournies par le fournisseur de service.

ETAPE 4

Dans un navigateur, écrire l'adresse correspondante à votre serveur et le dossier contenant le script. Par exemple, https://monsite.com/instantreplay/".

V - CONCLUSION

Ce script est fonctionnel avec les navigateur Google Chrome, Microsoft Edge, Firefox, Brave, Opera sur PC avec une résolution de 1920 x 1080 pixels.

NOTA
La limitation de la taille des fichiers à télécharger est limité par la configuration du serveur PHP dans le fichier PHP.INI
Cette limitation est inscrite à la ligne : upload_max_filesize.
Les hébergeurs grand public limitent, pour la plus part, à 2 Mo. Si vous possédez votre propore hébergement, vous pouvez modificer cette limitation à votre guise.
