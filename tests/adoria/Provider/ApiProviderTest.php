<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Adoria\Tests\Provider;

use Exception;
use WBW\Library\Adoria\Model\RequestData;
use WBW\Library\Adoria\Model\Result;
use WBW\Library\Adoria\Provider\ApiProvider;
use WBW\Library\Adoria\Tests\AbstractTestCase;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Adoria\Tests\Provider
 */
class ApiProviderTest extends AbstractTestCase {

    /**
     * Tests requestData()
     *
     * @return void
     */
    public function testRequestData(): void {

        // Set a Request data mock.
        $requestData = new RequestData();
        $requestData->setIdentificationKey("identificationKey");

        $obj = new ApiProvider();

        try {

            // This unit test failed on Travis-CI.
            $res = $obj->requestData($requestData);
            $this->assertInstanceOf(Result::class, $res);

            $this->assertEquals(0, $res->getReturnCode());
            $this->assertEquals(["Error on the identificationKey"], $res->getErrors());
            $this->assertEquals([], $res->getData());
        } catch (Exception $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
            $this->assertEquals("Failed to call Adoria API", $ex->getMessage());
        }
    }

    /**
     * Tests setDebug()
     *
     * @return void
     */
    public function testSetDebug(): void {

        $obj = new ApiProvider();

        $obj->setDebug(true);
        $this->assertTrue($obj->getDebug());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ApiProvider();

        $this->assertFalse($obj->getDebug());
    }
}
