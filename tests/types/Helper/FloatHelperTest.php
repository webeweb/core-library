<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Tests\Helper;

use Exception;
use InvalidArgumentException;
use WBW\Library\Types\Exception\FloatArgumentException;
use WBW\Library\Types\Helper\FloatHelper;
use WBW\Library\Types\Tests\AbstractTestCase;

/**
 * Float helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Tests\Helper
 */
class FloatHelperTest extends AbstractTestCase {

    /**
     * Tests calcPercent()
     *
     * @return void
     */
    public function testCalcPercent(): void {

        $this->assertEquals(25, FloatHelper::calcPercent(12.5, 50));
        $this->assertEquals(25, FloatHelper::calcPercent(25, 100));
        $this->assertEquals(25, FloatHelper::calcPercent(50, 200));
        $this->assertEquals(25, FloatHelper::calcPercent(100, 400));
        $this->assertEquals(25, FloatHelper::calcPercent(200, 800));
        $this->assertEquals(25, FloatHelper::calcPercent(250, 1000));
    }

    /**
     * Tests calcPercent()
     *
     * @return void
     */
    public function testCalcPercentWithInvalidArgumentException(): void {

        try {

            FloatHelper::calcPercent(0, 0);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The divider must be greater than zero", $ex->getMessage());
        }
    }

    /**
     * Tests parseString()
     *
     * @return void
     */
    public function testParseString(): void {

        $this->assertNull(FloatHelper::parseString(null));
        $this->assertEquals(1.0, FloatHelper::parseString("1"));
        $this->assertEquals(1.0, FloatHelper::parseString("1."));
        $this->assertEquals(1.0, FloatHelper::parseString("1.0"));
        $this->assertEquals(-1.0, FloatHelper::parseString("-1"));
        $this->assertEquals(-1.0, FloatHelper::parseString("-1."));
        $this->assertEquals(-1.0, FloatHelper::parseString("-1.0"));
    }

    /**
     * Tests parseString()
     *
     * @return void
     */
    public function testParseStringWithFloatArgumentException(): void {

        try {

            FloatHelper::parseString("1A");
        } catch (Exception $ex) {

            $this->assertInstanceOf(FloatArgumentException::class, $ex);
            $this->assertEquals('The argument "1A" is not a float', $ex->getMessage());
        }
    }

    /**
     * Tests usortCallback()
     *
     * @return void
     */
    public function testUsortCallable(): void {

        $obj = FloatHelper::usortCallback();
        $this->assertIsCallable($obj);

        $this->assertEquals(-1, $obj(0.1, 0.2));
        $this->assertEquals(0, $obj(0.2, 0.2));
        $this->assertEquals(1, $obj(0.2, 0.1));

        $this->assertEquals(-1, $obj(null, 0.2));
        $this->assertEquals(0, $obj(null, null));
        $this->assertEquals(1, $obj(0.2, null));
    }

    /**
     * Tests usortCallback()
     *
     * @return void
     */
    public function testUsortCallableWithAsc(): void {

        $obj = FloatHelper::usortCallback(false);
        $this->assertIsCallable($obj);

        $this->assertEquals(1, $obj(0.1, 0.2));
        $this->assertEquals(0, $obj(0.2, 0.2));
        $this->assertEquals(-1, $obj(0.2, 0.1));

        $this->assertEquals(1, $obj(null, 0.2));
        $this->assertEquals(0, $obj(null, null));
        $this->assertEquals(-1, $obj(0.2, null));
    }
}
