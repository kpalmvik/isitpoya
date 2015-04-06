<?php
namespace Isitpoya\Api;
use Braincrafted\Json\Json;
use Braincrafted\Json\JsonDecodeException;

class PoyaDays
{
  private $poyaDays;

  public function __construct($json)
  {
    $this->loadPoyadaysFromJson($json);
  }

  private function loadPoyadaysFromJson($json)
  {
    $this->poyaDays = Json::decode($json);
  }
}
