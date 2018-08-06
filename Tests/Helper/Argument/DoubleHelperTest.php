<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Helper\Argument;

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Argument\DoubleArgumentException;
use WBW\Library\Core\Helper\Argument\DoubleHelper;

/**
 * Double helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Helper\Argument
 * @final
 */
final class DoubleHelperTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the parseString() method.
     *
     * @return void
     */
    public function testParseString() {

        try {
            DoubleHelper::parseString("exception");
        } catch (Exception $ex) {
            $this->assertInstanceOf(DoubleArgumentException::class, $ex);
            $this->assertEquals("The argument \"exception\" is not a double", $ex->getMessage());
        }

        try {
            DoubleHelper::parseString("1A");
        } catch (Exception $ex) {
            $this->assertInstanceOf(DoubleArgumentException::class, $ex);
            $this->assertEquals("The argument \"1A\" is not a double", $ex->getMessage());
        }

        $this->assertNull(DoubleHelper::parseString(null));
        $this->assertEquals(1.0, DoubleHelper::parseString("1"));
        $this->assertEquals(1.0, DoubleHelper::parseString("1."));
        $this->assertEquals(1.0, DoubleHelper::parseString("1.0"));
    }

}
