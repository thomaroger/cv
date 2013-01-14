<?php
require_once(WEBROOT.'/src/class/App.class.php');
$app = App::getInstance();
$app->request = Request::getInstance();
$app->error = Error::getInstance();
$app->context = Context::getInstance();
