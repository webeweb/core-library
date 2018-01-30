<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Form\Validator;

use DateTime;
use Exception;
use PHPUnit_Framework_TestCase;
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
use WBW\Library\Core\Exception\Pointer\NullPointerException;
use WBW\Library\Core\Form\Validator\FormValidator;

/**
 * Form validator.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Form\Validator
 * @final

 */
final class FormValidatorTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals(15, FormValidator::FORMAT_ARRAY);
        $this->assertEquals(27, FormValidator::FORMAT_BOOLEAN);
        $this->assertEquals(44, FormValidator::FORMAT_DATE);
        $this->assertEquals(46, FormValidator::FORMAT_DOUBLE);
        $this->assertEquals(65, FormValidator::FORMAT_FLOAT);
        $this->assertEquals(98, FormValidator::FORMAT_INTEGER);
        $this->assertEquals(197, FormValidator::FORMAT_NUMBER);
        $this->assertEquals(206, FormValidator::FORMAT_OBJECT);
        $this->assertEquals(228, FormValidator::FORMAT_RESOURCE);
        $this->assertEquals(236, FormValidator::FORMAT_STRING);
        $this->assertEquals(249, FormValidator::FORMAT_TIMESTAMP);
    }

    /**
     * Tests the convert() method.
     *
     * @return void
     */
    public function testConvert() {

        try {
            FormValidator::convert(null, FormValidator::FORMAT_ARRAY);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The type \"15\" is not implemented", $ex->getMessage());
        }

        try {
            FormValidator::convert(null, FormValidator::FORMAT_DATE);
        } catch (Exception $ex) {
            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The date format is null", $ex->getMessage());
        }

        try {
            FormValidator::convert("exception", FormValidator::FORMAT_DATE, "Y-m-d");
        } catch (Exception $ex) {
            $this->assertInstanceOf(DateArgumentException::class, $ex);
            $this->assertEquals("The argument \"exception\" is not a date", $ex->getMessage());
        }

        try {
            FormValidator::convert(null, FormValidator::FORMAT_NUMBER);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The type \"197\" is not implemented", $ex->getMessage());
        }

        try {
            FormValidator::convert(null, FormValidator::FORMAT_OBJECT);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The type \"206\" is not implemented", $ex->getMessage());
        }

        try {
            FormValidator::convert(null, FormValidator::FORMAT_RESOURCE);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The type \"228\" is not implemented", $ex->getMessage());
        }

        try {
            FormValidator::convert(null, FormValidator::FORMAT_TIMESTAMP);
        } catch (Exception $ex) {
            $this->assertInstanceOf(NullPointerException::class, $ex);
            $this->assertEquals("The datetime format is null", $ex->getMessage());
        }

        try {
            FormValidator::convert("exception", FormValidator::FORMAT_TIMESTAMP, "Y-m-d H:m:s");
        } catch (Exception $ex) {
            $this->assertInstanceOf(TimestampArgumentException::class, $ex);
            $this->assertEquals("The argument \"exception\" is not a timestamp", $ex->getMessage());
        }

        $this->assertEquals(true, FormValidator::convert("1", FormValidator::FORMAT_BOOLEAN));
        $this->assertInstanceOf(DateTime::class, FormValidator::convert("2017-11-27", FormValidator::FORMAT_DATE, "Y-m-d"));
        $this->assertEquals(1, FormValidator::convert("1", FormValidator::FORMAT_DOUBLE));
        $this->assertEquals(1, FormValidator::convert("1", FormValidator::FORMAT_FLOAT));
        $this->assertEquals(1, FormValidator::convert("1", FormValidator::FORMAT_INTEGER));
        $this->assertEquals("1", FormValidator::convert("1", FormValidator::FORMAT_STRING));
        $this->assertInstanceOf(DateTime::class, FormValidator::convert("2017-11-27 11:20:00", FormValidator::FORMAT_TIMESTAMP, "Y-m-d H:m:s"));
    }

    /**
     * Tests the isValid() method.
     *
     * @return void
     */
    public function testIsValid() {

        try {
            FormValidator::isValid(null, -1);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IllegalArgumentException::class, $ex);
            $this->assertEquals("The type \"-1\" is not implemented", $ex->getMessage());
        }

        $rsc = fopen(getcwd() . "/Tests/Form/Validator/FormValidatorTest.php", "r");

        $this->assertTrue(FormValidator::isValid([], FormValidator::FORMAT_ARRAY));
        $this->assertTrue(FormValidator::isValid(true, FormValidator::FORMAT_BOOLEAN));
        $this->assertTrue(FormValidator::isValid("2017-10-20", FormValidator::FORMAT_DATE));
        $this->assertTrue(FormValidator::isValid(0.1, FormValidator::FORMAT_DOUBLE));
        $this->assertTrue(FormValidator::isValid(1.0, FormValidator::FORMAT_FLOAT));
        $this->assertTrue(FormValidator::isValid(1, FormValidator::FORMAT_INTEGER));
        $this->assertTrue(FormValidator::isValid(2, FormValidator::FORMAT_NUMBER));
        $this->assertTrue(FormValidator::isValid($this, FormValidator::FORMAT_OBJECT));
        $this->assertTrue(FormValidator::isValid($rsc, FormValidator::FORMAT_RESOURCE));
        $this->assertTrue(FormValidator::isValid("", FormValidator::FORMAT_STRING));
        $this->assertTrue(FormValidator::isValid("2017-10-20 15:41:10", FormValidator::FORMAT_TIMESTAMP));

        try {
            FormValidator::isValid(null, FormValidator::FORMAT_ARRAY);
        } catch (Exception $ex) {
            $this->assertInstanceOf(ArrayArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not an array", $ex->getMessage());
        }

        try {
            FormValidator::isValid(null, FormValidator::FORMAT_BOOLEAN);
        } catch (Exception $ex) {
            $this->assertInstanceOf(BooleanArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not a boolean", $ex->getMessage());
        }

        try {
            FormValidator::isValid(null, FormValidator::FORMAT_DATE);
        } catch (Exception $ex) {
            $this->assertInstanceOf(DateArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not a date", $ex->getMessage());
        }

        try {
            FormValidator::isValid(null, FormValidator::FORMAT_DOUBLE);
        } catch (Exception $ex) {
            $this->assertInstanceOf(DoubleArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not a double", $ex->getMessage());
        }

        try {
            FormValidator::isValid(null, FormValidator::FORMAT_FLOAT);
        } catch (Exception $ex) {
            $this->assertInstanceOf(FloatArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not a float", $ex->getMessage());
        }

        try {
            FormValidator::isValid(null, FormValidator::FORMAT_INTEGER);
        } catch (Exception $ex) {
            $this->assertInstanceOf(IntegerArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not an integer", $ex->getMessage());
        }

        try {
            FormValidator::isValid(null, FormValidator::FORMAT_NUMBER);
        } catch (Exception $ex) {
            $this->assertInstanceOf(NumberArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not a number", $ex->getMessage());
        }

        try {
            FormValidator::isValid(null, FormValidator::FORMAT_OBJECT);
        } catch (Exception $ex) {
            $this->assertInstanceOf(ObjectArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not an object", $ex->getMessage());
        }

        try {
            FormValidator::isValid(null, FormValidator::FORMAT_RESOURCE);
        } catch (Exception $ex) {
            $this->assertInstanceOf(ResourceArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not a resource", $ex->getMessage());
        }

        try {
            FormValidator::isValid(null, FormValidator::FORMAT_STRING);
        } catch (Exception $ex) {
            $this->assertInstanceOf(StringArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not a string", $ex->getMessage());
        }

        try {
            FormValidator::isValid(null, FormValidator::FORMAT_TIMESTAMP);
        } catch (Exception $ex) {
            $this->assertInstanceOf(TimestampArgumentException::class, $ex);
            $this->assertEquals("The argument \"\" is not a timestamp", $ex->getMessage());
        }
    }

}
