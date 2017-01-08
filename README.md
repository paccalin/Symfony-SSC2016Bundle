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

Compatibilité:
--------------------------------
* Firefox
* Google chrome
* Opera
* Microsoft Edge
* Internet explorer

symlink
assetic

Installation (effectuée sous Debian 8 Jessie)
--------------------------------
* Si vous disposez déja d'une installation symfony, allez à l'étape 8
1. Déplacez-vous dans votre répertoire web
2. $ symfony new %nom du site% "3.2.*"
3. Déplacez-vous dans le répertiore racine de votre nouveau site
4. Editez app/config/parameters.yml et saisizzez les informations liées à votre base de données
5. $ HTTPDUSER=`ps axo user,comm | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1`
6. $ setfacl -R -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX var
7. $ setfacl -dR -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX var
8. $ Déplacez-vous vers src
9. $ Créez le répertoire Surveys/
10. $ Déplacez-vous dans ce dernier
* Si vous ne disposez pas du paquet git vous pouvez ignorer l'étape suivante, télécharger l'archive sur github.com et l'extraire à la main dans le répertoire à crées: SSC2016Bundle
11. $ git clone https://github.com/paccalin/Symfony-SSC2016Bundle SSC2016Bundle
...
surveys_ssc2016:
    resource: "@SurveysSSC2016Bundle/Resources/config/routing.yml"
    prefix:   /Surveys/SSC2016
...