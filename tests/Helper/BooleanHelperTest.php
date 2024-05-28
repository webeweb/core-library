<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Helper;

use WBW\Library\Common\Helper\BooleanHelper;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Boolean helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Helper
 */
class BooleanHelperTest extends AbstractTestCase {

    /**
     * Test parseInteger()
     *
     * @return void
     */
    public function testParseInteger(): void {

        $this->assertFalse(BooleanHelper::parseInteger(null));
        $this->assertFalse(BooleanHelper::parseInteger(0));
        $this->assertTrue(BooleanHelper::parseInteger(1));
    }

    /**
     * Test parseString()
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
     * Test usortCallback()
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
     * Test usortCallback()
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
