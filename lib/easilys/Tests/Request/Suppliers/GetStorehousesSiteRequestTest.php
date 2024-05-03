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

namespace WBW\Library\Easilys\Tests\Request\Suppliers;

use WBW\Library\Easilys\Request\AbstractRequest;
use WBW\Library\Easilys\Request\Suppliers\GetStorehousesSiteRequest;
use WBW\Library\Easilys\Response\Suppliers\GetStorehousesSiteResponse;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * GET storehouses site request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Request\Suppliers
 */
class GetStorehousesSiteRequestTest extends AbstractTestCase {

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new GetStorehousesSiteRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(GetStorehousesSiteResponse::class, $res);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/storehouses/site/:idSite", GetStorehousesSiteRequest::RESOURCE_PATH);

        $obj = new GetStorehousesSiteRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);

        $this->assertEquals(GetStorehousesSiteRequest::RESOURCE_PATH, $obj->getResourcePath());
    }
}
