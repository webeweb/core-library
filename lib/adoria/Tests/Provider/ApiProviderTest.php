<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Adoria\Tests\Provider;

use Throwable;
use WBW\Library\Adoria\Model\RequestData;
use WBW\Library\Adoria\Model\Result;
use WBW\Library\Adoria\Provider\ApiProvider;
use WBW\Library\Adoria\Tests\AbstractTestCase;
use WBW\Library\Common\Provider\ProviderException;

/**
 * API provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Adoria\Tests\Provider
 */
class ApiProviderTest extends AbstractTestCase {

    /**
     * Test requestData()
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
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ProviderException::class, $ex);
            $this->assertEquals("Failed to call Adoria API", $ex->getMessage());
        }
    }

    /**
     * Test setDebug()
     *
     * @return void
     */
    public function testSetDebug(): void {

        $obj = new ApiProvider();

        $obj->setDebug(true);
        $this->assertTrue($obj->getDebug());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("http://ws.adoria.com", ApiProvider::ENDPOINT_PATH);
        $this->assertEquals("/MdbProcurement.adoria.ExternalsServices/EProcurement/Buying/V10.svc/rest/AcountingInterface", ApiProvider::RESOURCE_PATH);

        $obj = new ApiProvider();

        $this->assertFalse($obj->getDebug());
    }
}
