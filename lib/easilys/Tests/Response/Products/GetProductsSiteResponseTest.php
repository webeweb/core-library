<?php

declare(strict_types=1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Response\Products;

use WBW\Library\Easilys\Model\Product;
use WBW\Library\Easilys\Response\AbstractResponse;
use WBW\Library\Easilys\Response\Products\GetProductsSiteResponse;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * GET products site response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Response\Products
 */
class GetProductsSiteResponseTest extends AbstractTestCase {

    /**
     * Test addData()
     *
     * @return void
     */
    public function testAddData(): void {

        // Set a data mock.
        $data = new Product();

        $obj = new GetProductsSiteResponse();

        $obj->addData($data);
        $this->assertSame($data, $obj->getData()[0]);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new GetProductsSiteResponse();

        $this->assertInstanceOf(AbstractResponse::class, $obj);

        $this->assertEquals([], $obj->getData());
    }
}
