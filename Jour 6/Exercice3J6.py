class Dossier :
    def __init__(self,nom, client, statut):
        self.nom = nom
        self.client = client
        self.statut = statut
    def fermer(self):
        self.statut = "cloturé"



class intervention:
    def __init__(self, date, heure, statut):
        self.date = date
        self.heure = heure
        self.statut = statut
    def terminer(self):
        self.statut = "terminer"



class Contact:
    def __init__(self, nom, telephone, email):
        self.nom = nom
        self.telephone = telephone
        self.email = email
    def afficher(self):
        print("Nom:", self.nom)
        print("Téléphone:", self.telephone)
        print("Email:", self.email)