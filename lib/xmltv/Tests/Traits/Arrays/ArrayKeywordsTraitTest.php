<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Traits\Arrays;

use WBW\Library\XmlTv\Model\Keyword;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArrayKeywordsTrait;

/**
 * Array keywords trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArrayKeywordsTraitTest extends AbstractTestCase {

    /**
     * Test addKeyword()
     *
     * @return void
     */
    public function testAddKeyword(): void {

        // Set a Keyword mock.
        $keyword = new Keyword();

        $obj = new TestArrayKeywordsTrait();

        $obj->addKeyword($keyword);
        $this->assertSame($keyword, $obj->getKeywords()[0]);
        $this->assertEquals(1, $obj->getNumberKeywords());
        $this->assertTrue($obj->hasKeywords());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayKeywordsTrait();

        $this->assertEquals([], $obj->getKeywords());
        $this->assertEquals(0, $obj->getNumberKeywords());
        $this->assertFalse($obj->hasKeywords());
    }
}
