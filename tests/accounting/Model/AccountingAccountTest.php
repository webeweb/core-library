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

use WBW\Library\Accounting\Model\AccountingAccount;
use WBW\Library\Accounting\Model\AccountingAccountInterface;
use WBW\Library\Accounting\Tests\AbstractTestCase;

/**
 * Accounting account test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Model
 */
class AccountingAccountTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AccountingAccount();

        $this->assertInstanceOf(AccountingAccountInterface::class, $obj);

        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getNumber());
        $this->assertNull($obj->getType());
    }
}