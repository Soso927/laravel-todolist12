## 🎯 Objectif global

Créer un site web complet (front + back-office) en **Laravel**, respectant la maquette et intégrant :

- Accessibilité (RGAA/WCAG)  
- SEO  
- Gestion multilingue (FR/EN)  
- Authentification, rôles & permissions  
- Back-office (CRUD) pour gérer contenus (planètes, équipage, technologies, utilisateurs)  
- Tests unitaires  
- Gestion de version (Git)  

---

## 1. 📂 Préparation du projet

**Objectifs :**

- Installer l’environnement de travail.  
- Poser les bases techniques et organisationnelles.  

**Tâches :**

1. Installer Laravel & dépendances (PHP, Composer, Node.js, npm).  
2. Configurer Git + GitHub (repo avec branche principale + branches par feature).  
3. Installer un package CSS (choisir : Tailwind ou Bootstrap).  
4. Créer un fichier `README.md` avec les infos projet (installation, commandes, organisation).  

**Ressources :**

- Docs Laravel, Tailwind, GitHub.  
- Outils : VS Code, GitHub Desktop ou ligne de commande.  

**Délais :** 1 à 2 jours.

⚠️ **Point critique :** Bien configurer Git dès le départ pour éviter les pertes de code.  
👉 **Solution :** commits réguliers + branches par fonctionnalité.

---

## 2. 🎨 Intégration de la maquette (Partie 1)

**Objectifs :**

- Transformer la maquette PDF en pages HTML/CSS avec Blade.  
- Site responsive + accessibilité.  

**Tâches :**

1. Créer les routes Laravel (Accueil, Destinations, Équipage, Technologies).  
2. Implémenter la navigation (menu fixe, états actif/survol).  
3. Créer les templates Blade avec la bonne structure HTML.  
4. Intégrer le design system (couleurs, typographies, marges).  
5. Tester le responsive (mobile, tablette, desktop).  

**Ressources :** maquette + Tailwind/Bootstrap.

**Délais :** 1 semaine.

⚠️ **Risques :** erreurs de responsive ou oubli d’accessibilité.  
👉 **Solution :** valider régulièrement avec simulateurs et outils Lighthouse.

---

## 3. 🌍 Internationalisation (Partie 2)

**Objectifs :**

- Rendre le site bilingue FR/EN.  

**Tâches :**

1. Configurer `lang` de Laravel.  
2. Créer fichiers de traduction (`fr.json`, `en.json`).  
3. Ajouter un sélecteur de langue accessible (clavier, screen reader).  
4. Vérifier que la page reste la même lors du switch de langue.  

**Ressources :** Docs Laravel i18n.

**Délais :** 3 jours.

⚠️ **Risque :** incohérence des traductions.  
👉 **Solution :** centraliser les textes dans fichiers `lang`.

---

## 4. 🧪 Tests unitaires des routes (Partie 3)

**Objectifs :**

- Vérifier que chaque URL répond correctement (200, 404, redirection).  

**Tâches :**

1. Installer PHPUnit (inclus avec Laravel).  
2. Écrire des tests _Feature_ pour toutes les routes.  
3. Tester les deux langues (FR/EN).  
4. Automatiser avec `php artisan test`.  

**Ressources :** Docs Laravel Testing.

**Délais :** 2 jours.

⚠️ **Risque :** routes oubliées → tests incomplets.  
👉 **Solution :** lister toutes les routes avec `php artisan route:list`.

---

## 5. 🔧 Back-office CRUD (Parties 4, 5, 6)

**Objectifs :**

- Gérer dynamiquement **Planètes, Équipage, Technologies**.  

**Tâches :**

1. Installer Laravel Breeze (authentification).  
2. Installer **Spatie/laravel-permission** (rôles/permissions).  
3. Créer modèles & migrations (`planetes`, `equipage`, `technologies`).  
4. Implémenter CRUD (Lister, Ajouter, Modifier, Supprimer).  
5. Vérifier que les modifications apparaissent côté public.  

**Ressources :** Docs Breeze + Spatie.

**Délais :** 2 semaines (3 CRUD).

⚠️ **Risque :** erreurs de permission ou de cache.  
👉 **Solution :** tester chaque rôle + invalider cache au besoin.

---

## 6. 👥 Gestion des utilisateurs (Partie 7)

**Objectifs :**

- Ajouter gestion des utilisateurs et rôles.  

**Tâches :**

1. Créer CRUD utilisateurs.  
2. Ajouter attribution des rôles (Admin, Gestionnaires).  
3. Vérifier les accès (middleware/policies).  

**Délais :** 1 semaine.

⚠️ **Risque :** fuite d’accès non autorisé.  
👉 **Solution :** tests unitaires + middleware rigoureux.

---

## 7. 📈 Améliorations & extensions (Partie 8)

**Idées possibles :**

- Blog d’actualités spatiales.  
- Formulaire de contact (avec validation & envoi d’email).  
- Ajout d’animations (GSAP, Framer Motion).  

---

## 8. 📅 Planning global (calendrier indicatif)

- **Semaine 1 :** Préparation + intégration maquette.  
- **Semaine 2 :** Finitions maquette + internationalisation.  
- **Semaine 3 :** Tests unitaires + début back-office (Planètes).  
- **Semaine 4 :** CRUD Équipage + CRUD Technologies.  
- **Semaine 5 :** Gestion des utilisateurs et rôles.  
- **Semaine 6 :** Extensions + tests finaux + livraison.  

---

👉 Veux-tu que je transforme cette feuille de route en **tableau visuel type Gantt** pour que tu puisses suivre ton avancement semaine par semaine ?
