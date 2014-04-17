<?php

namespace InCommon\Tests;

use InCommon\InCommon;

class InCommonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @expectedException UnexpectedValueException
     * @expectedExceptionMessage broke
     */
    public function it_squawks_when_invalid_api_is_accessed()
    {
        $incommon = new InCommon();
        $incommon->broke;
    }

    /**
     * @test
     */
    public function it_returns_correct_api_when_property_is_accessed()
    {
        $incommon = new InCommon();

        $this->assertInstanceOf('InCommon\Api\AbstractApi', $incommon->certs);
    }

    /**
     * @test
     */
    public function it_returns_client()
    {
        $incommon = new InCommon();

        $this->assertInstanceOf('SoapClient', $incommon->getClient());
    }
}
