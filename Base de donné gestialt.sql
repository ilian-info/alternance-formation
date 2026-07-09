Create Table intervention (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(100) NOT NULL,
  description TEXT NOT NULL,
  technicien VARCHAR(100) NOT NULL,
  date_intervention DATE NOT NULL,
  statut VARCHAR(50) NOT NULL
);
