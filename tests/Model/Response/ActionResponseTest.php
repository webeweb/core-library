<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Response;

use WBW\Library\Core\Model\Response\ActionResponse;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Action response test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Response
 */
class ActionResponseTest extends AbstractFrameworkTestCase {

    /**
     * Tests the setNotify() method.
     *
     * @return void
     */
    public function tesSetNotify() {

        $obj = new ActionResponse();

        $obj->setNotify("notify");
        $this->assertEquals("notify", $obj->getNotify());
    }

    /**
     * Tests the setStatus() method.
     *
     * @return void
     */
    public function tesSetStatus() {

        $obj = new ActionResponse();

        $obj->setStatus(200);
        $this->assertEquals(200, $obj->getStatus());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new ActionResponse();

        $this->assertNull($obj->getNotify());
        $this->assertNull($obj->getStatus());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new ActionResponse();

        $res = ["status" => null, "notify" => null];
        $this->assertEquals($res, $obj->jsonSerialize());
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new ActionResponse();

        // ===
        $res0 = ["status" => null, "notify" => null];
        $this->assertEquals($res0, $obj->toArray());

        // ===
        $obj->setStatus(200);
        $obj->setNotify(null);
        $res1 = ["status" => 200, "notify" => null];
        $this->assertEquals($res1, $obj->toArray());

        // ===
        $obj->setStatus(null);
        $obj->setNotify("notify");
        $res2 = ["status" => null, "notify" => "notify"];
        $this->assertEquals($res2, $obj->toArray());

        // ===
        $obj->setStatus(200);
        $obj->setNotify("notify");
        $res9 = ["status" => 200, "notify" => "notify"];
        $this->assertEquals($res9, $obj->toArray());
    }

}
