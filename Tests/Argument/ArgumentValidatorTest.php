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

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Argument\ArgumentValidator;
use WBW\Library\Core\Exception\Argument\ArrayArgumentException;
use WBW\Library\Core\Exception\Argument\BooleanArgumentException;
use WBW\Library\Core\Exception\Argument\DateArgumentException;
use WBW\Library\Core\Exception\Argument\DoubleArgumentException;
use WBW\Library\Core\Exception\Argument\FloatArgumentException;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Argument\IntegerArgumentException;
use WBW\Library\Core\Exception\Argument\NumberArgumentException;
use WBW\Library\Core\Exception\Argument\ObjectArgumentException;
use WBW\Library\Core\Exception\Argument\ResourceArgumentException;
use WBW\Library\Core\Exception\Argument\StringArgumentException;
use WBW\Library\Core\Exception\Argument\TimestampArgumentException;
use WBW\Library\Core\Helper\Argument\ArgumentInterface;

/**
 * Argument validator test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument
 * @final
 */
final class ArgumentValidatorTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValid() {

        try {
            ArgumentValidator::isTypeOf(null, -1);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The type \"-1\" is not implemented", $ex->getMessage());
        }

        $rsc = fopen(getcwd() . "/Tests/Argument/ArgumentValidatorTest.php", "r");

        $this->assertTrue(ArgumentValidator::isTypeOf([], ArgumentInterface::ARGUMENT_ARRAY));
        $this->assertTrue(ArgumentValidator::isTypeOf(true, ArgumentInterface::ARGUMENT_BOOLEAN));
        $this->assertTrue(ArgumentValidator::isTypeOf("2017-10-20", ArgumentInterface::ARGUMENT_DATE));
        $this->assertTrue(ArgumentValidator::isTypeOf(0.1, ArgumentInterface::ARGUMENT_DOUBLE));
        $this->assertTrue(ArgumentValidator::isTypeOf(1.0, ArgumentInterface::ARGUMENT_FLOAT));
        $this->assertTrue(ArgumentValidator::isTypeOf(1, ArgumentInterface::ARGUMENT_INTEGER));
        $this->assertTrue(ArgumentValidator::isTypeOf(2, ArgumentInterface::ARGUMENT_NUMBER));
        $this->assertTrue(ArgumentValidator::isTypeOf($this, ArgumentInterface::ARGUMENT_OBJECT));
        $this->assertTrue(ArgumentValidator::isTypeOf($rsc, ArgumentInterface::ARGUMENT_RESOURCE));
        $this->assertTrue(ArgumentValidator::isTypeOf("", ArgumentInterface::ARGUMENT_STRING));
        $this->assertTrue(ArgumentValidator::isTypeOf("2017-10-20 15:41:10", ArgumentInterface::ARGUMENT_TIMESTAMP));

        try {
            ArgumentValidator::isTypeOf(null, ArgumentInterface::ARGUMENT_ARRAY);
        } catch (Exception $ex) {
            $this->assertInstanceOf(ArrayArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not an array", $ex->getMessage());
        }

        try {
            ArgumentValidator::isTypeOf(null, ArgumentInterface::ARGUMENT_BOOLEAN);
        } catch (Exception $ex) {
            $this->assertInstanceOf(BooleanArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not a boolean", $ex->getMessage());
        }

        try {
            ArgumentValidator::isTypeOf(null, ArgumentInterface::ARGUMENT_DATE);
        } catch (Exception $ex) {
            $this->assertInstanceOf(DateArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not a date", $ex->getMessage());
        }

        try {
            ArgumentValidator::isTypeOf(null, ArgumentInterface::ARGUMENT_DOUBLE);
        } catch (Exception $ex) {
            $this->assertInstanceOf(DoubleArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not a double", $ex->getMessage());
        }

        try {
            ArgumentValidator::isTypeOf(null, ArgumentInterface::ARGUMENT_FLOAT);
        } catch (Exception $ex) {
            $this->assertInstanceOf(FloatArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not a float", $ex->getMessage());
        }

        try {
            ArgumentValidator::isTypeOf(null, ArgumentInterface::ARGUMENT_INTEGER);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IntegerArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not an integer", $ex->getMessage());
        }

        try {
            ArgumentValidator::isTypeOf(null, ArgumentInterface::ARGUMENT_NUMBER);
        } catch (Exception $ex) {
            $this->assertInstanceOf(NumberArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not a number", $ex->getMessage());
        }

        try {
            ArgumentValidator::isTypeOf(null, ArgumentInterface::ARGUMENT_OBJECT);
        } catch (Exception $ex) {
            $this->assertInstanceOf(ObjectArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not an object", $ex->getMessage());
        }

        try {
            ArgumentValidator::isTypeOf(null, ArgumentInterface::ARGUMENT_RESOURCE);
        } catch (Exception $ex) {
            $this->assertInstanceOf(ResourceArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not a resource", $ex->getMessage());
        }

        try {
            ArgumentValidator::isTypeOf(null, ArgumentInterface::ARGUMENT_STRING);
        } catch (Exception $ex) {
            $this->assertInstanceOf(StringArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not a string", $ex->getMessage());
        }

        try {
            ArgumentValidator::isTypeOf(null, ArgumentInterface::ARGUMENT_TIMESTAMP);
        } catch (Exception $ex) {
            $this->assertInstanceOf(TimestampArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not a timestamp", $ex->getMessage());
        }
    }

}
