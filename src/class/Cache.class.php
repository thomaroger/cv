<?php
class Cache
{
    private static $instance;

    public static function getInstance()
    {
           if (is_null(self::$instance)) {
            self::$instance = new Cache();
         }

         return self::$instance;
   }

   public function setHeaders()
   {
        header('Date: '.gmdate('D, d M Y H:i:s \G\M\T', time()));
        header('Last-Modified: '.gmdate('D, d M Y H:i:s \G\M\T', time()));
        header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + 3600));
        header('Cache-Control: max-age=3600, must-revalidate');
        Header("Pragma: cache");
   }

}
