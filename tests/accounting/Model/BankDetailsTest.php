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
use WBW\Library\Accounting\Model\BankDetails;
use WBW\Library\Accounting\Model\BankDetailsInterface;
use WBW\Library\Accounting\Serializer\SerializerKeys;
use WBW\Library\Accounting\Tests\AbstractTestCase;

/**
 * Bank details test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Model
 */
class BankDetailsTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/BankDetailsTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new BankDetails();
        $obj->setAccountNumber(SerializerKeys::ACCOUNT_NUMBER);
        $obj->setBankCode(SerializerKeys::BANK_CODE);
        $obj->setBankDomiciliation(SerializerKeys::BANK_DOMICILIATION);
        $obj->setBankName(SerializerKeys::BANK_NAME);
        $obj->setBic(SerializerKeys::BIC);
        $obj->setBranchCode(SerializerKeys::BRANCH_CODE);
        $obj->setIban(SerializerKeys::IBAN);
        $obj->setOwner(SerializerKeys::OWNER);
        $obj->setRibKey(SerializerKeys::RIB_KEY);

        $res = $obj->jsonSerialize();
        $this->assertCount(9, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests setAccountNumber()
     *
     * @return void
     */
    public function testSetAccountNumber(): void {

        $obj = new BankDetails();

        $obj->setAccountNumber("accountNumber");
        $this->assertEquals("accountNumber", $obj->getAccountNumber());
    }

    /**
     * Tests setBankCode()
     *
     * @return void
     */
    public function testSetBankCode(): void {

        $obj = new BankDetails();

        $obj->setBankCode("bankCode");
        $this->assertEquals("bankCode", $obj->getBankCode());
    }

    /**
     * Tests setBankDomiciliation()
     *
     * @return void
     */
    public function testSetBankDomiciliation(): void {

        $obj = new BankDetails();

        $obj->setBankDomiciliation("bankDomiciliation");
        $this->assertEquals("bankDomiciliation", $obj->getBankDomiciliation());
    }

    /**
     * Tests setBankName()
     *
     * @return void
     */
    public function testSetBankName(): void {

        $obj = new BankDetails();

        $obj->setBankName("bankName");
        $this->assertEquals("bankName", $obj->getBankName());
    }

    /**
     * Tests setBic()
     *
     * @return void
     */
    public function testSetBic(): void {

        $obj = new BankDetails();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Tests setBranchCode()
     *
     * @return void
     */
    public function testSetBranchCode(): void {

        $obj = new BankDetails();

        $obj->setBranchCode("branchCode");
        $this->assertEquals("branchCode", $obj->getBranchCode());
    }

    /**
     * Tests setIban()
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new BankDetails();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Tests setOwner()
     *
     * @return void
     */
    public function testSetOwner(): void {

        $obj = new BankDetails();

        $obj->setOwner("owner");
        $this->assertEquals("owner", $obj->getOwner());
    }

    /**
     * Tests setRibKey()
     *
     * @return void
     */
    public function testSetRibKey(): void {

        $obj = new BankDetails();

        $obj->setRibKey("ribKey");
        $this->assertEquals("ribKey", $obj->getRibKey());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BankDetails();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(BankDetailsInterface::class, $obj);

        $this->assertNull($obj->getAccountNumber());
        $this->assertNull($obj->getBankCode());
        $this->assertNull($obj->getBankDomiciliation());
        $this->assertNull($obj->getBankName());
        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getBranchCode());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getOwner());
        $this->assertNull($obj->getRibKey());
    }
}
