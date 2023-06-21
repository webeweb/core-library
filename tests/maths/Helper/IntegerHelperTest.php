<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Maths\Tests\Helper;

use WBW\Library\Maths\Helper\IntegerHelper;
use WBW\Library\Maths\Tests\AbstractTestCase;

/**
 * Integer helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Maths\Tests\Helper
 */
class IntegerHelperTest extends AbstractTestCase {

    /**
     * Test factorial()
     *
     * @return void
     */
    public function testFactorial(): void {

        $this->assertNull(IntegerHelper::factorial(null));
        $this->assertNull(IntegerHelper::factorial(-1));
        $this->assertEquals(1, IntegerHelper::factorial(0));
        $this->assertEquals(1, IntegerHelper::factorial(1));
        $this->assertEquals(2, IntegerHelper::factorial(2));
        $this->assertEquals(6, IntegerHelper::factorial(3));
        $this->assertEquals(24, IntegerHelper::factorial(4));
        $this->assertEquals(120, IntegerHelper::factorial(5));
        $this->assertEquals(720, IntegerHelper::factorial(6));
        $this->assertEquals(5040, IntegerHelper::factorial(7));
        $this->assertEquals(40320, IntegerHelper::factorial(8));
        $this->assertEquals(362880, IntegerHelper::factorial(9));
        $this->assertEquals(3628800, IntegerHelper::factorial(10));
    }

    /**
     * Test summation()
     *
     * @return void
     */
    public function testSummation(): void {

        $this->assertNull(IntegerHelper::factorial(null));
        $this->assertEquals(0, IntegerHelper::summation(0));
        $this->assertEquals(1, IntegerHelper::summation(1));
        $this->assertEquals(3, IntegerHelper::summation(2));
        $this->assertEquals(6, IntegerHelper::summation(3));
        $this->assertEquals(10, IntegerHelper::summation(4));
        $this->assertEquals(15, IntegerHelper::summation(5));
        $this->assertEquals(21, IntegerHelper::summation(6));
        $this->assertEquals(28, IntegerHelper::summation(7));
        $this->assertEquals(36, IntegerHelper::summation(8));
        $this->assertEquals(45, IntegerHelper::summation(9));
        $this->assertEquals(55, IntegerHelper::summation(10));
        $this->assertEquals(5050, IntegerHelper::summation(100));
    }
}
