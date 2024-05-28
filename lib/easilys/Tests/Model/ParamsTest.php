<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\Params;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Params test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class ParamsTest extends AbstractTestCase {

    /**
     * Test setSupplierOrderAutoReceipt()
     *
     * @return void
     */
    public function testSetSupplierOrderAutoReceipt(): void {

        $obj = new Params();

        $obj->setSupplierOrderAutoReceipt(true);
        $this->assertTrue($obj->getSupplierOrderAutoReceipt());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Params();

        $this->assertNull($obj->getSupplierOrderAutoReceipt());
    }
}
