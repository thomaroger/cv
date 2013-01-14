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
      require_once(WEBROOT.'/src/class/App.class.php');
  }

  public function autoloadAction($apps, $name)
  {
    $controller = WEBROOT.'/apps/'.$apps.'/controllers/'.$name.'Controller.php';
    $template = WEBROOT.'/apps/'.$apps.'/templates/'.$name.'Template.php';
    if (file_exists($controller) && file_exists($template)) {
      $this->autoloadAnotherFile($controller);
      $db = $name."Controller";
      $actionController = new $db();
      $actionController->action();
      $this->autoloadAnotherFile($template);
    }
  }

  public function autoloadAnotherFile($path)
  {
      if (file_exists($path)) {
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
