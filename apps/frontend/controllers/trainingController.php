<?php

class trainingController extends Controller
{
    public function action()
    {
    	$file = WEBROOT."/lib/fixtures/formations.xml";
    	$instanceXml = new XMLParser($file, "formations");
    	$this->setContext('xml', $instanceXml->export());
    }

}
