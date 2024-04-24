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
use WBW\Library\Common\Model\Billing\SalesBill;
use WBW\Library\Common\Model\Billing\SalesBillInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Sales bill test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Model
 */
class SalesBillTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testJsonSerialize(): void {

        $obj = new SalesBill();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SalesBill();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(BillableInterface::class, $obj);
        $this->assertInstanceOf(SalesBillInterface::class, $obj);
    }
}
