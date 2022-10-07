<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Maths\Tests\Helper;

use WBW\Library\Maths\Helper\FibonacciHelper;
use WBW\Library\Maths\Tests\AbstractTestCase;

/**
 * Fibonacci helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Maths\Tests\Helper
 */
class FibonacciHelperTest extends AbstractTestCase {

    /**
     * Tests fibonacci()
     *
     * @return void
     */
    public function testFibonacci(): void {

        $this->assertEquals(0, FibonacciHelper::fibonacci(0));
        $this->assertEquals(1, FibonacciHelper::fibonacci(1));
        $this->assertEquals(1, FibonacciHelper::fibonacci(2));
        $this->assertEquals(2, FibonacciHelper::fibonacci(3));
        $this->assertEquals(3, FibonacciHelper::fibonacci(4));
        $this->assertEquals(5, FibonacciHelper::fibonacci(5));
        $this->assertEquals(8, FibonacciHelper::fibonacci(6));
        $this->assertEquals(13, FibonacciHelper::fibonacci(7));
        $this->assertEquals(21, FibonacciHelper::fibonacci(8));
        $this->assertEquals(34, FibonacciHelper::fibonacci(9));
        $this->assertEquals(55, FibonacciHelper::fibonacci(10));
    }

    /**
     * Tests fibonacci()
     *
     * @return void
     */
    public function testFibonacciWithNegative(): void {

        $this->assertEquals(0, FibonacciHelper::fibonacci(0));
        $this->assertEquals(1, FibonacciHelper::fibonacci(-1));
        $this->assertEquals(-1, FibonacciHelper::fibonacci(-2));
        $this->assertEquals(2, FibonacciHelper::fibonacci(-3));
        $this->assertEquals(-3, FibonacciHelper::fibonacci(-4));
        $this->assertEquals(5, FibonacciHelper::fibonacci(-5));
        $this->assertEquals(-8, FibonacciHelper::fibonacci(-6));
        $this->assertEquals(13, FibonacciHelper::fibonacci(-7));
        $this->assertEquals(-21, FibonacciHelper::fibonacci(-8));
        $this->assertEquals(34, FibonacciHelper::fibonacci(-9));
        $this->assertEquals(-55, FibonacciHelper::fibonacci(-10));
    }

    /**
     * Tests sequence()
     *
     * @return void
     */
    public function testSequence(): void {

        $exp = [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55];

        $this->assertEquals($exp, FibonacciHelper::sequence(10));
    }

    /**
     * Tests sequence()
     *
     * @return void
     */
    public function testSequenceWithNegative(): void {

        $exp = [0, 1, -1, 2, -3, 5, -8, 13, -21, 34, -55];

        $this->assertEquals($exp, FibonacciHelper::sequence(-10));
    }
}
