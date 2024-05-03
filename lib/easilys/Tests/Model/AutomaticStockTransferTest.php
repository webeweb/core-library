<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\AutomaticStockTransfer;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Automatic stock transfer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class AutomaticStockTransferTest extends AbstractTestCase {

    /**
     * Test setFromConsumption()
     *
     * @return void
     */
    public function testSetFromConsumption(): void {

        $obj = new AutomaticStockTransfer();

        $obj->setFromConsumption(true);
        $this->assertTrue($obj->getFromConsumption());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AutomaticStockTransfer();

        $this->assertNull($obj->getFromConsumption());
    }
}
