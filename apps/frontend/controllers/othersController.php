<?php

class othersController extends Controller
{
    public function action()
    {
    	$file = WEBROOT."/lib/fixtures/others.xml";
    	$instanceXml = new XMLParser($file, "others");
    	$this->setContext('xml', $instanceXml->export());
    }
}
