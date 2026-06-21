class Ticket:
    def __init__(self, sujet, statut):
        self.sujet = sujet
        self.statut = statut
    def fermer(self):
        return f"{self.statut}" ="cloturé"