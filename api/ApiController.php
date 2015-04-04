<?php
namespace Isitpoya\Api;

use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController
{
  private function getStaticTestData()
  {
    //Static data
    $response = [];
    $nextPoyaInfo = [];
    $nextPoyaInfo['Date'] = "2015-05-03";
    $nextPoyaInfo['Name'] = "Vesak Full Moon Poya Day";
    return $nextPoyaInfo;
  }

  public function next()
  {

    return new JsonResponse($data = $this->getStaticTestData(), $status = 200);
  }
}
