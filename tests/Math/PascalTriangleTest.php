<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Math;

use WBW\Library\Common\Math\PascalTriangle;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Pascal's triangle test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Math
 */
class PascalTriangleTest extends AbstractTestCase {

    /**
     * Test cell()
     *
     * @return void
     */
    public function testCell(): void {

        $this->assertNull(PascalTriangle::cell(0, -1));
        $this->assertNull(PascalTriangle::cell(-1, -1));
        $this->assertNull(PascalTriangle::cell(-1, 0));

        $this->assertEquals(1, PascalTriangle::cell(0, 0));

        $this->assertEquals(1, PascalTriangle::cell(0, 1));
        $this->assertEquals(1, PascalTriangle::cell(1, 1));

        $this->assertEquals(1, PascalTriangle::cell(0, 2));
        $this->assertEquals(2, PascalTriangle::cell(1, 2));
        $this->assertEquals(1, PascalTriangle::cell(2, 2));

        $this->assertEquals(1, PascalTriangle::cell(0, 3));
        $this->assertEquals(3, PascalTriangle::cell(1, 3));
        $this->assertEquals(3, PascalTriangle::cell(2, 3));
        $this->assertEquals(1, PascalTriangle::cell(3, 3));

        $this->assertEquals(1, PascalTriangle::cell(0, 3));
        $this->assertEquals(3, PascalTriangle::cell(1, 3));
        $this->assertEquals(3, PascalTriangle::cell(2, 3));
        $this->assertEquals(1, PascalTriangle::cell(3, 3));

        $this->assertEquals(1, PascalTriangle::cell(0, 4));
        $this->assertEquals(4, PascalTriangle::cell(1, 4));
        $this->assertEquals(6, PascalTriangle::cell(2, 4));
        $this->assertEquals(4, PascalTriangle::cell(3, 4));
        $this->assertEquals(1, PascalTriangle::cell(4, 4));

        $this->assertEquals(1, PascalTriangle::cell(0, 5));
        $this->assertEquals(5, PascalTriangle::cell(1, 5));
        $this->assertEquals(10, PascalTriangle::cell(2, 5));
        $this->assertEquals(10, PascalTriangle::cell(3, 5));
        $this->assertEquals(5, PascalTriangle::cell(4, 5));
        $this->assertEquals(1, PascalTriangle::cell(5, 5));
    }

    /**
     * Test row()
     *
     * @return void
     */
    public function testRow(): void {

        $this->assertNull(PascalTriangle::row(-1));

        $this->assertEquals(1, PascalTriangle::row(0));
        $this->assertEquals(2, PascalTriangle::row(1));
        $this->assertEquals(4, PascalTriangle::row(2));
        $this->assertEquals(8, PascalTriangle::row(3));
        $this->assertEquals(16, PascalTriangle::row(4));
        $this->assertEquals(32, PascalTriangle::row(5));
    }
}
