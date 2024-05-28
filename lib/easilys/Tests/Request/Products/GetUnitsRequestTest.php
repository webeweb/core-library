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
use WBW\Library\Easilys\Request\Products\GetUnitsRequest;
use WBW\Library\Easilys\Response\Products\GetUnitsResponse;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * GET units request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Request\Products
 */
class GetUnitsRequestTest extends AbstractTestCase {

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new GetUnitsRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(GetUnitsResponse::class, $res);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/units", GetUnitsRequest::RESOURCE_PATH);

        $obj = new GetUnitsRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);

        $this->assertEquals(GetUnitsRequest::RESOURCE_PATH, $obj->getResourcePath());
    }
}
