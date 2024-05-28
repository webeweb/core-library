<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Math;

use WBW\Library\Common\Math\Integer;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Integer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Math
 */
class IntegerTest extends AbstractTestCase {

    /**
     * Test factorial()
     *
     * @return void
     */
    public function testFactorial(): void {

        $this->assertNull(Integer::factorial(null));
        $this->assertNull(Integer::factorial(-1));
        $this->assertEquals(1, Integer::factorial(0));
        $this->assertEquals(1, Integer::factorial(1));
        $this->assertEquals(2, Integer::factorial(2));
        $this->assertEquals(6, Integer::factorial(3));
        $this->assertEquals(24, Integer::factorial(4));
        $this->assertEquals(120, Integer::factorial(5));
        $this->assertEquals(720, Integer::factorial(6));
        $this->assertEquals(5040, Integer::factorial(7));
        $this->assertEquals(40320, Integer::factorial(8));
        $this->assertEquals(362880, Integer::factorial(9));
        $this->assertEquals(3628800, Integer::factorial(10));
    }

    /**
     * Test summation()
     *
     * @return void
     */
    public function testSummation(): void {

        $this->assertNull(Integer::summation(null));
        $this->assertEquals(0, Integer::summation(0));
        $this->assertEquals(1, Integer::summation(1));
        $this->assertEquals(3, Integer::summation(2));
        $this->assertEquals(6, Integer::summation(3));
        $this->assertEquals(10, Integer::summation(4));
        $this->assertEquals(15, Integer::summation(5));
        $this->assertEquals(21, Integer::summation(6));
        $this->assertEquals(28, Integer::summation(7));
        $this->assertEquals(36, Integer::summation(8));
        $this->assertEquals(45, Integer::summation(9));
        $this->assertEquals(55, Integer::summation(10));
        $this->assertEquals(5050, Integer::summation(100));
    }
}
