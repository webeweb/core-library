<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Model\Billing;

use WBW\Library\Common\Model\Billing\AccountingAccountInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Accounting account interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\Billing
 */
class AccountingAccountInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("G", AccountingAccountInterface::TYPE_GENERAL);
        $this->assertEquals("T", AccountingAccountInterface::TYPE_THIRD);
    }
}
