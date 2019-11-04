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
use WBW\Library\Core\ThirdParty\Adoria\Model\RequestData;
use WBW\Library\Core\ThirdParty\Adoria\Model\Result;
use WBW\Library\Core\ThirdParty\Adoria\Provider\APIProvider;

/**
 * API provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Adoria\Provider
 */
class APIProviderTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new APIProvider();

        $this->assertFalse($obj->getDebug());
    }

    /**
     * Tests the requestData() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testRequestData() {

        // Set a Request data mock.
        $requestData = new RequestData();
        $requestData->setIdentificationKey("identificationKey");

        $obj = new APIProvider();

        $res = $obj->requestData($requestData);
        $this->assertInstanceOf(Result::class, $res);

        $this->assertEquals(0, $res->getReturnCode());
        $this->assertEquals(["Error on the identificationKey"], $res->getErrors());
        $this->assertEquals([], $res->getData());
    }

    /**
     * Tests the setDebug() method.
     *
     * @return void
     */
    public function testSetDebug() {

        $obj = new APIProvider();

        $obj->setDebug(true);
        $this->assertTrue($obj->getDebug());
    }
}
