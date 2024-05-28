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

namespace WBW\Library\Easilys\Tests\Response\Suppliers;

use WBW\Library\Easilys\Model\Storehouse;
use WBW\Library\Easilys\Response\AbstractResponse;
use WBW\Library\Easilys\Response\Suppliers\GetStorehousesSiteResponse;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * GET storehouses site response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Response\Suppliers
 */
class GetStorehousesSiteResponseTest extends AbstractTestCase {

    /**
     * Test addData()
     *
     * @return void
     */
    public function testAddData(): void {

        // Set a data mock.
        $data = new Storehouse();

        $obj = new GetStorehousesSiteResponse();

        $obj->addData($data);
        $this->assertSame($data, $obj->getData()[0]);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new GetStorehousesSiteResponse();

        $this->assertInstanceOf(AbstractResponse::class, $obj);

        $this->assertEquals([], $obj->getData());
    }
}
