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
use WBW\Library\Core\Exception\Argument\FloatArgumentException;
use WBW\Library\Core\Helper\Argument\FloatHelper;

/**
 * Float helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Helper\Argument
 * @final
 */
final class FloatHelperTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the parseString() method.
     *
     * @return void
     */
    public function testParseString() {

        try {
            FloatHelper::parseString("exception");
        } catch (Exception $ex) {
            $this->assertInstanceOf(FloatArgumentException::class, $ex);
            $this->assertEquals("The argument \"exception\" is not a float", $ex->getMessage());
        }

        try {
            FloatHelper::parseString("1A");
        } catch (Exception $ex) {
            $this->assertInstanceOf(FloatArgumentException::class, $ex);
            $this->assertEquals("The argument \"1A\" is not a float", $ex->getMessage());
        }

        $this->assertNull(FloatHelper::parseString(null));
        $this->assertEquals(1.0, FloatHelper::parseString("1"));
        $this->assertEquals(1.0, FloatHelper::parseString("1."));
        $this->assertEquals(1.0, FloatHelper::parseString("1.0"));
    }

}
