<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Database;

use WBW\Library\Core\Database\PaginateHelper;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Paginate helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Database
 * @final
 */
final class PaginateHelperTest extends AbstractFrameworkTestCase {

    /**
     * Tests the getPageOffsetAndLimit() method.
     *
     * @return void
     */
    public function testGetPageOffsetAndLimit() {

        $this->assertEquals(-1, PaginateHelper::getPageOffsetAndLimit(-1, 300));
        $this->assertEquals(-1, PaginateHelper::getPageOffsetAndLimit(0, -1));
        $this->assertEquals(-1, PaginateHelper::getPageOffsetAndLimit(-1, -1));

        $this->assertEquals([0, 300], PaginateHelper::getPageOffsetAndLimit(0, 300));
        $this->assertEquals([300, 300], PaginateHelper::getPageOffsetAndLimit(1, 300));
        $this->assertEquals([90000, 300], PaginateHelper::getPageOffsetAndLimit(300, 300));
        $this->assertEquals([90300, 300], PaginateHelper::getPageOffsetAndLimit(301, 300));

        $this->assertEquals([0, 255], PaginateHelper::getPageOffsetAndLimit(0, 300, 255));
        $this->assertEquals([300, 255], PaginateHelper::getPageOffsetAndLimit(1, 300, 555));
        $this->assertEquals([90000, 255], PaginateHelper::getPageOffsetAndLimit(300, 300, 90255));
        $this->assertEquals([90300, 255], PaginateHelper::getPageOffsetAndLimit(301, 300, 90555));
    }

    /**
     * Tests the getPagesCount() method.
     *
     * @return void
     */
    public function testGetPagesCount() {

        $this->assertEquals(-1, PaginateHelper::getPagesCount(-1, 300));
        $this->assertEquals(-1, PaginateHelper::getPagesCount(0, -1));
        $this->assertEquals(-1, PaginateHelper::getPagesCount(-1, -1));

        $this->assertEquals(0, PaginateHelper::getPagesCount(0, 300));
        $this->assertEquals(1, PaginateHelper::getPagesCount(1, 300));
        $this->assertEquals(1, PaginateHelper::getPagesCount(300, 300));
        $this->assertEquals(2, PaginateHelper::getPagesCount(301, 300));
    }

}
