<?php

class homeController extends Controller
{
    public function action()
    {
    	$file = WEBROOT."/lib/fixtures/experiences.xml";
    	$instanceXml = new XMLParser($file, "experiences");
    	$experiences = $instanceXml->export();
    	$this->setContext('experience', $experiences[0]);

    	$file = WEBROOT."/lib/fixtures/skills.xml";
    	$instanceXml = new XMLParser($file, "skills");
    	$this->setContext('skills', $instanceXml->export());

    	$file = WEBROOT."/lib/fixtures/formations.xml";
    	$instanceXml = new XMLParser($file, "formations");
    	$formations = $instanceXml->export();
    	$this->setContext('formation', $formations[0]);
    }
}
