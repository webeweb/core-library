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

namespace WBW\Library\Easilys\Tests\Response;

use WBW\Library\Easilys\Tests\AbstractTestCase;
use WBW\Library\Easilys\Tests\Fixtures\Response\TestResponse;

/**
 * Abstract response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Response
 */
class AbstractResponseTest extends AbstractTestCase {

    /**
     * Test setErrors()
     *
     * @return void
     */
    public function testSetErrors(): void {

        $obj = new TestResponse();

        $obj->setErrors(["error"]);
        $this->assertEquals(["error"], $obj->getErrors());
    }

    /**
     * Test setSuccess()
     *
     * @return void
     */
    public function testSetSuccess(): void {

        $obj = new TestResponse();

        $obj->setSuccess(true);
        $this->assertTrue($obj->getSuccess());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestResponse();

        $this->assertEquals([], $obj->getData());
        $this->assertEquals([], $obj->getErrors());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getSuccess());
    }
}
