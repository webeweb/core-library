<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Scraping\Cleaner;

use WBW\Library\Core\Scraping\Cleaner\PregReplaceScrapingCleaner;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * preg_replace scraping cleaner test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Scraping\Cleaner
 */
class PregReplaceScrapingCleanerTest extends AbstractTestCase {

    /**
     * Tests the clean() method.
     *
     * @return void
     */
    public function testClean() {

        $obj = new PregReplaceScrapingCleaner("/pattern/", "replacement");

        $this->assertNull($obj->clean(null));
        $this->assertNull($obj->clean(true));
        $this->assertEquals("replacement", $obj->clean("pattern"));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PregReplaceScrapingCleaner("/pattern/", "replacement");

        $this->assertEquals("/pattern/", $obj->getPattern());
        $this->assertEquals("replacement", $obj->getReplacement());
    }

}
