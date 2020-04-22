<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Validation\Status;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Validator\Status\DefaultValidationStatus;

/**
 * Default validation status test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Validation\Status
 */
class DefaultValidationStatusTest extends AbstractTestCase {

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new DefaultValidationStatus();
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
    public function testSetCode() {

        $obj = new DefaultValidationStatus();

        $obj->setCode(200);
        $this->assertEquals(200, $obj->getCode());
    }

    /**
     * Tests The setMessage() method.
     *
     * @return void
     */
    public function testSetMessage() {

        $obj = new DefaultValidationStatus();

        $obj->setMessage("message");
        $this->assertEquals("message", $obj->getMessage());
    }

    /**
     * Tests The setRuleName() method.
     *
     * @return void
     */
    public function testSetRuleName() {

        $obj = new DefaultValidationStatus();

        $obj->setRuleName("ruleName");
        $this->assertEquals("ruleName", $obj->getRuleName());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new DefaultValidationStatus();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getRuleName());
    }
}
