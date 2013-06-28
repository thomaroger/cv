<?php
  session_start();
  require_once 'src/configuration/config.php';
  require_once(WEBROOT.'/src/app.php');
  $app->setCache();
  $app->checkAsset();
  if (!$app->isAsset()) {
    $app->handleHeader();
    $app->handleContent();
    $app->handleFooter();
  }
