<?php

require_once(WEBROOT.'/src/class/Autoload.class.php');

class App
{
  public $autoload;
  public $request;
  public $error;
  public $context;

  public $isAsset = false;
  public $path;

  private static $instance;

  public static function getInstance()
  {
    if (is_null(self::$instance)) {
      self::$instance = new App();
    }

    return self::$instance;
   }

  public function __construct()
  {
    $this->autoload();
  }

  public function autoload()
  {
    $this->autoload = new Autoload();
  }

  public function handleHeader()
  {
    if (file_exists(COMMONS_HEADER)) {
      $path = $_SERVER['SCRIPT_URL'];
      require_once(COMMONS_HEADER);
    }
  }

  public function handleFooter()
  {
    if (file_exists(COMMONS_HEADER)) {
      require_once(COMMONS_FOOTER);
    }
  }

  public function checkAsset()
  {
    $url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $this->path = explode('/' ,$url['path']);

    $lastPath = array_slice($this->path, -1, 1);
    if (preg_match('/.js$/', $lastPath[0], $match)
        || preg_match('/.css$/', $lastPath[0], $match)
        || preg_match('/.png$/', $lastPath[0], $match)
        || preg_match('/.xml$/', $lastPath[0], $match)) {
      $this->handleAssets($match);
    }
  }

  public function handleContent()
  {
    $count = count($this->path);
    try {
      if ($count == 3) {
        $this->autoload->autoloadAction($this->path[1], $this->path[2]);
      } else {
        $this->autoload->autoloadAction(APP_DEFAULT, !empty($this->path[1]) ? $this->path[1] : ACTION_DEFAULT);
      }
    } catch (RuntimeException $e) {
      echo $e->getMessage();
    }
  }

  public function handleAssets($match)
  {
    $this->setAsset(true);
    $method = "render".ucfirst(str_replace('.', '', $match[0]));
    $this->$method();
  }

  public function setCache()
  {
      $cache = Cache::getInstance();
      $cache->setHeaders();
  }

  public function renderJs()
  {
    header('Content-type: text/javascript');
    readfile(WEBROOT.$_SERVER['SCRIPT_URL']);
  }

  public function renderCss()
  {
    header('Content-type: text/css');
    readfile(WEBROOT.$_SERVER['SCRIPT_URL']);
  }

  public function renderPng()
  {
    header('Content-type: image/png');
    readfile(WEBROOT.$_SERVER['SCRIPT_URL']);
  }

  public function renderXml()
  {
    header('Content-type: application/xml');
    readfile(WEBROOT.$_SERVER['SCRIPT_URL']);
  }

  public function setAsset($asset)
  {
    $this->isAsset = $asset;
  }

  public function isAsset()
  {
    return $this->isAsset;
  }

  public function getContext()
  {
      return $this->context;
  }

  public function getError()
  {
      return $this->error;
  }

  public function redirect($apps, $name)
  {
      header('Location: /'.$apps.'/'.$name);
  }
}
