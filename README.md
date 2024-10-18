# projet_garage
Collaborateurs
Anthony Nguyen
Johan Gourmand 
Esteban Lory
Amine
Shaman Viellet 
# garage-V.Parrot
Vincent Parrot,travail dans la réparation automobile et a ouvert son propre garage à Toulouse en 2021.

Depuis 3 ans, il propose une large gamme de services: réparation de la carrosserie et de la mécanique des voitures ainsi que leur entretien régulier pour garantir leur performance et leur sécurité. De plus, le Garage V. Parrot met en vente des véhicules d'occasion afin d'accroître son chiffre d'affaires.
Vincent Parrot considère son atelier comme un véritable lieu de confiance pour ses clients et leurs voitures doivent, selon lui, à tout prix être entre de bonnes mains.

Bien qu'il fournisse grâce à ses employés un service de qualité et personnalisé à chaque client, Vincent Parrot reconnaît qu'il doit être visible sur internet s'il veut se faire définitivement une place parmi la concurrence.

# Fonctionnalités principales
Gestion des voitures d'occasion : ajout, affichage et suppression de véhicules d'occasion.
Téléchargement d'images : possibilité d'ajouter plusieurs images pour chaque voiture.
Affichage des véhicules : chaque voiture est affichée avec ses caractéristiques (marque, modèle, prix, kilométrage, etc.) et ses images dans un carrousel.
Page d'administration : accès restreint pour ajouter et supprimer des véhicules
Présenter les services : l'administrateur a la posibilité de modifier les informations directements à partir de son espace admin.
Définir les horaires d'ouvertures : l'administrateur a la posibilité de préciser quand le garage est ouvert, à partir de son espace.
Receuillir les témoignages clients : les avis seront modérés par un employé pour éviter tout contenu inapproprié ou offensant.
Création de compte : possibilité de créer un compte employé depuis la page admin et lui attribuer un rôle.
# Technologie utilisé
PHP >= 8.1
HTML, CSS3, Javascript
Bootstrap
Composer
Symfony CLI
EasyAdmin4
MySQL
MongoDBst une plateforme spécialisé dans la revente de sneakers proposant une sélection soigneusement choisie de sneakers de qualité, nous nous engageons à vous offrir une expérience d'achat fluide et agréable. Explorez les différentes catégories et laissez-vous séduire par nos offres exclusives et nos promotions attractives.

# Gestion des branches
git clone https://github.com/jordyvuong/projet-garage.git
cd projet-garage

Installez les dépendances PHP via Composer :
composer install
Configurez la base de données dans le fichier .env :

DATABASE_URL="mysql://root:@127.0.0.1:8000/garage_db"
Créez la base de données et exécutez les migrations :

php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
Démarrer le serveur symfony :

symfony server:start -d
# Annexes
Lien du canva :

Structure du site web
Sur la page d'accueil de notre site de e-commerce, nous avons une barre de navigation en haut de la page. Cette barre de navigation comporte des catégories importantes telles que "Tendance", "Lifestyle", "Découvrir", etc. Elle contient également deux boutons pour permettre aux utilisateurs de se connecter.

Nous avons une "Hero Banner", qui affiche la devise de notre site. En plus de la devise, elle présente des carrousels mettant en avant les sneakers tendances, offrant ainsi un aperçu visuel des produits disponibles.

En descendant sur la page, les utilisateurs trouveront un catalogue d'articles. Ce catalogue présente une sélection de produits que les utilisateurs peuvent parcourir. Ils ont également la possibilité d'ajouter des articles à leur panier directement depuis cette section, ce qui simplifie le processus d'achat.

Enfin, en bas de la page, nous avons un footer. Qui contient des informations sur notre entreprise, donnant aux visiteurs un aperçu de qui nous sommes et de ce que nous proposons. Il inclut également un lien intitulé "Rejoignez Sneakpeak". Ce lien redirige les utilisateurs vers une page de contact où ils peuvent entrer en contact avec nous pour toute question.


# Documentation utilisateur fonctionnement du site
Navigation Intuitive : La navigation sur notre site est simple et intuitive.

Design attirant : On a mis en place un design attirant et esthétique pour créer une première impression positive et qui encourage les visiteurs à explorer davantage notre site.

Contenu Pertinent : Le contenu de notre site, y compris le catalogue de produits sont clair et pertinent.

Facilité d'Achat : Les visiteurs peuvent ajouter des articles à leur panier, passer à la caisse et finaliser leur commande en quelques étapes seulement.
