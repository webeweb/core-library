<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Helper\Argument;

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Argument\IntegerArgumentException;
use WBW\Library\Core\Helper\Argument\IntegerHelper;

/**
 * Integer helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Helper\Argument
 * @final
 */
final class IntegerHelperTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getLinesOffset() method.
     *
     * @return void
     */
    public function testGetLinesLimit() {

        $this->assertEquals(-1, IntegerHelper::getLinesLimit(-1, 300));
        $this->assertEquals(-1, IntegerHelper::getLinesLimit(0, -1));
        $this->assertEquals(-1, IntegerHelper::getLinesLimit(-1, -1));

        $this->assertEquals([0, 300], IntegerHelper::getLinesLimit(0, 300));
        $this->assertEquals([300, 300], IntegerHelper::getLinesLimit(1, 300));
        $this->assertEquals([90000, 300], IntegerHelper::getLinesLimit(300, 300));
        $this->assertEquals([90300, 300], IntegerHelper::getLinesLimit(301, 300));

        $this->assertEquals([0, 255], IntegerHelper::getLinesLimit(0, 300, 255));
        $this->assertEquals([300, 255], IntegerHelper::getLinesLimit(1, 300, 555));
        $this->assertEquals([90000, 255], IntegerHelper::getLinesLimit(300, 300, 90255));
        $this->assertEquals([90300, 255], IntegerHelper::getLinesLimit(301, 300, 90555));
    }

    /**
     * Tests the getPagesCount() method.
     *
     * @return void
     */
    public function testGetPagesCount() {

        $this->assertEquals(-1, IntegerHelper::getPagesCount(-1, 300));
        $this->assertEquals(-1, IntegerHelper::getPagesCount(0, -1));
        $this->assertEquals(-1, IntegerHelper::getPagesCount(-1, -1));

        $this->assertEquals(0, IntegerHelper::getPagesCount(0, 300));
        $this->assertEquals(1, IntegerHelper::getPagesCount(1, 300));
        $this->assertEquals(1, IntegerHelper::getPagesCount(300, 300));
        $this->assertEquals(2, IntegerHelper::getPagesCount(301, 300));
    }

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

        try {
            IntegerHelper::parseString("exception");
        } catch (Exception $ex) {
            $this->assertInstanceOf(IntegerArgumentException::class, $ex);
            $this->assertEquals("The argument \"exception\" is not an integer", $ex->getMessage());
        }

        try {
            IntegerHelper::parseString("1A");
        } catch (Exception $ex) {
            $this->assertInstanceOf(IntegerArgumentException::class, $ex);
            $this->assertEquals("The argument \"1A\" is not an integer", $ex->getMessage());
        }

        try {
            IntegerHelper::parseString("1.");
        } catch (Exception $ex) {
            $this->assertInstanceOf(IntegerArgumentException::class, $ex);
            $this->assertEquals("The argument \"1.\" is not an integer", $ex->getMessage());
        }

        try {
            IntegerHelper::parseString("1.0");
        } catch (Exception $ex) {
            $this->assertInstanceOf(IntegerArgumentException::class, $ex);
            $this->assertEquals("The argument \"1.0\" is not an integer", $ex->getMessage());
        }

        $this->assertNull(IntegerHelper::parseString(null));
        $this->assertEquals(1, IntegerHelper::parseString("1"));
    }

}
