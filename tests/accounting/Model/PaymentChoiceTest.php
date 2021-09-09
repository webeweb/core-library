<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Tests\Model;

use JsonSerializable;
use WBW\Library\Accounting\Model\PaymentChoice;
use WBW\Library\Accounting\Model\PaymentChoiceInterface;
use WBW\Library\Accounting\Serializer\SerializerKeys;
use WBW\Library\Accounting\Tests\AbstractTestCase;

/**
 * Payment choice test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Model
 */
class PaymentChoiceTest extends AbstractTestCase {

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/PaymentChoiceTest.jsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new PaymentChoice();
        $obj->setLabel(SerializerKeys::LABEL);

        $res = $obj->jsonSerialize();
        $this->assertCount(1, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PaymentChoice();

        $this->assertInstanceOf(PaymentChoiceInterface::class, $obj);
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertNull($obj->getLabel());
    }
}
