<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Adoria\Model;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Adoria\Model\RequestData;

/**
 * Request data test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Adoria\Model
 */
class RequestDataTest extends AbstractTestCase {

    /**
     * Tests the setAnalyticCode() method.
     *
     * @return void
     */
    public function testSetAnalyticCode() {

        $obj = new RequestData();

        $obj->setAnalyticCode("AnalyticCode");
        $this->assertEquals("AnalyticCode", $obj->getAnalyticCode());
    }

    /**
     * Tests the setBuyDateMax() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetBuyDateMax() {

        // Set an Buy max date mock.
        $buyDateMax = new DateTime();

        $obj = new RequestData();

        $obj->setBuyDateMax($buyDateMax);
        $this->assertSame($buyDateMax, $obj->getBuyDateMax());
    }

    /**
     * Tests the setIdentificationKey() method.
     *
     * @return void
     */
    public function testSetIdentificationKey() {

        $obj = new RequestData();

        $obj->setIdentificationKey("IdentificationKey");
        $this->assertEquals("IdentificationKey", $obj->getIdentificationKey());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new RequestData();

        $this->assertNull($obj->getAnalyticCode());
        $this->assertNull($obj->getBuyDateMax());
        $this->assertNull($obj->getIdentificationKey());
    }
}
