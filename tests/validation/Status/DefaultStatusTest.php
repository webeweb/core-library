<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Validation\Tests\Status;

use WBW\Library\Validation\Status\DefaultStatus;
use WBW\Library\Validation\Tests\AbstractTestCase;

/**
 * Default status test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Validation\Tests\Validation\Status
 */
class DefaultStatusTest extends AbstractTestCase {

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new DefaultStatus();
        $obj->setCode(200);
        $obj->setMessage("message");
        $obj->setRuleName("ruleName");

        $res = ["code" => 200, "message" => "message", "ruleName" => "ruleName"];
        $this->assertEquals($res, $obj->jsonSerialize());
    }

    /**
     * Tests The setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new DefaultStatus();

        $obj->setCode(200);
        $this->assertEquals(200, $obj->getCode());
    }

    /**
     * Tests The setMessage() method.
     *
     * @return void
     */
    public function testSetMessage(): void {

        $obj = new DefaultStatus();

        $obj->setMessage("message");
        $this->assertEquals("message", $obj->getMessage());
    }

    /**
     * Tests The setRuleName() method.
     *
     * @return void
     */
    public function testSetRuleName(): void {

        $obj = new DefaultStatus();

        $obj->setRuleName("ruleName");
        $this->assertEquals("ruleName", $obj->getRuleName());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultStatus();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getRuleName());
    }
}
