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

use Throwable;
use WBW\Library\Common\Exception\DoubleArgumentException;
use WBW\Library\Common\Helper\DoubleHelper;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Double helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Helper
 */
class DoubleHelperTest extends AbstractTestCase {

    /**
     * Test parseString()
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
     * Test parseString()
     *
     * @return void
     */
    public function testParseStringWithFloatArgumentException(): void {

        try {

            DoubleHelper::parseString("1A");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(DoubleArgumentException::class, $ex);
            $this->assertEquals('The argument "1A" is not a double', $ex->getMessage());
        }
    }
}
