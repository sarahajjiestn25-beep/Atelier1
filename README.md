# 🧪 Atelier PHP – Installation et Premiers Exercices

Ce projet a été réalisé dans le cadre de l’atelier :
**Installation, configuration et premiers exercices PHP avec XAMPP**  
(Filière : Ingénierie Logicielle et Cybersécurité – ILCS)

---

## 🎯 Objectifs
- Comprendre l’exécution du code PHP via un serveur local.
- Créer des pages dynamiques avec PHP et HTML.
- Manipuler des variables et des tableaux en PHP.

---

## 📁 Contenu du projet

Le projet contient 3 fichiers principaux :

### 1️⃣ `tp1.php`
- Premier test de script PHP.
- Permet de comparer :
  - l’accès direct via `file://`
  - l’accès via `http://localhost`
- Montre que le code PHP est interprété uniquement par le serveur Apache.

---

### 2️⃣ `page1.php`
- Page PHP dynamique utilisant une variable.
- Exemple :
  - une variable `$nom` est définie en PHP
  - sa valeur est affichée dans la page HTML
- En modifiant la variable `$nom`, le contenu affiché change automatiquement.

---

### 3️⃣ `liste.php`
- Génération d’une liste HTML à partir d’un tableau PHP.
- Un tableau `$elements` contient plusieurs valeurs.
- PHP parcourt le tableau et crée dynamiquement une liste `<ul><li>` en HTML.
- En ajoutant ou supprimant des éléments du tableau, la liste affichée change.

---

## ▶️ Comment exécuter le projet

1. Copier le dossier du projet dans :
   `C:\xampp\htdocs\`

2. Démarrer Apache depuis le panneau de contrôle XAMPP.

3. Ouvrir le navigateur et taper :
   - `http://localhost/nomDuDossier/tp1.php`
   - `http://localhost/nomDuDossier/page1.php`
   - `http://localhost/nomDuDossier/liste.php`

---

## 📝 Conclusion
Ce projet montre :
- l’importance du serveur pour exécuter PHP,
- l’interaction entre PHP et HTML,
- la création de pages dynamiques avec des variables et des tableaux.

---

👩‍🎓 Réalisé par : **Sara Hajji** et  : **Hanane EL AASRAOUI**
📚 Filière : **ILCS**  
📅 Année universitaire : 2024/2025
