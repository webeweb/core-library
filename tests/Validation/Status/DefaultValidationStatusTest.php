<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Validation\Status;

use WBW\Library\Core\Tests\Validation\AbstractValidationTest;
use WBW\Library\Core\Validation\Status\DefaultValidationStatus;

/**
 * Default validation status test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Validation\Status
 * @final
 */
final class DefaultValidationStatusTest extends AbstractValidationTest {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultValidationStatus();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getRuleName());
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
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new DefaultValidationStatus();

        // ===
        $res0 = ["code" => null, "message" => null, "ruleName" => null];
        $this->assertEquals($res0, $obj->toArray());

        // ===
        $obj->setCode(200);
        $obj->setMessage(null);
        $res1 = ["code" => 200, "message" => null, "ruleName" => null];
        $this->assertEquals($res1, $obj->toArray());

        // ===
        $obj->setCode(null);
        $obj->setMessage("message");
        $res2 = ["code" => null, "message" => "message", "ruleName" => null];
        $this->assertEquals($res2, $obj->toArray());

        // ===
        $obj->setMessage(null);
        $obj->setRuleName("ruleName");
        $res3 = ["code" => null, "message" => null, "ruleName" => "ruleName"];
        $this->assertEquals($res3, $obj->toArray());

        // ===
        $obj->setCode(200);
        $obj->setMessage("message");
        $obj->setRuleName("ruleName");
        $res9 = ["code" => 200, "message" => "message", "ruleName" => "ruleName"];
        $this->assertEquals($res9, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new DefaultValidationStatus();

        $res = ["code" => null, "message" => null, "ruleName" => null];
        $this->assertEquals($res, $obj->jsonSerialize());
    }

}
