<?php

class Autoload
{
  public function __construct()
  {
    $this->autoloadModel();
    $this->autoloadClassUtils();
  }

  public function autoloadModel()
  {
      $this->requireAllFileInDirectory(WEBROOT.'/models/');

  }

  public function autoloadClassUtils()
  {
      $this->autoloadAnotherFile(WEBROOT.'/src/class/Request.class.php');
      $this->autoloadAnotherFile(WEBROOT.'/src/class/Error.class.php');
      $this->autoloadAnotherFile(WEBROOT.'/src/class/Context.class.php');
      $this->autoloadAnotherFile(WEBROOT.'/src/class/Controller.class.php');
      $this->autoloadAnotherFile(WEBROOT.'/src/utils/XMLParser.class.php');
      require_once(WEBROOT.'/src/class/App.class.php');
  }

  public function autoloadAction($apps, $name)
  {
    $controller = WEBROOT.'/apps/'.$apps.'/controllers/'.$name.'Controller.php';
    $template = WEBROOT.'/apps/'.$apps.'/templates/'.$name.'Template.php';
    if (file_exists($controller) && file_exists($template)) {
      $this->autoloadAnotherFile($controller);
      $classController = $name."Controller";
      $actionController = new $classController();
      $actionController->action();
      $app = App::getInstance();
      $this->autoloadAnotherFile($template, $app);
    }else{
      @header("HTTP/1.0 404 Not Found");
      require_once(WEBROOT.'/src/templates/404.php');
    }
  }

  public function autoloadAnotherFile($path, $app = null)
  {
      if (file_exists($path)) {
        if(!empty($app)) {
          $ctx = $app->getContext();
          $err = $app->getError();
        }
        require_once($path);
      }
  }

  public function requireAllFileInDirectory($directory)
  {
    if (file_exists($directory)) {
      if ($handle = opendir($directory)) {
        while (false !== ($file = readdir($handle))) {
            if (!in_array($file, array('.', '..')) && !is_dir($directory.$file)) {
              require_once($directory.$file);
            }
        }
        closedir($handle);
      }
    }
  }
}
