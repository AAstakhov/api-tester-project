<?php

namespace Aa\ApiTesterProject\ApiTest;

use Aa\ApiTester\ApiTest\SuiteLoader;
use Aa\ApiTester\ApiTest\Test;
use Aa\ApiTester\PhpUnit\IsApiResponseValidConstraint;
use GuzzleHttp\Client;
use PHPUnit_Framework_TestCase;

class ApiTest extends PHPUnit_Framework_TestCase
{
    public function testApiResponsesAreValid()
    {
        $suiteLoader = new SuiteLoader();
        $suite = $suiteLoader->loadFromDir(__DIR__.'/../fixtures');

        $guzzleClient = new Client();

        /** @var Test $test */
        foreach ($suite as $test) {

            $request = $test->getRequest();
            $response = $guzzleClient->send($request);

            $this->assertApiResponseIsValid($response, $test);
        }
    }

    public function assertApiResponseIsValid($response, Test $test)
    {
        $assertion = new IsApiResponseValidConstraint($test);
        self::assertThat($response, $assertion);
    }
}
