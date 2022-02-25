<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Adoria\Tests\Model;

use DateTime;
use Exception;
use WBW\Library\Adoria\Model\RequestData;
use WBW\Library\Adoria\Tests\AbstractTestCase;

/**
 * Request data test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Adoria\Tests\Model
 */
class RequestDataTest extends AbstractTestCase {

    /**
     * Tests setAnalyticCode()
     *
     * @return void
     */
    public function testSetAnalyticCode(): void {

        $obj = new RequestData();

        $obj->setAnalyticCode("AnalyticCode");
        $this->assertEquals("AnalyticCode", $obj->getAnalyticCode());
    }

    /**
     * Tests setBuyDateMax()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetBuyDateMax(): void {

        // Set an Buy max date mock.
        $buyDateMax = new DateTime();

        $obj = new RequestData();

        $obj->setBuyDateMax($buyDateMax);
        $this->assertSame($buyDateMax, $obj->getBuyDateMax());
    }

    /**
     * Tests setIdentificationKey()
     *
     * @return void
     */
    public function testSetIdentificationKey(): void {

        $obj = new RequestData();

        $obj->setIdentificationKey("IdentificationKey");
        $this->assertEquals("IdentificationKey", $obj->getIdentificationKey());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RequestData();

        $this->assertNull($obj->getAnalyticCode());
        $this->assertNull($obj->getBuyDateMax());
        $this->assertNull($obj->getIdentificationKey());
    }
}
