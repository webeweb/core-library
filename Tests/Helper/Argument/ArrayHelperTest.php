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

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Helper\Argument\ArrayHelper;

/**
 * Array helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Helper\Argument
 * @final
 */
final class ArrayHelperTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the get() method.
     *
     * @return void
     */
    public function testGet() {

        $arg = ["array" => [], "boolean" => true, "double" => 4.0, "float" => 6.0, "integer" => 9, "string" => "string"];

        $this->assertEquals([], ArrayHelper::get($arg, "array"));
        $this->assertTrue(ArrayHelper::get($arg, "boolean"));
        $this->assertEquals(4.0, ArrayHelper::get($arg, "double"));
        $this->assertEquals(6.0, ArrayHelper::get($arg, "float"));
        $this->assertEquals(9, ArrayHelper::get($arg, "integer"));
        $this->assertEquals("string", ArrayHelper::get($arg, "string"));

        $this->assertNull(ArrayHelper::get($arg, "inexistant_array"));
        $this->assertNull(ArrayHelper::get($arg, "inexistant_boolean"));
        $this->assertNull(ArrayHelper::get($arg, "inexistant_double"));
        $this->assertNull(ArrayHelper::get($arg, "inexistant_float"));
        $this->assertNull(ArrayHelper::get($arg, "inexistant_integer"));
        $this->assertNull(ArrayHelper::get($arg, "inexistant_string"));

        $this->assertEquals([], ArrayHelper::get($arg, "inexistant_array", []));
        $this->assertFalse(ArrayHelper::get($arg, "inexistant_boolean", false));
        $this->assertEquals(-4.0, ArrayHelper::get($arg, "inexistant_double", -4.0));
        $this->assertEquals(-6.0, ArrayHelper::get($arg, "inexistant_float", -6.0));
        $this->assertEquals(-9, ArrayHelper::get($arg, "inexistant_integer", -9));
        $this->assertEquals("exception", ArrayHelper::get($arg, "inexistant_string", "exception"));
    }

    /**
     * Tests the set() method.
     *
     * @return void
     */
    public function testSet() {

        $objN = [];

        ArrayHelper::set($objN, "key", null, [null]);
        $this->assertEquals([], $objN);

        $objB1 = [];

        ArrayHelper::set($objB1, "key", true, [null, false]);
        $this->assertEquals(["key" => true], $objB1);

        $objB2 = [];

        ArrayHelper::set($objB2, "key", false, [null, false]);
        $this->assertEquals([], $objB2);

        $objF1 = [];

        ArrayHelper::set($objF1, "key", 1.0, [null, 0.0]);
        $this->assertEquals(["key" => 1.0], $objF1);

        $objF2 = [];

        ArrayHelper::set($objF2, "key", 0.0, [null, 0.0]);
        $this->assertEquals([], $objF2);

        $objI1 = [];

        ArrayHelper::set($objI1, "key", 1, [null, 0]);
        $this->assertEquals(["key" => 1], $objI1);

        $objI2 = [];

        ArrayHelper::set($objI2, "key", 0, [null, 0]);
        $this->assertEquals([], $objI2);

        $objS1 = [];

        ArrayHelper::set($objS1, "key", "true", [null, "false"]);
        $this->assertEquals(["key" => "true"], $objS1);

        $objS2 = [];

        ArrayHelper::set($objS2, "key", "false", [null, "false"]);
        $this->assertEquals([], $objS2);
    }

}
