# projet_garage

- Collaborateurs
   - [Amine](https://github.com/) 
   - [Johan Gourmand](https://github.com/joepok77) 
   - [Anthony Nguyen](https://github.com/Trinyz7) 
   - [Esteban Lory](https://github.com/) 
   - [Shaman Viellet](https://github.com/ShamanK93) 

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
Sur la page d'accueil de notre site de e-commerce, nous avons une barre de navigation en haut de la page. Cette barre de navigation comporte des catégories importantes telles que "Tendance", "Lifestyle", "Découvrir", etc. Elle contient également deux boutons pour permettre aux utilisateurs de se connecter.

Nous avons une "Hero Banner", qui affiche la devise de notre site. En plus de la devise, elle présente des carrousels mettant en avant les sneakers tendances, offrant ainsi un aperçu visuel des produits disponibles.

En descendant sur la page, les utilisateurs trouveront un catalogue d'articles. Ce catalogue présente une sélection de produits que les utilisateurs peuvent parcourir. Ils ont également la possibilité d'ajouter des articles à leur panier directement depuis cette section, ce qui simplifie le processus d'achat.

Enfin, en bas de la page, nous avons un footer. Qui contient des informations sur notre entreprise, donnant aux visiteurs un aperçu de qui nous sommes et de ce que nous proposons. Il inclut également un lien intitulé "Rejoignez Sneakpeak". Ce lien redirige les utilisateurs vers une page de contact où ils peuvent entrer en contact avec nous pour toute question.


# Documentation utilisateur fonctionnement du site
Navigation Intuitive : La navigation sur notre site est simple et intuitive.

Design attirant : On a mis en place un design attirant et esthétique pour créer une première impression positive et qui encourage les visiteurs à explorer davantage notre site.

Contenu Pertinent : Le contenu de notre site, y compris le catalogue de produits sont clair et pertinent.

