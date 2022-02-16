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

use WBW\Library\Accounting\Factory\AccountingAccountFactory;
use WBW\Library\Accounting\Model\AccountingAccount;
use WBW\Library\Accounting\Tests\AbstractTestCase;

/**
 * Accounting account factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Factory
 */
class AccountingAccountFactoryTest extends AbstractTestCase {

    /**
     * Tests copy()
     *
     * @return void
     */
    public function testCopy(): void {

        $obj = new AccountingAccount();
        $obj->setLabel("label");
        $obj->setNumber("number");
        $obj->setType("type");

        $res = AccountingAccountFactory::copy($obj, new AccountingAccount());
        $this->assertEquals($obj->getLabel(), $res->getLabel());
        $this->assertEquals($obj->getNumber(), $res->getNumber());
        $this->assertEquals($obj->getType(), $res->getType());
    }
}
