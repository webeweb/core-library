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

namespace WBW\Library\Easilys\Tests\Request;

use WBW\Library\Easilys\Tests\AbstractTestCase;
use WBW\Library\Easilys\Tests\Fixtures\Request\TestAbstractRequest;

/**
 * Abstract request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Request
 */
class AbstractRequestTest extends AbstractTestCase {

    /**
     * Test addParam()
     *
     * @return void
     */
    public function testAddParam(): void {

        $obj = new TestAbstractRequest();

        $obj->addParam("k", "v");
        $this->assertEquals(["k" => "v"], $obj->getParams());
    }

    /**
     * Test getMethod()
     *
     * @return void
     */
    public function testGetMethod(): void {

        $obj = new TestAbstractRequest();

        $this->assertEquals("GET", $obj->getMethod());
    }

    /**
     * Test serializeRequest()
     *
     * @return void
     */
    public function testSerializeRequest(): void {

        $obj = new TestAbstractRequest();

        $this->assertEquals([], $obj->serializeRequest());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestAbstractRequest();

        $this->assertEquals([], $obj->getParams());
    }
}
