<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Adoria\Serializer;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Adoria\Model\RequestData;
use WBW\Library\Core\ThirdParty\Adoria\Serializer\RequestSerializer;

/**
 * Request serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Adoria\Serializer
 */
class RequestSerializerTest extends AbstractTestCase {

    /**
     * Tests the serializeRequestData() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSerializeRequestData() {

        // Set a Request data mock.
        $requestData = new RequestData();
        $requestData->setBuyDateMax(new DateTime("2019-01-22"));
        $requestData->setIdentificationKey("identificationKey");
        $requestData->setAnalyticCode("analyticCode");

        $obj = RequestSerializer::serializeRequestData($requestData);

        $res = [
            "AnalyticCode"      => "analyticCode",
            "BuyDateMax"        => "2019-01-22",
            "IdentificationKey" => "identificationKey",
        ];
        $this->assertEquals($res, $obj);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor() {

        $this->assertEquals("Y-m-d", RequestSerializer::REQUEST_DATE_FORMAT);
    }
}
