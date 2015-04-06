<?php
namespace Isitpoya\Api;

class PoyaDay
{
  public $date;
  public $name;
  public $source;

  public function __construct(\DateTime $date, $name, $source)
  {
    $this->date = $date;
    $this->name = $name;
    $this->source = $source;
  }
}
