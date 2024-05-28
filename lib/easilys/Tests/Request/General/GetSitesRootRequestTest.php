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

namespace WBW\Library\Easilys\Tests\Request\General;

use WBW\Library\Easilys\Request\AbstractRequest;
use WBW\Library\Easilys\Request\General\GetSitesRootRequest;
use WBW\Library\Easilys\Response\General\GetSitesResponse;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * GET sites root request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Request\General
 */
class GetSitesRootRequestTest extends AbstractTestCase {

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new GetSitesRootRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(GetSitesResponse::class, $res);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/sites/root/:id", GetSitesRootRequest::RESOURCE_PATH);

        $obj = new GetSitesRootRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);

        $this->assertEquals(GetSitesRootRequest::RESOURCE_PATH, $obj->getResourcePath());
    }
}
