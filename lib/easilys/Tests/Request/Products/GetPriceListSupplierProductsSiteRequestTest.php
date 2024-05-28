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

namespace WBW\Library\Easilys\Tests\Request\Products;

use WBW\Library\Easilys\Request\AbstractRequest;
use WBW\Library\Easilys\Request\Products\GetPriceListSupplierProductsSiteRequest;
use WBW\Library\Easilys\Response\Products\GetPriceListSupplierProductsSiteResponse;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * GET price list supplier products site request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Request\Products
 */
class GetPriceListSupplierProductsSiteRequestTest extends AbstractTestCase {

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new GetPriceListSupplierProductsSiteRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(GetPriceListSupplierProductsSiteResponse::class, $res);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/price-list-supplier-products/site/:idSite", GetPriceListSupplierProductsSiteRequest::RESOURCE_PATH);

        $obj = new GetPriceListSupplierProductsSiteRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);

        $this->assertEquals(GetPriceListSupplierProductsSiteRequest::RESOURCE_PATH, $obj->getResourcePath());
    }
}
