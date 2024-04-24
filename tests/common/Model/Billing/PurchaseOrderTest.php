<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Model\Billing;

use JsonSerializable;
use Throwable;
use WBW\Library\Common\Model\Billing\BillableInterface;
use WBW\Library\Common\Model\Billing\PurchaseOrder;
use WBW\Library\Common\Model\Billing\PurchaseOrderInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Purchase order test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @packageWBW\Library\Common\Tests\Model\Billing
 */
class PurchaseOrderTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testJsonSerialize(): void {

        $obj = new PurchaseOrder();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PurchaseOrder();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(BillableInterface::class, $obj);
        $this->assertInstanceOf(PurchaseOrderInterface::class, $obj);
    }
}
