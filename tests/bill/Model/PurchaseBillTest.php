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

use JsonSerializable;
use WBW\Library\Bill\Model\BillableInterface;
use WBW\Library\Bill\Model\PurchaseBill;
use WBW\Library\Bill\Model\PurchaseBillInterface;
use WBW\Library\Bill\Tests\AbstractTestCase;

/**
 * Purchase bill test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Model
 */
class PurchaseBillTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PurchaseBill();

        $this->assertInstanceOf(PurchaseBillInterface::class, $obj);
        $this->assertInstanceOf(BillableInterface::class, $obj);
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertNull($obj->getPaymentDate());
    }
}