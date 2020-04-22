<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Adoria\Provider;

use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Adoria\Exception\ApiException;
use WBW\Library\Core\ThirdParty\Adoria\Model\RequestData;
use WBW\Library\Core\ThirdParty\Adoria\Model\Result;
use WBW\Library\Core\ThirdParty\Adoria\Provider\ApiProvider;

/**
 * API provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Adoria\Provider
 */
class ApiProviderTest extends AbstractTestCase {

    /**
     * Tests the requestData() method.
     *
     * @return void
     */
    public function testRequestData() {

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
     * Tests the setDebug() method.
     *
     * @return void
     */
    public function testSetDebug() {

        $obj = new ApiProvider();

        $obj->setDebug(true);
        $this->assertTrue($obj->getDebug());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new ApiProvider();

        $this->assertFalse($obj->getDebug());
    }
}
