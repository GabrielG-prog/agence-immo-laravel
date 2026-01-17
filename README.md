# 🏠 Agence Immobilière - Projet Laravel

## 📋 Description du projet

Site web complet d'agence immobilière développé avec Laravel, comprenant une interface publique pour consulter les biens immobiliers, un système de contact fonctionnel et un back-office d'administration sécurisé pour gérer l'ensemble du catalogue.

---

## ✨ Fonctionnalités principales

### Front-end
- Affichage des biens immobiliers disponibles
- Navigation intuitive et responsive
- Consultation détaillée des propriétés
- Système de recherche et filtres avancés
- Formulaire de contact avec envoi d'emails

### Back-office (Administration)
- **Authentification sécurisée** : système de connexion pour accéder au panel admin
- **Gestion complète des biens** : création, modification, suppression
- **Validation des formulaires** : règles de validation robustes côté serveur
- **Pagination** : navigation efficace dans les listes de biens
- **Interfaces dynamiques réutilisables** : composants modulaires pour une maintenance facilitée
- **Suppression sécurisée** : protection contre les suppressions accidentelles avec confirmation
- **Upload et gestion d'images** : système complet de gestion des photos

---

## 🚀 Technologies utilisées

- **Framework** : Laravel 12
- **Base de données** : MySQL
- **Front-end** : Blade Templates, Bootstrap 5, Tom Select
- **Email** : MailHog (environnement de développement)

---

## 📦 Installation

### Prérequis

- PHP >= 8.1
- Composer
- MySQL
- Node.js et NPM
- MailHog (pour tester l'envoi d'emails)

### Étapes d'installation

#### 1. Cloner le repository
```bash
git clone https://github.com/GabrielG-prog/agence-immo-laravel
cd agence-immo-laravel
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

#### 6. Configurer MailHog pour les emails
Ajoutez ces lignes dans votre fichier `.env` :
```env
MAIL_MAILER=smtp
MAIL_HOST=127.0.0.1
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="noreply@agence-immo.test"
MAIL_FROM_NAME="${APP_NAME}"
```

#### 7. Exécuter les migrations
```bash
php artisan migrate
```

#### 8. (Optionnel) Générer des données de test
```bash
php artisan db:seed
```

#### 9. Compiler les assets
```bash
npm run dev
```

#### 10. Lancer le serveur de développement
```bash
php artisan serve
```

#### 11. Lancer MailHog
Dans un terminal séparé :
```bash
mailhog
```
L'interface MailHog sera accessible sur http://localhost:8025

Le site sera accessible sur http://localhost:8000

---

## 🔐 Accès à l'administration

Pour accéder au back-office d'administration, utilisez les identifiants suivants (disponibles en commentaire dans le code) :

**URL** : http://localhost:8000/admin/login

**Identifiants de test** :
- Email : *voir les commentaires dans le code source*
- Mot de passe : *voir les commentaires dans le code source*

> ⚠️ **Important** : Ces identifiants sont destinés uniquement à l'environnement de développement. En production, assurez-vous de créer vos propres comptes admin sécurisés.

---

## 📧 Test du système de contact

Le formulaire de contact utilise MailHog pour intercepter les emails en développement :

1. Remplissez le formulaire de contact sur le site
2. Accédez à l'interface MailHog : http://localhost:8025
3. Consultez l'email intercepté pour vérifier son contenu

Aucun email réel n'est envoyé en développement, tout est capturé par MailHog.

---

## 🗂️ Structure du projet

```
├── app/
│   ├── Http/
│   │   ├── Controllers/     # Contrôleurs (Biens, Admin, Contact)
│   │   └── Requests/        # Validation des formulaires
│   ├── Models/              # Modèles Eloquent
│   └── Mail/                # Classes d'emails
├── database/
│   ├── migrations/          # Fichiers de migration
│   └── seeders/             # Données de test
├── resources/
│   ├── views/              # Templates Blade
│   │   ├── front/          # Vues publiques
│   │   ├── admin/          # Back-office
│   │   └── emails/         # Templates d'emails
│   └── css/                # Styles
├── routes/
│   └── web.php             # Routes de l'application
└── public/                 # Assets publics et uploads
```

---

## 📝 Fonctionnalités détaillées

### Gestion des biens immobiliers
- Liste paginée avec recherche et filtres
- Formulaire de création avec validation complète
- Édition des propriétés existantes
- Suppression avec confirmation (modal)
- Upload et gestion d'images multiples
- Filtres par type de bien, prix, surface, localisation

### Système de contact
- Formulaire de contact avec validation
- Envoi d'emails via MailHog en développement
- Notifications par email aux administrateurs

### Validation
Les formulaires incluent des règles de validation robustes pour tous les champs critiques : titre, description, prix, surface, nombre de pièces, adresse, etc.

### Composants réutilisables
Le projet utilise des composants Blade réutilisables pour maintenir un code DRY et faciliter la maintenance : formulaires, modals, cartes de biens, alertes, etc.

---

## ✅ État d'avancement

- [x] Configuration Laravel de base
- [x] Système d'authentification
- [x] Modèle et migration Bien immobilier
- [x] CRUD complet back-office
- [x] Validation des formulaires
- [x] Pagination
- [x] Interface front-end publique
- [x] Upload et gestion d'images
- [x] Système de recherche avancée
- [x] Filtres par type de bien, prix, localisation
- [x] Système de contact avec emails
- [x] Configuration MailHog

---

## 🛠️ Commandes utiles

```bash
# Compiler les assets en mode watch (développement)
npm run dev

# Compiler les assets pour la production
npm run build

# Vider le cache
php artisan cache:clear

# Régénérer l'autoload
composer dump-autoload

# Créer un nouveau contrôleur
php artisan make:controller NomController

# Créer une nouvelle migration
php artisan make:migration create_table_name
