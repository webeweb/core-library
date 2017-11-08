<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Form\Validator;

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

		$this->assertEquals(15, FormValidator::FORMAT_ARRAY, "The constant FORMAT_ARRAY does not return the expecetd value");
		$this->assertEquals(27, FormValidator::FORMAT_BOOLEAN, "The constant FORMAT_BOOLEAN does not return the expecetd value");
		$this->assertEquals(44, FormValidator::FORMAT_DATE, "The constant FORMAT_DATE does not return the expecetd value");
		$this->assertEquals(46, FormValidator::FORMAT_DOUBLE, "The constant FORMAT_DOUBLE does not return the expecetd value");
		$this->assertEquals(65, FormValidator::FORMAT_FLOAT, "The constant FORMAT_FLOAT does not return the expecetd value");
		$this->assertEquals(98, FormValidator::FORMAT_INTEGER, "The constant FORMAT_INTEGER does not return the expecetd value");
		$this->assertEquals(197, FormValidator::FORMAT_NUMBER, "The constant FORMAT_NUMBER does not return the expecetd value");
		$this->assertEquals(206, FormValidator::FORMAT_OBJECT, "The constant FORMAT_OBJECT does not return the expecetd value");
		$this->assertEquals(228, FormValidator::FORMAT_RESOURCE, "The constant FORMAT_RESOURCE does not return the expecetd value");
		$this->assertEquals(236, FormValidator::FORMAT_STRING, "The constant FORMAT_STRING does not return the expecetd value");
		$this->assertEquals(249, FormValidator::FORMAT_TIMESTAMP, "The constant FORMAT_TIMESTAMP does not return the expecetd value");
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
			$this->assertInstanceOf(IllegalArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
			$this->assertEquals("The type \"-1\" is not implemented", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
		}

		$rsc = fopen(getcwd() . "/Tests/Form/Validator/FormValidatorTest.php", "r");

		$this->assertTrue(FormValidator::isValid([], FormValidator::FORMAT_ARRAY), "The method isValid() does not return the expected value with an array");
		$this->assertTrue(FormValidator::isValid(true, FormValidator::FORMAT_BOOLEAN), "The method isValid() does not return the expected value with a boolean");
		$this->assertTrue(FormValidator::isValid("2017-10-20", FormValidator::FORMAT_DATE), "The method isValid() does not return the expected value with a date");
		$this->assertTrue(FormValidator::isValid(0.1, FormValidator::FORMAT_DOUBLE), "The method isValid() does not return the expected value with a double");
		$this->assertTrue(FormValidator::isValid(1.0, FormValidator::FORMAT_FLOAT), "The method isValid() does not return the expected value with a float");
		$this->assertTrue(FormValidator::isValid(1, FormValidator::FORMAT_INTEGER), "The method isValid() does not return the expected value with an integer");
		$this->assertTrue(FormValidator::isValid(2, FormValidator::FORMAT_NUMBER), "The method isValid() does not return the expected value with a number");
		$this->assertTrue(FormValidator::isValid($this, FormValidator::FORMAT_OBJECT), "The method isValid() does not return the expected value with an object");
		$this->assertTrue(FormValidator::isValid($rsc, FormValidator::FORMAT_RESOURCE), "The method isValid() does not return the expected value with a resource");
		$this->assertTrue(FormValidator::isValid("", FormValidator::FORMAT_STRING), "The method isValid() does not return the expected value with a string");
		$this->assertTrue(FormValidator::isValid("2017-10-20 15:41:10", FormValidator::FORMAT_TIMESTAMP), "The method isValid() does not return the expected value with a timestamp");

		try {
			FormValidator::isValid(null, FormValidator::FORMAT_ARRAY);
		} catch (Exception $ex) {
			$this->assertInstanceOf(ArrayArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
			$this->assertEquals("The argument \"\" is not an array", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
		}

		try {
			FormValidator::isValid(null, FormValidator::FORMAT_BOOLEAN);
		} catch (Exception $ex) {
			$this->assertInstanceOf(BooleanArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
			$this->assertEquals("The argument \"\" is not a boolean", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
		}

		try {
			FormValidator::isValid(null, FormValidator::FORMAT_DATE);
		} catch (Exception $ex) {
			$this->assertInstanceOf(DateArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
			$this->assertEquals("The argument \"\" is not a date", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
		}

		try {
			FormValidator::isValid(null, FormValidator::FORMAT_DOUBLE);
		} catch (Exception $ex) {
			$this->assertInstanceOf(DoubleArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
			$this->assertEquals("The argument \"\" is not a double", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
		}

		try {
			FormValidator::isValid(null, FormValidator::FORMAT_FLOAT);
		} catch (Exception $ex) {
			$this->assertInstanceOf(FloatArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
			$this->assertEquals("The argument \"\" is not a float", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
		}

		try {
			FormValidator::isValid(null, FormValidator::FORMAT_INTEGER);
		} catch (Exception $ex) {
			$this->assertInstanceOf(IntegerArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
			$this->assertEquals("The argument \"\" is not an integer", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
		}

		try {
			FormValidator::isValid(null, FormValidator::FORMAT_NUMBER);
		} catch (Exception $ex) {
			$this->assertInstanceOf(NumberArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
			$this->assertEquals("The argument \"\" is not a number", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
		}

		try {
			FormValidator::isValid(null, FormValidator::FORMAT_OBJECT);
		} catch (Exception $ex) {
			$this->assertInstanceOf(ObjectArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
			$this->assertEquals("The argument \"\" is not an object", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
		}

		try {
			FormValidator::isValid(null, FormValidator::FORMAT_RESOURCE);
		} catch (Exception $ex) {
			$this->assertInstanceOf(ResourceArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
			$this->assertEquals("The argument \"\" is not a resource", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
		}

		try {
			FormValidator::isValid(null, FormValidator::FORMAT_STRING);
		} catch (Exception $ex) {
			$this->assertInstanceOf(StringArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
			$this->assertEquals("The argument \"\" is not a string", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
		}

		try {
			FormValidator::isValid(null, FormValidator::FORMAT_TIMESTAMP);
		} catch (Exception $ex) {
			$this->assertInstanceOf(TimestampArgumentException::class, $ex, "The method isValid() does not throw the expected exception");
			$this->assertEquals("The argument \"\" is not a timestamp", $ex->getMessage(), "The method getMessage() does not return the expecetd string");
		}
	}

}
