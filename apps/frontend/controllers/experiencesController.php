<?php

class experiencesController extends Controller
{
    public function action()
    {
    	$file = WEBROOT."/lib/fixtures/experiences.xml";
    	$instanceXml = new XMLParser($file, "experiences");
    	$this->setContext('xml', $instanceXml->export());
    }
}
