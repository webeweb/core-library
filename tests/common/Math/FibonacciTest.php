<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Math;

use WBW\Library\Common\Math\Fibonacci;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Fibonacci test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Math
 */
class FibonacciTest extends AbstractTestCase {

    /**
     * Test fibonacci()
     *
     * @return void
     */
    public function testFibonacci(): void {

        $this->assertEquals(0, Fibonacci::fibonacci(0));
        $this->assertEquals(1, Fibonacci::fibonacci(1));
        $this->assertEquals(1, Fibonacci::fibonacci(2));
        $this->assertEquals(2, Fibonacci::fibonacci(3));
        $this->assertEquals(3, Fibonacci::fibonacci(4));
        $this->assertEquals(5, Fibonacci::fibonacci(5));
        $this->assertEquals(8, Fibonacci::fibonacci(6));
        $this->assertEquals(13, Fibonacci::fibonacci(7));
        $this->assertEquals(21, Fibonacci::fibonacci(8));
        $this->assertEquals(34, Fibonacci::fibonacci(9));
        $this->assertEquals(55, Fibonacci::fibonacci(10));
    }

    /**
     * Test fibonacci()
     *
     * @return void
     */
    public function testFibonacciWithNegative(): void {

        $this->assertEquals(0, Fibonacci::fibonacci(0));
        $this->assertEquals(1, Fibonacci::fibonacci(-1));
        $this->assertEquals(-1, Fibonacci::fibonacci(-2));
        $this->assertEquals(2, Fibonacci::fibonacci(-3));
        $this->assertEquals(-3, Fibonacci::fibonacci(-4));
        $this->assertEquals(5, Fibonacci::fibonacci(-5));
        $this->assertEquals(-8, Fibonacci::fibonacci(-6));
        $this->assertEquals(13, Fibonacci::fibonacci(-7));
        $this->assertEquals(-21, Fibonacci::fibonacci(-8));
        $this->assertEquals(34, Fibonacci::fibonacci(-9));
        $this->assertEquals(-55, Fibonacci::fibonacci(-10));
    }

    /**
     * Test sequence()
     *
     * @return void
     */
    public function testSequence(): void {

        $exp = [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55];

        $this->assertEquals($exp, Fibonacci::sequence(10));
    }

    /**
     * Test sequence()
     *
     * @return void
     */
    public function testSequenceWithNegative(): void {

        $exp = [0, 1, -1, 2, -3, 5, -8, 13, -21, 34, -55];

        $this->assertEquals($exp, Fibonacci::sequence(-10));
    }
}
