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

use WBW\Library\Maths\Helper\PascalsTriangleHelper;
use WBW\Library\Maths\Tests\AbstractTestCase;

/**
 * Pascal's triangle helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Maths\Tests\Helper
 */
class PascalsTriangleHelperTest extends AbstractTestCase {

    /**
     * Test cell()
     *
     * @return void
     */
    public function testCell(): void {

        $this->assertNull(PascalsTriangleHelper::cell(0, -1));
        $this->assertNull(PascalsTriangleHelper::cell(-1, -1));
        $this->assertNull(PascalsTriangleHelper::cell(-1, 0));

        $this->assertEquals(1, PascalsTriangleHelper::cell(0, 0));

        $this->assertEquals(1, PascalsTriangleHelper::cell(0, 1));
        $this->assertEquals(1, PascalsTriangleHelper::cell(1, 1));

        $this->assertEquals(1, PascalsTriangleHelper::cell(0, 2));
        $this->assertEquals(2, PascalsTriangleHelper::cell(1, 2));
        $this->assertEquals(1, PascalsTriangleHelper::cell(2, 2));

        $this->assertEquals(1, PascalsTriangleHelper::cell(0, 3));
        $this->assertEquals(3, PascalsTriangleHelper::cell(1, 3));
        $this->assertEquals(3, PascalsTriangleHelper::cell(2, 3));
        $this->assertEquals(1, PascalsTriangleHelper::cell(3, 3));

        $this->assertEquals(1, PascalsTriangleHelper::cell(0, 3));
        $this->assertEquals(3, PascalsTriangleHelper::cell(1, 3));
        $this->assertEquals(3, PascalsTriangleHelper::cell(2, 3));
        $this->assertEquals(1, PascalsTriangleHelper::cell(3, 3));

        $this->assertEquals(1, PascalsTriangleHelper::cell(0, 4));
        $this->assertEquals(4, PascalsTriangleHelper::cell(1, 4));
        $this->assertEquals(6, PascalsTriangleHelper::cell(2, 4));
        $this->assertEquals(4, PascalsTriangleHelper::cell(3, 4));
        $this->assertEquals(1, PascalsTriangleHelper::cell(4, 4));

        $this->assertEquals(1, PascalsTriangleHelper::cell(0, 5));
        $this->assertEquals(5, PascalsTriangleHelper::cell(1, 5));
        $this->assertEquals(10, PascalsTriangleHelper::cell(2, 5));
        $this->assertEquals(10, PascalsTriangleHelper::cell(3, 5));
        $this->assertEquals(5, PascalsTriangleHelper::cell(4, 5));
        $this->assertEquals(1, PascalsTriangleHelper::cell(5, 5));
    }

    /**
     * Test row()
     *
     * @return void
     */
    public function testRow(): void {

        $this->assertNull(PascalsTriangleHelper::row(-1));

        $this->assertEquals(1, PascalsTriangleHelper::row(0));
        $this->assertEquals(2, PascalsTriangleHelper::row(1));
        $this->assertEquals(4, PascalsTriangleHelper::row(2));
        $this->assertEquals(8, PascalsTriangleHelper::row(3));
        $this->assertEquals(16, PascalsTriangleHelper::row(4));
        $this->assertEquals(32, PascalsTriangleHelper::row(5));
    }
}
