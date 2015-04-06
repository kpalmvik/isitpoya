<?php
namespace Isitpoya\Tests;
use Isitpoya\Api;

/**
 * @author  Kristofer Palmvik <kristofer@palmvik.se>
 */
class PoyaDaysTest extends \PHPUnit_Framework_TestCase
{
    public function testIsInstanceOfPoyaDays()
    {
      $poyaDays = new \Isitpoya\Api\PoyaDays('{}');

      $this->assertInstanceOf('Isitpoya\Api\PoyaDays', $poyaDays);
    }
}
