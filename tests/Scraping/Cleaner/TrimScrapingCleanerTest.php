<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Scraping\Cleaner;

use WBW\Library\Core\Scraping\Cleaner\TrimScrapingCleaner;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * trim scraping cleaner test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Scraping\Cleaner
 */
class TrimScrapingCleanerTest extends AbstractFrameworkTestCase {

    /**
     * Tests the clean() method.
     *
     * @return void
     */
    public function testClean() {

        $obj = new TrimScrapingCleaner();

        $this->assertNull($obj->clean(null));
        $this->assertNull($obj->clean(true));
        $this->assertEquals("string", $obj->clean(" string "));
    }

}
