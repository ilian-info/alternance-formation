def mot_de_passe_valide(mot):
    return len(mot) >= 8
print(mot_de_passe_valide(9))  # True
print(mot_de_passe_valide(6))  # False
