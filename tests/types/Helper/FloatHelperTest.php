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
use WBW\Library\Types\Exception\FloatArgumentException;
use WBW\Library\Types\Helper\FloatHelper;
use WBW\Library\Types\Tests\AbstractTestCase;

/**
 * Float helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Types\Tests\Helper
 */
class FloatHelperTest extends AbstractTestCase {

    /**
     * Tests the parseString() method.
     *
     * @return void
     */
    public function testParseString(): void {

        $this->assertNull(FloatHelper::parseString(null));
        $this->assertEquals(1.0, FloatHelper::parseString("1"));
        $this->assertEquals(1.0, FloatHelper::parseString("1."));
        $this->assertEquals(1.0, FloatHelper::parseString("1.0"));
        $this->assertEquals(-1.0, FloatHelper::parseString("-1"));
        $this->assertEquals(-1.0, FloatHelper::parseString("-1."));
        $this->assertEquals(-1.0, FloatHelper::parseString("-1.0"));
    }

    /**
     * Tests the parseString() method.
     *
     * @return void
     */
    public function testParseStringWithFloatArgumentException(): void {

        try {

            FloatHelper::parseString("1A");
        } catch (Exception $ex) {

            $this->assertInstanceOf(FloatArgumentException::class, $ex);
            $this->assertEquals('The argument "1A" is not a float', $ex->getMessage());
        }
    }
}
