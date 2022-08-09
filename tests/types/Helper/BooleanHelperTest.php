<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Tests\Helper;

use WBW\Library\Types\Helper\BooleanHelper;
use WBW\Library\Types\Tests\AbstractTestCase;

/**
 * Boolean helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Tests\Helper
 */
class BooleanHelperTest extends AbstractTestCase {

    /**
     * Tests parseInteger()
     *
     * @return void
     */
    public function testParseInteger(): void {

        $this->assertFalse(BooleanHelper::parseInteger(null));
        $this->assertFalse(BooleanHelper::parseInteger(0));
        $this->assertTrue(BooleanHelper::parseInteger(1));
    }

    /**
     * Tests parseString()
     *
     * @return void
     */
    public function testParseString(): void {

        $this->assertFalse(BooleanHelper::parseString(null));
        $this->assertFalse(BooleanHelper::parseString(""));
        $this->assertTrue(BooleanHelper::parseString("1"));
        $this->assertTrue(BooleanHelper::parseString("O"));
        $this->assertTrue(BooleanHelper::parseString("o"));
        $this->assertTrue(BooleanHelper::parseString("OK"));
        $this->assertTrue(BooleanHelper::parseString("ok"));
        $this->assertTrue(BooleanHelper::parseString("OUI"));
        $this->assertTrue(BooleanHelper::parseString("oui"));
        $this->assertTrue(BooleanHelper::parseString("TRUE"));
        $this->assertTrue(BooleanHelper::parseString("true"));
        $this->assertTrue(BooleanHelper::parseString("Y"));
        $this->assertTrue(BooleanHelper::parseString("y"));
        $this->assertTrue(BooleanHelper::parseString("YES"));
        $this->assertTrue(BooleanHelper::parseString("yes"));
    }

    /**
     * Tests usortCallback()
     *
     * @return void
     */
    public function testUsortCallable(): void {

        $obj = BooleanHelper::usortCallback();
        $this->assertIsCallable($obj);

        $this->assertEquals(-1, $obj(false, true));
        $this->assertEquals(0, $obj(true, true));
        $this->assertEquals(1, $obj(true, false));

        $this->assertEquals(-1, $obj(null, true));
        $this->assertEquals(0, $obj(null, null));
        $this->assertEquals(1, $obj(true, null));
    }

    /**
     * Tests usortCallback()
     *
     * @return void
     */
    public function testUsortCallableWithAsc(): void {

        $obj = BooleanHelper::usortCallback(false);
        $this->assertIsCallable($obj);

        $this->assertEquals(1, $obj(false, true));
        $this->assertEquals(0, $obj(true, true));
        $this->assertEquals(-1, $obj(true, false));

        $this->assertEquals(1, $obj(null, true));
        $this->assertEquals(0, $obj(null, null));
        $this->assertEquals(-1, $obj(true, null));
    }
}
