<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Validator;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Validator\TestAbstractStatus;
use WBW\Library\Common\Validator\StatusInterface;

/**
 * Abstract status test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Validator
 */
class AbstractStatusTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new TestAbstractStatus();
        $obj->setCode(200);
        $obj->setMessage("message");
        $obj->setRuleName("ruleName");

        $exp = ["code" => 200, "message" => "message", "ruleName" => "ruleName"];

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Test setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new TestAbstractStatus();

        $obj->setCode(200);
        $this->assertEquals(200, $obj->getCode());
    }

    /**
     * Test setMessage() method.
     *
     * @return void
     */
    public function testSetMessage(): void {

        $obj = new TestAbstractStatus();

        $obj->setMessage("message");
        $this->assertEquals("message", $obj->getMessage());
    }

    /**
     * Test setRuleName() method.
     *
     * @return void
     */
    public function testSetRuleName(): void {

        $obj = new TestAbstractStatus();

        $obj->setRuleName("ruleName");
        $this->assertEquals("ruleName", $obj->getRuleName());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestAbstractStatus();

        $this->assertInstanceOf(StatusInterface::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getRuleName());
    }
}
