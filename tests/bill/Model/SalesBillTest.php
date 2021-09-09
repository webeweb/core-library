<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Tests\Model;

use WBW\Library\Bill\Model\BillableInterface;
use WBW\Library\Bill\Model\SalesBill;
use WBW\Library\Bill\Model\SalesBillInterface;
use WBW\Library\Bill\Tests\AbstractTestCase;

/**
 * Sales bill test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Model
 */
class SalesBillTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SalesBill();

        $this->assertInstanceOf(BillableInterface::class, $obj);
        $this->assertInstanceOf(SalesBillInterface::class, $obj);
    }
}