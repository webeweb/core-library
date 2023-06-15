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

use WBW\Library\Maths\Helper\PascalTriangleHelper;
use WBW\Library\Maths\Tests\AbstractTestCase;

/**
 * Pascal's triangle helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Maths\Tests\Helper
 */
class PascalTriangleHelperTest extends AbstractTestCase {

    /**
     * Test cell()
     *
     * @return void
     */
    public function testCell(): void {

        $this->assertNull(PascalTriangleHelper::cell(0, -1));
        $this->assertNull(PascalTriangleHelper::cell(-1, -1));
        $this->assertNull(PascalTriangleHelper::cell(-1, 0));

        $this->assertEquals(1, PascalTriangleHelper::cell(0, 0));

        $this->assertEquals(1, PascalTriangleHelper::cell(0, 1));
        $this->assertEquals(1, PascalTriangleHelper::cell(1, 1));

        $this->assertEquals(1, PascalTriangleHelper::cell(0, 2));
        $this->assertEquals(2, PascalTriangleHelper::cell(1, 2));
        $this->assertEquals(1, PascalTriangleHelper::cell(2, 2));

        $this->assertEquals(1, PascalTriangleHelper::cell(0, 3));
        $this->assertEquals(3, PascalTriangleHelper::cell(1, 3));
        $this->assertEquals(3, PascalTriangleHelper::cell(2, 3));
        $this->assertEquals(1, PascalTriangleHelper::cell(3, 3));

        $this->assertEquals(1, PascalTriangleHelper::cell(0, 3));
        $this->assertEquals(3, PascalTriangleHelper::cell(1, 3));
        $this->assertEquals(3, PascalTriangleHelper::cell(2, 3));
        $this->assertEquals(1, PascalTriangleHelper::cell(3, 3));

        $this->assertEquals(1, PascalTriangleHelper::cell(0, 4));
        $this->assertEquals(4, PascalTriangleHelper::cell(1, 4));
        $this->assertEquals(6, PascalTriangleHelper::cell(2, 4));
        $this->assertEquals(4, PascalTriangleHelper::cell(3, 4));
        $this->assertEquals(1, PascalTriangleHelper::cell(4, 4));

        $this->assertEquals(1, PascalTriangleHelper::cell(0, 5));
        $this->assertEquals(5, PascalTriangleHelper::cell(1, 5));
        $this->assertEquals(10, PascalTriangleHelper::cell(2, 5));
        $this->assertEquals(10, PascalTriangleHelper::cell(3, 5));
        $this->assertEquals(5, PascalTriangleHelper::cell(4, 5));
        $this->assertEquals(1, PascalTriangleHelper::cell(5, 5));
    }

    /**
     * Test row()
     *
     * @return void
     */
    public function testRow(): void {

        $this->assertNull(PascalTriangleHelper::row(-1));

        $this->assertEquals(1, PascalTriangleHelper::row(0));
        $this->assertEquals(2, PascalTriangleHelper::row(1));
        $this->assertEquals(4, PascalTriangleHelper::row(2));
        $this->assertEquals(8, PascalTriangleHelper::row(3));
        $this->assertEquals(16, PascalTriangleHelper::row(4));
        $this->assertEquals(32, PascalTriangleHelper::row(5));
    }
}
