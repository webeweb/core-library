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
use WBW\Library\Accounting\Tests\AbstractTestCase;
use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;

/**
 * Payment choice test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Model
 */
class PaymentChoiceTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/PaymentChoiceTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new PaymentChoice();
        $obj->setLabel(BaseSerializerKeys::LABEL);

        $res = $obj->jsonSerialize();
        $this->assertCount(1, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PaymentChoice();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(PaymentChoiceInterface::class, $obj);

        $this->assertNull($obj->getLabel());
    }
}
