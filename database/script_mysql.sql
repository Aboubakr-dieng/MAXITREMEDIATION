-- Suppression préalable si nécessaire
DROP TABLE IF EXISTS transaction;
DROP TABLE IF EXISTS compte;
DROP TABLE IF EXISTS utilisateur;
DROP TABLE IF EXISTS typeUtilisateur;

-- Table typeUtilisateur
CREATE TABLE IF NOT EXISTS typeUtilisateur (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(30)
);

-- Table utilisateur
CREATE TABLE IF NOT EXISTS utilisateur (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(30),
  prenom VARCHAR(30),
  numerotelephone VARCHAR(30) NOT NULL,
  login VARCHAR(30) NOT NULL,
  password VARCHAR(30) NOT NULL,
  numeroidentite VARCHAR(50) NOT NULL,
  photorecto VARCHAR(40) NOT NULL,
  photoverso VARCHAR(40) NOT NULL,
  idtypeutilisateur INT,
  FOREIGN KEY (idtypeutilisateur)
    REFERENCES typeUtilisateur(id)
    ON DELETE SET NULL
    ON UPDATE CASCADE
);

-- Table compte
CREATE TABLE compte (
  id INT AUTO_INCREMENT PRIMARY KEY,
  date_creation TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  solde FLOAT,
  numeroCompte VARCHAR(30) NOT NULL,
  type ENUM('principal', 'secondaire') NOT NULL,
  idUtilisateur INT,
  FOREIGN KEY (idUtilisateur)
    REFERENCES utilisateur(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

-- Table transaction
CREATE TABLE transaction (
  id INT AUTO_INCREMENT PRIMARY KEY,
  montant FLOAT NOT NULL,
  date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  type ENUM('paiement', 'depot', 'retrait') NOT NULL,
  idCompte INT,
  FOREIGN KEY (idCompte)
    REFERENCES compte(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);
