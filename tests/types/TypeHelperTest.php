<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Tests;

use DateTime;
use InvalidArgumentException;
use Throwable;
use WBW\Library\Common\Exception\ArrayArgumentException;
use WBW\Library\Common\Exception\BooleanArgumentException;
use WBW\Library\Common\Exception\DateArgumentException;
use WBW\Library\Common\Exception\DoubleArgumentException;
use WBW\Library\Common\Exception\FloatArgumentException;
use WBW\Library\Common\Exception\IntegerArgumentException;
use WBW\Library\Common\Exception\NumberArgumentException;
use WBW\Library\Common\Exception\ObjectArgumentException;
use WBW\Library\Common\Exception\ResourceArgumentException;
use WBW\Library\Common\Exception\StringArgumentException;
use WBW\Library\Types\Exception\TimestampArgumentException;
use WBW\Library\Types\TypeHelper;
use WBW\Library\Types\TypeInterface;

/**
 * Type helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Tests
 */
class TypeHelperTest extends AbstractTestCase {

    /**
     * Test isTypeOf()
     *
     * @return void
     */
    public function testIsTypeOf(): void {

        $rsc = fopen(__DIR__ . "/TypeHelperTest.php", "r");

        $this->assertTrue(TypeHelper::isTypeOf([], TypeInterface::TYPE_ARRAY));
        $this->assertTrue(TypeHelper::isTypeOf(true, TypeInterface::TYPE_BOOLEAN));
        $this->assertTrue(TypeHelper::isTypeOf("2017-10-20", TypeInterface::TYPE_DATE));
        $this->assertTrue(TypeHelper::isTypeOf(0.1, TypeInterface::TYPE_DOUBLE));
        $this->assertTrue(TypeHelper::isTypeOf(1.0, TypeInterface::TYPE_FLOAT));
        $this->assertTrue(TypeHelper::isTypeOf(1, TypeInterface::TYPE_INTEGER));
        $this->assertTrue(TypeHelper::isTypeOf(2, TypeInterface::TYPE_NUMBER));
        $this->assertTrue(TypeHelper::isTypeOf($this, TypeInterface::TYPE_OBJECT));
        $this->assertTrue(TypeHelper::isTypeOf($rsc, TypeInterface::TYPE_RESOURCE));
        $this->assertTrue(TypeHelper::isTypeOf("", TypeInterface::TYPE_STRING));
        $this->assertTrue(TypeHelper::isTypeOf("2017-10-20 15:41:10", TypeInterface::TYPE_TIMESTAMP));
    }

    /**
     * Test isTypeOf()
     *
     * @return void
     */
    public function testIsTypeOfWithArrayArgumentException(): void {

        try {

            TypeHelper::isTypeOf(null, TypeInterface::TYPE_ARRAY);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ArrayArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not an array', $ex->getMessage());
        }
    }

    /**
     * Test isTypeOf()
     *
     * @return void
     */
    public function testIsTypeOfWithBooleanArgumentException(): void {

        try {

            TypeHelper::isTypeOf(null, TypeInterface::TYPE_BOOLEAN);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(BooleanArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not a boolean', $ex->getMessage());
        }
    }

    /**
     * Test isTypeOf()
     *
     * @return void
     */
    public function testIsTypeOfWithDateArgumentException(): void {

        try {

            TypeHelper::isTypeOf(null, TypeInterface::TYPE_DATE);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(DateArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not a date', $ex->getMessage());
        }
    }

    /**
     * Test isTypeOf()
     *
     * @return void
     */
    public function testIsTypeOfWithDoubleArgumentException(): void {

        try {

            TypeHelper::isTypeOf(null, TypeInterface::TYPE_DOUBLE);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(DoubleArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not a double', $ex->getMessage());
        }
    }

    /**
     * Test isTypeOf()
     *
     * @return void
     */
    public function testIsTypeOfWithFloatArgumentException(): void {

        try {

            TypeHelper::isTypeOf(null, TypeInterface::TYPE_FLOAT);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(FloatArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not a float', $ex->getMessage());
        }
    }

    /**
     * Test isTypeOf()
     *
     * @return void
     */
    public function testIsTypeOfWithIntegerArgumentException(): void {

        try {

            TypeHelper::isTypeOf(null, TypeInterface::TYPE_INTEGER);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(IntegerArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not an integer', $ex->getMessage());
        }
    }

    /**
     * Test isTypeOf()
     *
     * @return void
     */
    public function testIsTypeOfWithInvalidArgumentException(): void {

        try {

            TypeHelper::isTypeOf(null, -1);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The type "-1" is not implemented', $ex->getMessage());
        }
    }

    /**
     * Test isTypeOf()
     *
     * @return void
     */
    public function testIsTypeOfWithNumberArgumentException(): void {

        try {

            TypeHelper::isTypeOf(null, TypeInterface::TYPE_NUMBER);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(NumberArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not a number', $ex->getMessage());
        }
    }

    /**
     * Test isTypeOf()
     *
     * @return void
     */
    public function testIsTypeOfWithObjectArgumentException(): void {

        try {

            TypeHelper::isTypeOf(null, TypeInterface::TYPE_OBJECT);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ObjectArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not an object', $ex->getMessage());
        }
    }

    /**
     * Test isTypeOf()
     *
     * @return void
     */
    public function testIsTypeOfWithResourceArgumentException(): void {

        try {

            TypeHelper::isTypeOf(null, TypeInterface::TYPE_RESOURCE);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ResourceArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not a resource', $ex->getMessage());
        }
    }

    /**
     * Test isTypeOf()
     *
     * @return void
     */
    public function testIsTypeOfWithStringArgumentException(): void {

        try {

            TypeHelper::isTypeOf(null, TypeInterface::TYPE_STRING);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(StringArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not a string', $ex->getMessage());
        }
    }

    /**
     * Test isTypeOf()
     *
     * @return void
     */
    public function testIsTypeOfWithTimestampArgumentException(): void {

        try {

            TypeHelper::isTypeOf(null, TypeInterface::TYPE_TIMESTAMP);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(TimestampArgumentException::class, $ex);
            $this->assertEquals('The argument "" is not a timestamp', $ex->getMessage());
        }
    }

    /**
     * Test transform()
     *
     * @return void
     */
    public function testTransform(): void {

        $this->assertTrue(TypeHelper::transform("1", TypeInterface::TYPE_BOOLEAN));
        $this->assertInstanceOf(DateTime::class, TypeHelper::transform("2017-11-27", TypeInterface::TYPE_DATE, "Y-m-d"));
        $this->assertEquals(1, TypeHelper::transform("1", TypeInterface::TYPE_DOUBLE));
        $this->assertEquals(1, TypeHelper::transform("1", TypeInterface::TYPE_FLOAT));
        $this->assertEquals(1, TypeHelper::transform("1", TypeInterface::TYPE_INTEGER));
        $this->assertEquals("1", TypeHelper::transform("1", TypeInterface::TYPE_STRING));
        $this->assertInstanceOf(DateTime::class, TypeHelper::transform("2017-11-27 11:20:00", TypeInterface::TYPE_TIMESTAMP, "Y-m-d H:m:s"));
    }

    /**
     * Test transform()
     *
     * @return void
     */
    public function testTransformWithDateArgumentException(): void {

        try {

            TypeHelper::transform("exception", TypeInterface::TYPE_DATE, "Y-m-d");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(DateArgumentException::class, $ex);
            $this->assertEquals('The argument "exception" is not a date', $ex->getMessage());
        }
    }

    /**
     * Test transform()
     *
     * @return void
     */
    public function testTransformWithInvalidArgumentException(): void {

        try {

            TypeHelper::transform(null, TypeInterface::TYPE_ARRAY);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The type "220" is not implemented', $ex->getMessage());
        }
    }

    /**
     * Test transform()
     *
     * @return void
     */
    public function testTransformWithInvalidArgumentException104(): void {

        try {

            TypeHelper::transform(null, TypeInterface::TYPE_RESOURCE);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The type "419" is not implemented', $ex->getMessage());
        }
    }

    /**
     * Test transform()
     *
     * @return void
     */
    public function testTransformWithInvalidArgumentException116(): void {

        try {

            TypeHelper::transform(null, TypeInterface::TYPE_TIMESTAMP);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The date/time format is null", $ex->getMessage());
        }
    }

    /**
     * Test transform()
     *
     * @return void
     */
    public function testTransformWithInvalidArgumentException30(): void {

        try {

            TypeHelper::transform(null, TypeInterface::TYPE_DATE);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The date/time format is null", $ex->getMessage());
        }
    }

    /**
     * Test transform()
     *
     * @return void
     */
    public function testTransformWithInvalidArgumentException55(): void {

        try {

            TypeHelper::transform(null, TypeInterface::TYPE_OBJECT);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The type "204" is not implemented', $ex->getMessage());
        }
    }

    /**
     * Test transform()
     *
     * @return void
     */
    public function testTransformWithInvalidArgumentException73(): void {

        try {

            TypeHelper::transform(null, TypeInterface::TYPE_NUMBER);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The type "236" is not implemented', $ex->getMessage());
        }
    }

    /**
     * Test transform()
     *
     * @return void
     */
    public function testTransformWithTimestampArgumentException(): void {

        try {

            TypeHelper::transform("exception", TypeInterface::TYPE_TIMESTAMP, "Y-m-d H:m:s");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(TimestampArgumentException::class, $ex);
            $this->assertEquals('The argument "exception" is not a timestamp', $ex->getMessage());
        }
    }
}
