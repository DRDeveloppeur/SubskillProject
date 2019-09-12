-Configurer la base de données :
Aller dans le fichier .env dans la racine et configurer l’identifiant et le mot de passe (DATABASE_URL=mysql//identifiant:motDePasse@adresseIP:Port/nomDeLaDB) à la ligne 27.
Puis exécuter la commande “php bin/console doctrine:database:create” pour crée la base de donnée,
“php bin/console make:migration” pour générer le fichier de migration et pour finir
“php bin/console doctrine:migrations:migrate” pour migrer les donnée dans la base de donnée.

-Gestion des images :
Exécuter la commande “composer require vich/uploader-bundle”.  

-Envoi d’email :
J’utilise mailtrap dans ma configuration, mais vous pouvez la changer dans le fichier .env de la racine (MAILER_URL=) ligne 34.