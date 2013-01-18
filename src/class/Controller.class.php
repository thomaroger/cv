<?php

class Controller 
{
    public $app;

    public function __construct()
    {
        $this->app = App::getInstance();
    }

     public function setContext($var, $value){
    	$this->app->getContext()->$var = $value;
    }

    public function getRequest(){
    	return $this->app->request;
    }

    public function getError(){
    	return $this->app->error;
    }
}
