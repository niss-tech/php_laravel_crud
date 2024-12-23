# Projet Laravel - Gestion des étudiants (CRUD)

## Description

Ce projet est une application web de gestion des étudiants développée avec **Laravel**, un framework PHP. Il permet de gérer les informations des étudiants (nom, prénom, classe) en offrant des fonctionnalités de création, consultation, modification et suppression des étudiants.

### Fonctionnalités

- **Ajouter un étudiant** : Permet d'ajouter un étudiant à la base de données.
- **Afficher la liste des étudiants** : Affiche tous les étudiants enregistrés dans l'application.
- **Modifier un étudiant** : Permet de modifier les informations d'un étudiant existant.
- **Supprimer un étudiant** : Permet de supprimer un étudiant de la base de données.

## Prérequis

Avant de pouvoir exécuter le projet, assurez-vous d'avoir installé les outils suivants :

- **PHP** (version 8.0 ou supérieure)
- **Composer** (outil de gestion des dépendances PHP)
- **Laravel** (framework PHP)
- **MySQL** ou une autre base de données compatible avec Laravel
- **Git** (pour le contrôle de version)

## Installation

### Étape 1 : Cloner le dépôt

Commencez par cloner ce projet depuis GitHub :

```bash
git clone https://github.com/niss-tech/php_laravel_crud.git
```

### Étape 2 : Installer les dépendances

Une fois le projet cloné, naviguez dans le répertoire du projet et installez les dépendances via Composer :

```bash
cd php_laravel_crud
composer install
```

### Étape 3 : Configurer l'environnement

Copiez le fichier `.env.example` pour créer un fichier `.env` :

```bash
cp .env.example .env
```

Modifiez le fichier `.env` pour configurer votre base de données. Par exemple, si vous utilisez MySQL :

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_votre_base_de_donnees
DB_USERNAME=votre_utilisateur
DB_PASSWORD=Votre_Mot_De_Passe
```

### Étape 4 : Générer la clé de l'application

Exécutez la commande suivante pour générer la clé de l'application Laravel :

```bash
php artisan key:generate
```

### Étape 5 : Exécuter les migrations

Créez les tables nécessaires dans votre base de données en exécutant les migrations Laravel :

```bash
php artisan migrate
```

### Étape 6 : Démarrer le serveur

Une fois les étapes précédentes terminées, vous pouvez démarrer le serveur Laravel en local :

```bash
php artisan serve
```

L'application sera accessible à l'adresse : [http://127.0.0.1:8000](http://127.0.0.1:8000).

## Structure du projet

- **Routes** : Les routes sont définies dans le fichier `routes/web.php`. Elles mènent vers les actions du contrôleur `EtudiantController`.
- **Contrôleur** : Le contrôleur `EtudiantController` est responsable de la gestion des étudiants, y compris l'affichage, l'ajout, la modification et la suppression.
- **Modèle** : Le modèle `Etudiant` représente les données des étudiants dans la base de données.
- **Vues** : Les vues se trouvent dans le dossier `resources/views/etudiant`. Vous trouverez les vues pour afficher la liste des étudiants, ajouter un étudiant et mettre à jour les informations d'un étudiant.

## Routes disponibles

Voici les principales routes de l'application :

- **`/`** : Page d'accueil
- **`/etudiant`** : Liste des étudiants
- **`/ajouter`** : Formulaire d'ajout d'un étudiant
- **`/ajouter/traitement`** : Traitement du formulaire pour ajouter un étudiant
- **`/delete-etudiant/{id}`** : Supprimer un étudiant avec un identifiant spécifique
- **`/update-etudiant/{id}`** : Formulaire pour modifier un étudiant avec un identifiant spécifique
- **`/update/traitement`** : Traitement du formulaire pour mettre à jour les informations d'un étudiant

## Routes détaillées

- **Route `GET /`** : Affiche la page d'accueil.
- **Route `GET /etudiant`** : Affiche la liste des étudiants.
- **Route `GET /ajouter`** : Affiche le formulaire pour ajouter un étudiant.
- **Route `POST /ajouter/traitement`** : Traite les données du formulaire et ajoute un étudiant à la base de données.
- **Route `GET /delete-etudiant/{id}`** : Supprime un étudiant en fonction de son ID.
- **Route `GET /update-etudiant/{id}`** : Affiche le formulaire pour modifier un étudiant avec l'ID spécifié.
- **Route `POST /update/traitement`** : Traite le formulaire de mise à jour d'un étudiant.

## Contribution

Si vous souhaitez contribuer à ce projet, vous pouvez :

1. Forker le projet
2. Créer une branche pour vos modifications (`git checkout -b feature/nouvelle-fonctionnalite`)
3. Commiter vos changements (`git commit -am 'Ajout de nouvelle fonctionnalité'`)
4. Pousser vos modifications vers votre fork (`git push origin feature/nouvelle-fonctionnalite`)
5. Créer une Pull Request pour fusionner vos modifications

## License

Ce projet est sous la licence [MIT](https://opensource.org/licenses/MIT).

