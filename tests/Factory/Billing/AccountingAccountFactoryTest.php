<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Factory\Billing;

use WBW\Library\Common\Factory\Billing\AccountingAccountFactory;
use WBW\Library\Common\Model\Billing\AccountingAccount;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Accounting account factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Factory\Billing
 */
class AccountingAccountFactoryTest extends AbstractTestCase {

    /**
     * Test copy()
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
