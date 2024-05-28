<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Database;

use WBW\Library\Common\Database\Paginator;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Paginator test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Database
 */
class PaginatorTest extends AbstractTestCase {

    /**
     * Test countPages()
     *
     * @return void
     */
    public function testCountPages(): void {

        $this->assertEquals(-1, Paginator::countPages(-1, 300));
        $this->assertEquals(-1, Paginator::countPages(0, -1));
        $this->assertEquals(-1, Paginator::countPages(-1, -1));

        $this->assertEquals(0, Paginator::countPages(0, 300));
        $this->assertEquals(1, Paginator::countPages(1, 300));
        $this->assertEquals(1, Paginator::countPages(300, 300));
        $this->assertEquals(2, Paginator::countPages(301, 300));
    }

    /**
     * Test offsetLimit()
     *
     * @return void
     */
    public function testOffsetAndLimit(): void {

        $this->assertEquals([-1, -1], Paginator::offsetLimit(-1, 300));
        $this->assertEquals([-1, -1], Paginator::offsetLimit(0, -1));
        $this->assertEquals([-1, -1], Paginator::offsetLimit(-1, -1));

        $this->assertEquals([0, 300], Paginator::offsetLimit(0, 300));
        $this->assertEquals([300, 300], Paginator::offsetLimit(1, 300));
        $this->assertEquals([90000, 300], Paginator::offsetLimit(300, 300));
        $this->assertEquals([90300, 300], Paginator::offsetLimit(301, 300));

        $this->assertEquals([0, 255], Paginator::offsetLimit(0, 300, 255));
        $this->assertEquals([300, 255], Paginator::offsetLimit(1, 300, 555));
        $this->assertEquals([90000, 255], Paginator::offsetLimit(300, 300, 90255));
        $this->assertEquals([90300, 255], Paginator::offsetLimit(301, 300, 90555));
    }
}
