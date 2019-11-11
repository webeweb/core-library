<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument\Helper;

use Exception;
use WBW\Library\Core\Argument\Exception\IntegerArgumentException;
use WBW\Library\Core\Argument\Helper\IntegerHelper;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Integer helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument\Helper
 */
class IntegerHelperTest extends AbstractTestCase {

    /**
     * Tests the parseBoolean() method.
     *
     * @return void
     */
    public function testParseBoolean() {

        $this->assertEquals(0, IntegerHelper::parseBoolean(null));
        $this->assertEquals(0, IntegerHelper::parseBoolean(false));
        $this->assertEquals(1, IntegerHelper::parseBoolean(true));
    }

    /**
     * Tests the parseString() method.
     *
     * @return void
     */
    public function testParseString() {

        $this->assertNull(IntegerHelper::parseString(null));
        $this->assertEquals(1, IntegerHelper::parseString("1"));
        $this->assertEquals(-1, IntegerHelper::parseString("-1"));
    }

    /**
     * Tests the parseString() method.
     *
     * @return void
     */
    public function testParseStringWithIntegerArgumentException() {

        try {

            IntegerHelper::parseString("1.0");
        } catch (Exception $ex) {

            $this->assertInstanceOf(IntegerArgumentException::class, $ex);
            $this->assertEquals("The argument \"1.0\" is not an integer", $ex->getMessage());
        }
    }
}
