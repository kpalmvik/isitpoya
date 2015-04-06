<?php
namespace Isitpoya\Tests;
use Isitpoya\Api;

/**
 * @author  Kristofer Palmvik <kristofer@palmvik.se>
 */
class PoyaDaysTest extends \PHPUnit_Framework_TestCase
{
    private $emptyJsonData = '{}';

    public function testIsInstanceOfPoyaDays()
    {
      $poyaDays = new \Isitpoya\Api\PoyaDays($this->emptyJsonData);

      $this->assertInstanceOf('Isitpoya\Api\PoyaDays', $poyaDays);
    }

    public function testNextOnOrAfterReturnsAPoyaDay()
    {
      $poyaDays = new \Isitpoya\Api\PoyaDays($this->emptyJsonData);
      $poyaDay = $poyaDays->nextOnOrAfter(new \DateTime);

      $this->assertInstanceOf('Isitpoya\Api\PoyaDay', $poyaDay);
    }
}
