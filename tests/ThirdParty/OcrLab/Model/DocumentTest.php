<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\OcrLab\Model;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\OcrLad\Model\Document;
use WBW\Library\Core\ThirdParty\OcrLad\Model\Page;

/**
 * Document  test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\ThirdParty\OcrLab\Model
 */
class DocumentTest extends AbstractTestCase {

    /**
     * Tests the addPage() method.
     *
     * @return void
     */
    public function testAddPage() {

        // Set a Page mock.
        $page = new Page();

        $obj = new Document();

        $obj->addPage($page);
        $this->assertSame($page, $obj->getPages()[0]);
        $this->assertEquals(1, $obj->getNumberPages());
        $this->assertTrue($obj->hasPages());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Document();

        $this->assertNull($obj->getFilename());
        $this->assertEquals([], $obj->getIndex());
        $this->assertEquals([], $obj->getPages());
        $this->assertEquals([], $obj->getWords());

        $this->assertEquals(0, $obj->getNumberPages());
        $this->assertEquals(0, $obj->getNumberWords());
        $this->assertFalse($obj->hasPages());
        $this->assertFalse($obj->hasWords());
    }

    /**
     * Tests the getPage() method.
     *
     * @return void
     */
    public function testGetPage() {

        // Set a Page mock.
        $page = new Page();

        $obj = new Document();
        $obj->addPage($page);

        $this->assertSame($page, $obj->getPage(0));

        $this->assertNull($obj->getPage(-1));
        $this->assertNull($obj->getPage(1));
    }
}