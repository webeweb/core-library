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

use Exception;
use WBW\Library\Types\Exception\DoubleArgumentException;
use WBW\Library\Types\Helper\DoubleHelper;
use WBW\Library\Types\Tests\AbstractTestCase;

/**
 * Double helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Tests\Helper
 */
class DoubleHelperTest extends AbstractTestCase {

    /**
     * Tests parseString()
     *
     * @return void
     */
    public function testParseString(): void {

        $this->assertNull(DoubleHelper::parseString(null));
        $this->assertEquals(1.0, DoubleHelper::parseString("1"));
        $this->assertEquals(1.0, DoubleHelper::parseString("1."));
        $this->assertEquals(1.0, DoubleHelper::parseString("1.0"));
        $this->assertEquals(-1.0, DoubleHelper::parseString("-1"));
        $this->assertEquals(-1.0, DoubleHelper::parseString("-1."));
        $this->assertEquals(-1.0, DoubleHelper::parseString("-1.0"));
    }

    /**
     * Tests parseString()
     *
     * @return void
     */
    public function testParseStringWithFloatArgumentException(): void {

        try {

            DoubleHelper::parseString("1A");
        } catch (Exception $ex) {

            $this->assertInstanceOf(DoubleArgumentException::class, $ex);
            $this->assertEquals('The argument "1A" is not a double', $ex->getMessage());
        }
    }
}
