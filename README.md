# projet_garage

- Collaborateurs

   - [Esteban Lory](https://github.com/HFI80Z) 
   - [Anthony Nguyen](https://github.com/Trinyz7) 
   - [Johan Gourmand](https://github.com/joepok77) 
   - [Shaman Viellet](https://github.com/ShamanK93)
   - [Amine](https://github.com/) 

# Garage_V.Parrot
- Vincent Parrot, spécialiste de la réparation automobile, a ouvert son propre garage à Toulouse en 2021. Depuis, il propose une vaste gamme de services, allant de la réparation de la carrosserie et de la mécanique des véhicules à leur entretien régulier, afin de garantir leur performance et leur sécurité. Le Garage V. Parrot offre également la vente de voitures d'occasion, une activité qui lui permet de diversifier ses sources de revenus.

- Pour Vincent, son atelier est bien plus qu'un simple lieu de travail : c’est un espace de confiance où chaque véhicule doit être traité avec le plus grand soin. Bien que son équipe fournisse un service personnalisé et de qualité à chaque client, Vincent est conscient de l'importance de renforcer sa présence en ligne pour se démarquer de la concurrence et asseoir sa notoriété.

# Backend :

- Langage : PHP 8.1
- Framework : Symfony CLI 7
- Gestionnaire de dépendances : Composer
- Interface d'administration : EasyAdmin 4
- Base de données : MySQL
  
# Frontend :

- Langages : HTML5, CSS3, JavaScript
- Framework CSS : Bootstrap

# Fonctionnalités principales

- Utilisateur Administrateur :

   - Gestion des services proposés par le garage.
   - Configuration des horaires d'ouverture.
  
- Utilisateur Employé :

   - Ajout de véhicules d'occasion, incluant photos, descriptions et informations techniques.
  
- Utilisateur Visiteur :

   - Consultation des services disponibles et des horaires d'ouverture.
   - Visualisation des véhicules d'occasion avec tous les détails associés.

# Gestion des branches

- git clone https://github.com/Trinyz7/projet_garage
- cd projet_garage
- Installez les dépendances PHP via Composer :
- composer install
- Configurez la base de données dans le fichier .env :
- DATABASE_URL="mysql://root@127.0.0.1:3306/projet_garage_symfony?serverVersion=8.0.32&charset=utf8mb4"
- Créez la base de données et exécutez les migrations :
- php bin/console doctrine:database:create
- php bin/console doctrine:migrations:migrate
- Démarrer le serveur symfony :
- symfony server:start -d
  
# Annexes

   - Lien du canva :

# Structure du site web
