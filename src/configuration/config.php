<?php
//define ('WEBROOT', '/Library/WebServer/Documents/WorkSpace_Web/pronostics');
// define ('WEBROOT', '/var/local/webroot/cv');
define ('WEBROOT', './');

// Configuration des templates de headers et de footer
define ('COMMONS_HEADER', WEBROOT.'/src/templates/header.php');
define ('COMMONS_FOOTER', WEBROOT.'/src/templates/footer.php');

// Configuration de l'action par defaut
define ('APP_DEFAULT', 'frontend');
define ('ACTION_DEFAULT', 'home');

// Email
define ('CONTACT_EMAIL', 'thomaroger@gmail.com');
define ('CONTACT_SUBJECT', 'contact thomaroger.fr');
