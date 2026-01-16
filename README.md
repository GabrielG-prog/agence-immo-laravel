# 🏠 Agence Immobilière - Projet Laravel

## 📋 Description du projet

Site web fictif d'agence immobilière développé avec Laravel, comprenant une interface publique pour consulter les biens immobiliers et un back-office d'administration complet pour gérer l'ensemble du catalogue.

---

## ✨ Fonctionnalités principales

### Front-end
- Affichage des biens immobiliers disponibles
- Navigation intuitive et responsive
- Consultation détaillée des propriétés

### Back-office (Administration)
- **Gestion complète des biens** : création, modification, suppression
- **Validation des formulaires** : règles de validation robustes côté serveur
- **Pagination** : navigation efficace dans les listes de biens
- **Interfaces dynamiques réutilisables** : composants modulaires pour une maintenance facilitée
- **Suppression sécurisée** : protection contre les suppressions accidentelles avec confirmation

---

## 🚀 Technologies utilisées

- **Framework** : Laravel 12
- **Base de données** : MySQL
- **Front-end** : Blade Templates, Bootstrap 5, Tom Select 

---

## 📦 Installation

### Prérequis
- PHP >= 8.1
- Composer
- MySQL 
- Node.js et NPM (pour la compilation des assets)

### Étapes d'installation

#### 1. Cloner le repository
```bash
git clone https://github.com/GabrielG-prog/agence-immo-laravel
cd nom-du-projet
```

#### 2. Installer les dépendances PHP
```bash
composer install
```

#### 3. Installer les dépendances Node.js
```bash
npm install
```

#### 4. Configurer l'environnement
```bash
cp .env.example .env
php artisan key:generate
```

#### 5. Configurer la base de données dans le fichier `.env`
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_votre_base
DB_USERNAME=votre_utilisateur
DB_PASSWORD=votre_mot_de_passe
```

#### 6. Exécuter les migrations
```bash
php artisan migrate
```

#### 7. (Optionnel) Générer des données de test
```bash
php artisan db:seed
```

#### 8. Compiler les assets
```bash
npm run dev
```

#### 9. Lancer le serveur de développement
```bash
php artisan serve
```

Le site sera accessible sur `http://localhost:8000`

---

## 🗂️ Structure du projet

```
├── app/
│   ├── Http/
│   │   ├── Controllers/     # Contrôleurs (Biens, Admin)
│   │   └── Requests/        # Validation des formulaires
│   └── Models/              # Modèles Eloquent
├── database/
│   ├── migrations/          # Fichiers de migration
│   └── seeders/             # Données de test
├── resources/
│   ├── views/              # Templates Blade
│   │   ├── front/          # Vues publiques
│   │   └── admin/          # Back-office
│   └── css/                # Styles
├── routes/
│   └── web.php             # Routes de l'application
└── public/                 # Assets publics
```

---

## 📝 Fonctionnalités détaillées

### Gestion des biens immobiliers
- Liste paginée avec recherche et filtres
- Formulaire de création avec validation complète
- Édition des propriétés existantes
- Suppression avec confirmation (modal ou alert)
- Upload d'images (à venir)

### Validation
Les formulaires incluent des règles de validation pour tous les champs critiques comme le titre, la description, le prix, la surface, etc.

### Composants réutilisables
Le projet utilise des composants Blade réutilisables pour maintenir un code DRY et faciliter la maintenance.

---

## 🚧 État d'avancement

- [x] Configuration Laravel de base
- [x] Système d'authentification
- [x] Modèle et migration Bien immobilier
- [x] CRUD complet back-office
- [x] Validation des formulaires
- [x] Pagination
- [ ] Interface front-end publique (en cours)
- [ ] Upload et gestion d'images
- [ ] Système de recherche avancée
- [ ] Filtres par type de bien, prix, localisation

---

## 👤 Auteur

Développé par **[Votre Nom]** - Projet d'apprentissage Laravel

---

> **Note** : Ce projet est développé progressivement. Les fonctionnalités sont ajoutées au fur et à mesure. Consultez les branches Git pour voir l'évolution du développement.
