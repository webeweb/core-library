<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Tests\Factory;

use WBW\Library\Accounting\Factory\BankDetailsFactory;
use WBW\Library\Accounting\Model\BankDetails;
use WBW\Library\Accounting\Tests\AbstractTestCase;

/**
 * Bank details factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Factory
 */
class BankDetailsFactoryTest extends AbstractTestCase {

    /**
     * Tests copy()
     *
     * @return void
     */
    public function testCopy(): void {

        $obj = new BankDetails();
        $obj->setAccountNumber("accountNumber");
        $obj->setBankCode("bankCode");
        $obj->setBankDomiciliation("bankDomiciliation");
        $obj->setBankName("bankName");
        $obj->setBic("bic");
        $obj->setBranchCode("branchCode");
        $obj->setIban("iban");
        $obj->setOwner("owner");
        $obj->setRibKey("ribKey");

        $res = BankDetailsFactory::copy($obj, new BankDetails());
        $this->assertEquals($obj->getAccountNumber(), $res->getAccountNumber());
        $this->assertEquals($obj->getBankCode(), $res->getBankCode());
        $this->assertEquals($obj->getBankDomiciliation(), $res->getBankDomiciliation());
        $this->assertEquals($obj->getBankName(), $res->getBankName());
        $this->assertEquals($obj->getBic(), $res->getBic());
        $this->assertEquals($obj->getBranchCode(), $res->getBranchCode());
        $this->assertEquals($obj->getIban(), $res->getIban());
        $this->assertEquals($obj->getOwner(), $res->getOwner());
        $this->assertEquals($obj->getRibKey(), $res->getRibKey());
    }
}
