<?php

class Controller
{
    public $app;

    public function __construct()
    {
        $this->app = App::getInstance();
    }
}
