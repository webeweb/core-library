<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument;

use DateTime;
use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Argument\ArgumentConverter;
use WBW\Library\Core\Exception\Argument\DateArgumentException;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Argument\TimestampArgumentException;
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\Core\Helper\Argument\ArgumentInterface;

/**
 * Argument converter test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument
 * @final
 */
final class ArgumentConverterTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the convert() method.
     *
     * @return void
     */
    public function testConvert() {

        try {
            ArgumentConverter::convert(null, ArgumentInterface::ARGUMENT_ARRAY);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The type \"63\" is not implemented", $ex->getMessage());
        }

        try {
            ArgumentConverter::convert(null, ArgumentInterface::ARGUMENT_DATE);
        } catch (Exception $ex) {
            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The date format is null", $ex->getMessage());
        }

        try {
            ArgumentConverter::convert("exception", ArgumentInterface::ARGUMENT_DATE, "Y-m-d");
        } catch (Exception $ex) {
            $this->assertInstanceOf(DateArgumentException::class, $ex);
            $this->assertEquals("The argument \"exception\" is not a date", $ex->getMessage());
        }

        try {
            ArgumentConverter::convert(null, ArgumentInterface::ARGUMENT_NUMBER);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The type \"73\" is not implemented", $ex->getMessage());
        }

        try {
            ArgumentConverter::convert(null, ArgumentInterface::ARGUMENT_OBJECT);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The type \"55\" is not implemented", $ex->getMessage());
        }

        try {
            ArgumentConverter::convert(null, ArgumentInterface::ARGUMENT_RESOURCE);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The type \"104\" is not implemented", $ex->getMessage());
        }

        try {
            ArgumentConverter::convert(null, ArgumentInterface::ARGUMENT_TIMESTAMP);
        } catch (Exception $ex) {
            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The datetime format is null", $ex->getMessage());
        }

        try {
            ArgumentConverter::convert("exception", ArgumentInterface::ARGUMENT_TIMESTAMP, "Y-m-d H:m:s");
        } catch (Exception $ex) {
            $this->assertInstanceOf(TimestampArgumentException::class, $ex);
            $this->assertEquals("The argument \"exception\" is not a timestamp", $ex->getMessage());
        }

        $this->assertTrue(ArgumentConverter::convert("1", ArgumentInterface::ARGUMENT_BOOLEAN));
        $this->assertInstanceOf(DateTime::class, ArgumentConverter::convert("2017-11-27", ArgumentInterface::ARGUMENT_DATE, "Y-m-d"));
        $this->assertEquals(1, ArgumentConverter::convert("1", ArgumentInterface::ARGUMENT_DOUBLE));
        $this->assertEquals(1, ArgumentConverter::convert("1", ArgumentInterface::ARGUMENT_FLOAT));
        $this->assertEquals(1, ArgumentConverter::convert("1", ArgumentInterface::ARGUMENT_INTEGER));
        $this->assertEquals("1", ArgumentConverter::convert("1", ArgumentInterface::ARGUMENT_STRING));
        $this->assertInstanceOf(DateTime::class, ArgumentConverter::convert("2017-11-27 11:20:00", ArgumentInterface::ARGUMENT_TIMESTAMP, "Y-m-d H:m:s"));
    }

}
