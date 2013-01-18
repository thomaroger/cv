<?php

class skillsController extends Controller
{
    public function action()
    {
    	$file = WEBROOT."/lib/fixtures/skills.xml";
    	$instanceXml = new XMLParser($file, "skills");
    	$this->setContext('xml', $instanceXml->export());
    }

}
