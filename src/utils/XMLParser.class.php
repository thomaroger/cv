<?php
class XMLParser
{
  public $filename;
  public $type;
  public $content;

  public function __construct($filename, $type)
  {
    $this->filename = $filename;
    $this->type = $type;
  }

  public function export()
  {
      $xml = array();
      $method = "parse".ucfirst($this->type);

      $this->read();
      $xml = $this->$method();

      return $xml;
  }

  public function read()
  {
      if (file_exists(($this->filename))) {
        $this->content = new SimpleXMLElement(file_get_contents($this->filename));
    }
  }

  public function parseExperiences()
  {
      $experiences = array();

      if (empty($this->content)) {
          return $experiences;
      }

      foreach ($this->content->experience as $experience) {
          $experience = (array) $experience;
          $experience['details'] = (array) $experience['details'];
      $experience['tags'] = (array) $experience['tags'];
          $experiences[] = $experience;

      }

      return $experiences;
  }

  public function parseFormations()
  {
    $formations = array();

    if (empty($this->content)) {
      return $formations;
    }

    foreach ($this->content->formation as $formation) {
      $formations[] = (array) $formation;

    }

    return $formations;
  }

  public function parseOthers()
  {
    $others = array();

    if (empty($this->content)) {
      return $formations;
    }

    foreach ($this->content->other as $other) {
      $others[] = (array) $other;

    }

    return $others;
  }

  public function parseSkills()
  {
    $skills = array();

    if (empty($this->content)) {
      return $formations;
    }

    foreach ($this->content->group as $group) {
      $masterSkill = $group->attributes();
      foreach ($group->skill as $skill) {
          $skills[(string) $masterSkill['name']][] = (array) $skill;
      }
    }

    return $skills;
  }

}
