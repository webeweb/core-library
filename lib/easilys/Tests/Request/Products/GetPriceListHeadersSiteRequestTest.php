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
use WBW\Library\Easilys\Request\Products\GetPriceListHeadersSiteRequest;
use WBW\Library\Easilys\Response\Products\GetPriceListHeadersSiteResponse;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * GET price list headers site request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Request\Products
 */
class GetPriceListHeadersSiteRequestTest extends AbstractTestCase {

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new GetPriceListHeadersSiteRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(GetPriceListHeadersSiteResponse::class, $res);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/price-list-headers/site/:idSite", GetPriceListHeadersSiteRequest::RESOURCE_PATH);

        $obj = new GetPriceListHeadersSiteRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);

        $this->assertEquals(GetPriceListHeadersSiteRequest::RESOURCE_PATH, $obj->getResourcePath());
    }
}
