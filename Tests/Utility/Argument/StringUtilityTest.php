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

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * String utility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility\Argument
 * @final
 */
final class StringUtilityTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the parseArray() method.
     *
     * @return void
     */
    public function testParseArray() {

        $arg1 = ["exception" => null, "id" => "id", "class" => "class"];
        $res1 = "id=\"id\" class=\"class\"";
        $this->assertEquals($res1, StringUtility::parseArray($arg1));

        $arg2 = ["exception" => null, "id" => "    id   ", "class" => " class "];
        $res2 = "id=\"id\" class=\"class\"";
        $this->assertEquals($res2, StringUtility::parseArray($arg2));

        $arg3 = ["exception" => null, "id" => "id", "class" => ["class1", "class2", "class3   class4"]];
        $res3 = "id=\"id\" class=\"class1 class2 class3 class4\"";
        $this->assertEquals($res3, StringUtility::parseArray($arg3));
    }

    /**
     * Tests the parseBoolean() method.
     *
     * @return void
     */
    public function testParseBoolean() {

        $this->assertEquals("false", StringUtility::parseBoolean(null));
        $this->assertEquals("false", StringUtility::parseBoolean(false));
        $this->assertEquals("true", StringUtility::parseBoolean(true));
    }

    /**
     * Tests the replace() method.
     *
     * @return void
     */
    public function testReplace() {

        $this->assertEquals("Hello %name% !", StringUtility::replace("Hello %name% !", [], []));
        $this->assertEquals("Hello %world% !", StringUtility::replace("Hello %name% !", ["name"], ["world"]));
        $this->assertEquals("Hello world !", StringUtility::replace("Hello %name% !", ["%name%"], ["world"]));
    }

    /**
     * Tests the removeAccents() method.
     *
     * @return void
     */
    public function testRemoveAccents() {

        $this->assertEquals("a", StringUtility::removeAccents("à"));
        $this->assertEquals("a", StringUtility::removeAccents("á"));
        $this->assertEquals("a", StringUtility::removeAccents("â"));
        $this->assertEquals("a", StringUtility::removeAccents("ã"));
        $this->assertEquals("a", StringUtility::removeAccents("ä"));
        $this->assertEquals("c", StringUtility::removeAccents("ç"));
        $this->assertEquals("e", StringUtility::removeAccents("è"));
        $this->assertEquals("e", StringUtility::removeAccents("é"));
        $this->assertEquals("e", StringUtility::removeAccents("ê"));
        $this->assertEquals("e", StringUtility::removeAccents("ë"));
        $this->assertEquals("i", StringUtility::removeAccents("ì"));
        $this->assertEquals("i", StringUtility::removeAccents("í"));
        $this->assertEquals("i", StringUtility::removeAccents("î"));
        $this->assertEquals("i", StringUtility::removeAccents("ï"));
        $this->assertEquals("n", StringUtility::removeAccents("ñ"));
        $this->assertEquals("o", StringUtility::removeAccents("ò"));
        $this->assertEquals("o", StringUtility::removeAccents("ó"));
        $this->assertEquals("o", StringUtility::removeAccents("ô"));
        $this->assertEquals("o", StringUtility::removeAccents("õ"));
        $this->assertEquals("o", StringUtility::removeAccents("ö"));
        $this->assertEquals("u", StringUtility::removeAccents("ù"));
        $this->assertEquals("u", StringUtility::removeAccents("ú"));
        $this->assertEquals("u", StringUtility::removeAccents("û"));
        $this->assertEquals("u", StringUtility::removeAccents("ü"));
        $this->assertEquals("y", StringUtility::removeAccents("ý"));
        $this->assertEquals("y", StringUtility::removeAccents("ÿ"));
        $this->assertEquals("A", StringUtility::removeAccents("À"));
        $this->assertEquals("A", StringUtility::removeAccents("Á"));
        $this->assertEquals("A", StringUtility::removeAccents("Â"));
        $this->assertEquals("A", StringUtility::removeAccents("Ã"));
        $this->assertEquals("A", StringUtility::removeAccents("Ä"));
        $this->assertEquals("C", StringUtility::removeAccents("Ç"));
        $this->assertEquals("E", StringUtility::removeAccents("È"));
        $this->assertEquals("E", StringUtility::removeAccents("É"));
        $this->assertEquals("E", StringUtility::removeAccents("Ê"));
        $this->assertEquals("E", StringUtility::removeAccents("Ë"));
        $this->assertEquals("I", StringUtility::removeAccents("Ì"));
        $this->assertEquals("I", StringUtility::removeAccents("Í"));
        $this->assertEquals("I", StringUtility::removeAccents("Î"));
        $this->assertEquals("I", StringUtility::removeAccents("Ï"));
        $this->assertEquals("N", StringUtility::removeAccents("Ñ"));
        $this->assertEquals("O", StringUtility::removeAccents("Ò"));
        $this->assertEquals("O", StringUtility::removeAccents("Ó"));
        $this->assertEquals("O", StringUtility::removeAccents("Ô"));
        $this->assertEquals("O", StringUtility::removeAccents("Õ"));
        $this->assertEquals("O", StringUtility::removeAccents("Ö"));
        $this->assertEquals("U", StringUtility::removeAccents("Ù"));
        $this->assertEquals("U", StringUtility::removeAccents("Ú"));
        $this->assertEquals("U", StringUtility::removeAccents("Û"));
        $this->assertEquals("U", StringUtility::removeAccents("Ü"));
        $this->assertEquals("Y", StringUtility::removeAccents("Ý"));
    }

}
