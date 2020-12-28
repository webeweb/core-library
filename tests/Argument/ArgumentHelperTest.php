<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument;

use DateTime;
use Exception;
use InvalidArgumentException;
use WBW\Library\Core\Argument\ArgumentHelper;
use WBW\Library\Core\Argument\ArgumentInterface;
use WBW\Library\Core\Argument\Exception\ArrayArgumentException;
use WBW\Library\Core\Argument\Exception\BooleanArgumentException;
use WBW\Library\Core\Argument\Exception\DateArgumentException;
use WBW\Library\Core\Argument\Exception\DoubleArgumentException;
use WBW\Library\Core\Argument\Exception\FloatArgumentException;
use WBW\Library\Core\Argument\Exception\IntegerArgumentException;
use WBW\Library\Core\Argument\Exception\NumberArgumentException;
use WBW\Library\Core\Argument\Exception\ObjectArgumentException;
use WBW\Library\Core\Argument\Exception\ResourceArgumentException;
use WBW\Library\Core\Argument\Exception\StringArgumentException;
use WBW\Library\Core\Argument\Exception\TimestampArgumentException;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Argument helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument
 */
class ArgumentHelperTest extends AbstractTestCase {

    /**
     * Tests the convert() method.
     *
     * @return void
     */
    public function testConvert(): void {

        $this->assertTrue(ArgumentHelper::convert("1", ArgumentInterface::ARGUMENT_BOOLEAN));
        $this->assertInstanceOf(DateTime::class, ArgumentHelper::convert("2017-11-27", ArgumentInterface::ARGUMENT_DATE, "Y-m-d"));
        $this->assertEquals(1, ArgumentHelper::convert("1", ArgumentInterface::ARGUMENT_DOUBLE));
        $this->assertEquals(1, ArgumentHelper::convert("1", ArgumentInterface::ARGUMENT_FLOAT));
        $this->assertEquals(1, ArgumentHelper::convert("1", ArgumentInterface::ARGUMENT_INTEGER));
        $this->assertEquals("1", ArgumentHelper::convert("1", ArgumentInterface::ARGUMENT_STRING));
        $this->assertInstanceOf(DateTime::class, ArgumentHelper::convert("2017-11-27 11:20:00", ArgumentInterface::ARGUMENT_TIMESTAMP, "Y-m-d H:m:s"));
    }

    /**
     * Tests the convert() method.
     *
     * @return void
     */
    public function testConvertWithDateArgumentException(): void {

        try {

            ArgumentHelper::convert("exception", ArgumentInterface::ARGUMENT_DATE, "Y-m-d");
        } catch (Exception $ex) {

            $this->assertInstanceOf(DateArgumentException::class, $ex);
            $this->assertEquals('The argument "exception" is not a date', $ex->getMessage());
        }
    }

    /**
     * Tests the convert() method.
     *
     * @return void
     */
    public function testConvertWithInvalidArgumentException(): void {

        try {

            ArgumentHelper::convert(null, ArgumentInterface::ARGUMENT_ARRAY);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The type "220" is not implemented', $ex->getMessage());
        }
    }

    /**
     * Tests the convert() method.
     *
     * @return void
     */
    public function testConvertWithInvalidArgumentException104(): void {

        try {

            ArgumentHelper::convert(null, ArgumentInterface::ARGUMENT_RESOURCE);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The type "419" is not implemented', $ex->getMessage());
        }
    }

    /**
     * Tests the convert() method.
     *
     * @return void
     */
    public function testConvertWithInvalidArgumentException116(): void {

        try {

            ArgumentHelper::convert(null, ArgumentInterface::ARGUMENT_TIMESTAMP);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The datetime format is null", $ex->getMessage());
        }
    }

    /**
     * Tests the convert() method.
     *
     * @return void
     */
    public function testConvertWithInvalidArgumentException30(): void {

        try {

            ArgumentHelper::convert(null, ArgumentInterface::ARGUMENT_DATE);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The date format is null", $ex->getMessage());
        }
    }

    /**
     * Tests the convert() method.
     *
     * @return void
     */
    public function testConvertWithInvalidArgumentException55(): void {

        try {

            ArgumentHelper::convert(null, ArgumentInterface::ARGUMENT_OBJECT);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The type "204" is not implemented', $ex->getMessage());
        }
    }

    /**
     * Tests the convert() method.
     *
     * @return void
     */
    public function testConvertWithInvalidArgumentException73(): void {

        try {

            ArgumentHelper::convert(null, ArgumentInterface::ARGUMENT_NUMBER);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The type "236" is not implemented', $ex->getMessage());
        }
    }

    /**
     * Tests the convert() method.
     *
     * @return void
     */
    public function testConvertWithTimestampArgumentException(): void {

        try {

            ArgumentHelper::convert("exception", ArgumentInterface::ARGUMENT_TIMESTAMP, "Y-m-d H:m:s");
        } catch (Exception $ex) {

            $this->assertInstanceOf(TimestampArgumentException::class, $ex);
            $this->assertEquals('The argument "exception" is not a timestamp', $ex->getMessage());
        }
    }

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValid(): void {

        $rsc = fopen(getcwd() . "/tests/Argument/ArgumentHelperTest.php", "r");

        $this->assertTrue(ArgumentHelper::isTypeOf([], ArgumentInterface::ARGUMENT_ARRAY));
        $this->assertTrue(ArgumentHelper::isTypeOf(true, ArgumentInterface::ARGUMENT_BOOLEAN));
        $this->assertTrue(ArgumentHelper::isTypeOf("2017-10-20", ArgumentInterface::ARGUMENT_DATE));
        $this->assertTrue(ArgumentHelper::isTypeOf(0.1, ArgumentInterface::ARGUMENT_DOUBLE));
        $this->assertTrue(ArgumentHelper::isTypeOf(1.0, ArgumentInterface::ARGUMENT_FLOAT));
        $this->assertTrue(ArgumentHelper::isTypeOf(1, ArgumentInterface::ARGUMENT_INTEGER));
        $this->assertTrue(ArgumentHelper::isTypeOf(2, ArgumentInterface::ARGUMENT_NUMBER));
        $this->assertTrue(ArgumentHelper::isTypeOf($this, ArgumentInterface::ARGUMENT_OBJECT));
        $this->assertTrue(ArgumentHelper::isTypeOf($rsc, ArgumentInterface::ARGUMENT_RESOURCE));
        $this->assertTrue(ArgumentHelper::isTypeOf("", ArgumentInterface::ARGUMENT_STRING));
        $this->assertTrue(ArgumentHelper::isTypeOf("2017-10-20 15:41:10", ArgumentInterface::ARGUMENT_TIMESTAMP));
    }

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValidWithArrayArgumentException(): void {

        try {

            ArgumentHelper::isTypeOf(null, ArgumentInterface::ARGUMENT_ARRAY);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ArrayArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not an array', $ex->getMessage());
        }
    }

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValidWithBooleanArgumentException(): void {

        try {

            ArgumentHelper::isTypeOf(null, ArgumentInterface::ARGUMENT_BOOLEAN);
        } catch (Exception $ex) {

            $this->assertInstanceOf(BooleanArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not a boolean', $ex->getMessage());
        }
    }

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValidWithDateArgumentException(): void {

        try {

            ArgumentHelper::isTypeOf(null, ArgumentInterface::ARGUMENT_DATE);
        } catch (Exception $ex) {

            $this->assertInstanceOf(DateArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not a date', $ex->getMessage());
        }
    }

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValidWithDoubleArgumentException(): void {

        try {

            ArgumentHelper::isTypeOf(null, ArgumentInterface::ARGUMENT_DOUBLE);
        } catch (Exception $ex) {

            $this->assertInstanceOf(DoubleArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not a double', $ex->getMessage());
        }
    }

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValidWithFloatArgumentException(): void {

        try {

            ArgumentHelper::isTypeOf(null, ArgumentInterface::ARGUMENT_FLOAT);
        } catch (Exception $ex) {

            $this->assertInstanceOf(FloatArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not a float', $ex->getMessage());
        }
    }

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValidWithIntegerArgumentException(): void {

        try {

            ArgumentHelper::isTypeOf(null, ArgumentInterface::ARGUMENT_INTEGER);
        } catch (Exception $ex) {

            $this->assertInstanceOf(IntegerArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not an integer', $ex->getMessage());
        }
    }

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValidWithInvalidArgumentException(): void {

        try {

            ArgumentHelper::isTypeOf(null, -1);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The type "-1" is not implemented', $ex->getMessage());
        }
    }

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValidWithNumberArgumentException(): void {

        try {

            ArgumentHelper::isTypeOf(null, ArgumentInterface::ARGUMENT_NUMBER);
        } catch (Exception $ex) {

            $this->assertInstanceOf(NumberArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not a number', $ex->getMessage());
        }
    }

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValidWithObjectArgumentException(): void {

        try {

            ArgumentHelper::isTypeOf(null, ArgumentInterface::ARGUMENT_OBJECT);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ObjectArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not an object', $ex->getMessage());
        }
    }

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValidWithResourceArgumentException(): void {

        try {

            ArgumentHelper::isTypeOf(null, ArgumentInterface::ARGUMENT_RESOURCE);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ResourceArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not a resource', $ex->getMessage());
        }
    }

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValidWithStringArgumentException(): void {

        try {

            ArgumentHelper::isTypeOf(null, ArgumentInterface::ARGUMENT_STRING);
        } catch (Exception $ex) {

            $this->assertInstanceOf(StringArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not a string', $ex->getMessage());
        }
    }

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValidWithTimestampArgumentException(): void {

        try {

            ArgumentHelper::isTypeOf(null, ArgumentInterface::ARGUMENT_TIMESTAMP);
        } catch (Exception $ex) {

            $this->assertInstanceOf(TimestampArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not a timestamp', $ex->getMessage());
        }
    }
}
