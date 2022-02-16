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

use WBW\Library\Accounting\Model\AccountingAccountInterface;
use WBW\Library\Accounting\Tests\AbstractTestCase;

/**
 * Accounting account interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Model
 */
class AccountingAccountInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("G", AccountingAccountInterface::TYPE_GENERAL);
        $this->assertEquals("T", AccountingAccountInterface::TYPE_THIRD);
    }
}
