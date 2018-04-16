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
use WBW\Library\Core\Utility\Argument\BooleanUtility;

/**
 * Boolean utility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility\Argument
 * @final
 */
final class BooleanUtilityTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the parseString() method.
     *
     * @return void
     */
    public function testParseString() {

        $this->assertFalse(BooleanUtility::parseString(null));
        $this->assertFalse(BooleanUtility::parseString(""));
        $this->assertTrue(BooleanUtility::parseString("1"));
        $this->assertTrue(BooleanUtility::parseString("O"));
        $this->assertTrue(BooleanUtility::parseString("o"));
        $this->assertTrue(BooleanUtility::parseString("OK"));
        $this->assertTrue(BooleanUtility::parseString("ok"));
        $this->assertTrue(BooleanUtility::parseString("OUI"));
        $this->assertTrue(BooleanUtility::parseString("oui"));
        $this->assertTrue(BooleanUtility::parseString("TRUE"));
        $this->assertTrue(BooleanUtility::parseString("true"));
        $this->assertTrue(BooleanUtility::parseString("Y"));
        $this->assertTrue(BooleanUtility::parseString("y"));
        $this->assertTrue(BooleanUtility::parseString("YES"));
        $this->assertTrue(BooleanUtility::parseString("yes"));
    }

}
