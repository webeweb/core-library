<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Adoria\Tests\Serializer;

use DateTime;
use Exception;
use WBW\Library\Adoria\Model\RequestData;
use WBW\Library\Adoria\Serializer\RequestSerializer;
use WBW\Library\Adoria\Tests\AbstractTestCase;

/**
 * Request serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Adoria\Tests\Serializer
 */
class RequestSerializerTest extends AbstractTestCase {

    /**
     * Tests serializeRequestData()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeRequestData(): void {

        // Set a Request data mock.
        $requestData = new RequestData();
        $requestData->setBuyDateMax(new DateTime("2019-01-22"));
        $requestData->setIdentificationKey("identificationKey");
        $requestData->setAnalyticCode("analyticCode");

        $obj = RequestSerializer::serializeRequestData($requestData);

        $exp = [
            "AnalyticCode"      => "analyticCode",
            "BuyDateMax"        => "2019-01-22",
            "IdentificationKey" => "identificationKey",
        ];

        $this->assertEquals($exp, $obj);
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        $this->assertEquals("Y-m-d", RequestSerializer::REQUEST_DATE_FORMAT);
    }
}
