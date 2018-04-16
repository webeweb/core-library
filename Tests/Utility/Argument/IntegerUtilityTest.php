<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility\Argument;

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Argument\IntegerArgumentException;
use WBW\Library\Core\Utility\Argument\IntegerUtility;

/**
 * Integer utility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility\Argument
 * @final
 */
final class IntegerUtilityTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the parseBoolean() method.
     *
     * @return void
     */
    public function testParseBoolean() {

        $this->assertEquals(0, IntegerUtility::parseBoolean(null));
        $this->assertEquals(0, IntegerUtility::parseBoolean(false));
        $this->assertEquals(1, IntegerUtility::parseBoolean(true));
    }

    /**
     * Tests the parseString() method.
     *
     * @return void
     */
    public function testParseString() {

        try {
            IntegerUtility::parseString("exception");
        } catch (Exception $ex) {
            $this->assertInstanceOf(IntegerArgumentException::class, $ex);
            $this->assertEquals("The argument \"exception\" is not an integer", $ex->getMessage());
        }

        try {
            IntegerUtility::parseString("1A");
        } catch (Exception $ex) {
            $this->assertInstanceOf(IntegerArgumentException::class, $ex);
            $this->assertEquals("The argument \"1A\" is not an integer", $ex->getMessage());
        }

        try {
            IntegerUtility::parseString("1.");
        } catch (Exception $ex) {
            $this->assertInstanceOf(IntegerArgumentException::class, $ex);
            $this->assertEquals("The argument \"1.\" is not an integer", $ex->getMessage());
        }

        try {
            IntegerUtility::parseString("1.0");
        } catch (Exception $ex) {
            $this->assertInstanceOf(IntegerArgumentException::class, $ex);
            $this->assertEquals("The argument \"1.0\" is not an integer", $ex->getMessage());
        }

        $this->assertNull(IntegerUtility::parseString(null));
        $this->assertEquals(1, IntegerUtility::parseString("1"));
    }

}
