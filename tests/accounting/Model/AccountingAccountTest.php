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
use WBW\Library\Accounting\Model\AccountingAccount;
use WBW\Library\Accounting\Model\AccountingAccountInterface;
use WBW\Library\Accounting\Tests\AbstractTestCase;
use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;

/**
 * Accounting account test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Model
 */
class AccountingAccountTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/AccountingAccountTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new AccountingAccount();
        $obj->setLabel(BaseSerializerKeys::LABEL);
        $obj->setNumber(BaseSerializerKeys::NUMBER);
        $obj->setType(BaseSerializerKeys::TYPE);

        $res = $obj->jsonSerialize();
        $this->assertCount(3, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AccountingAccount();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(AccountingAccountInterface::class, $obj);

        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getNumber());
        $this->assertNull($obj->getType());
    }
}
