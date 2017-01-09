# Symfony-SSC2016Bundle
INFO:
================================
Ceci est un formulaire sous forme de bundle symfony développé pour l'entreprise Tecumseh Europe dans le cadre d'un test d'admission à un stage.


Server-requirements:
--------------------------------
* symfony 3.2                   
* apache2                       
* PHP 5.6                     
* mysql-server
* git
* php-composer


Compatibilité:
--------------------------------
* Firefox
* Google chrom€
* Opera
* Microsoft Edge
* Internet explorer

Symfony-requirements
--------------------------------
* symlink
* assetic

Installation
--------------------------------
* Disposer d'une installation Symfony 3.2 (minimum).
* Installer composer.
* Aller dans le répertoire racine du site
* Installer via composer le bundle: survey/ssc2016bundle:"dev-1-0-0"
* Installer via composer le bundle: symfony/assetic-bundle
* Ajoutez les namespaces de SSC2016 et Assetic à l'array $bundles de app/AppKernel.php
* Ajoutez la route vers @SurveysSSC2016Bundle/Resources/config/routing.yml avec le préfixe de votre choix dans app/config/routing.yml
* Configurez les paramètres de connection à la base mysql de doctrine dans app/config/parameters.yml
* $ php bin/console doctrine:database:create
* $ php bin/console doctrine:schema:update --force

* $ php bin/console cache:clear --env=prod
* $ php bin/console assetic:dump --env=prod --no-debug