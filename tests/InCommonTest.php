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
    function it_squawks_when_invalid_api_is_accessed()
    {
        $incommon = new InCommon();
        $incommon->broke;
    }
} 